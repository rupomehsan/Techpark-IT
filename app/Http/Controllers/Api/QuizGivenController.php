<?php

namespace App\Http\Controllers\Api;

use App\Models\Quiz\Quiz;
use Illuminate\Http\Request;
use App\Models\Quiz\QuizQuestion;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Course\CourseModuleTaskCompleteByUsers;
use App\Models\Quiz\QuizQuizQuestion;

class QuizGivenController extends Controller
{
    public function showQuiz($quizSlug)
    {
        $referrer = url()->previous();

        // Dynamically store the referrer in the session
        if ($referrer && strpos($referrer, 'my-course') !== false) {
            request()->session()->put('return_to_module', $referrer);
        }

        $quiz = Quiz::where('slug', $quizSlug)->first();

        $topic = QuizQuizQuestion::where('quiz_id', $quiz->id)
            ->with([
                'quizQuestion' => function ($query) {
                    $query->with('options');
                }
            ])
            ->get();
        // dd($topic);
        return view('frontend.pages.quizShow', compact('quiz', 'topic'));
    }

    public function submitQuiz(Request $request)
    {
        // Validate the incoming request
        $data = $request->validate([
            'quiz_id' => 'required',
            'answers' => 'required|array',
            'answers.*.question_id' => 'required',
            'answers.*.selected_option' => 'required_without:answers.*.selected_options',
            'answers.*.selected_options' => 'required_without:answers.*.selected_option|array',
        ]);

        $score = 0;
        $obtain_mark = 0;
        $userAnswers = [];
        $total_mark = QuizQuestion::where('quiz_id', $data['quiz_id'])->sum('mark');

        $lms_quiz_submission_ids = [];

        foreach ($data['answers'] as $answer) {
            $questionPivot = QuizQuizQuestion::where('quiz_id', $data['quiz_id'])
                ->where('id', $answer['question_id'])
                ->first();

            $question = QuizQuestion::where('quiz_id', $data['quiz_id'])
                ->where('id', $questionPivot->quiz_question_id)
                ->first();

            if ($question) {
                if (!$question->is_multiple) {
                    $selectedOptionIds = [$answer['selected_option']];
                } else {
                    $selectedOptionIds = $answer['selected_options'];
                }

                $questionObj = QuizQuestion::with('options')->find($questionPivot->quiz_question_id);

                $correctOptions = $questionObj->options->where('is_correct', 1)->pluck('id')->toArray();
                $isCorrect = false;

                if (!$question->is_multiple) {
                    // For single-choice questions, compare the selected option with the correct option
                    if (in_array($answer['selected_option'], $correctOptions)) {
                        $isCorrect = true;
                    }
                } else {
                    // For multiple-choice questions, compare the selected options with the correct options

                    // Convert both request and database correct options to sorted strings
                    $selectedOptionStr = implode(',', $selectedOptionIds);
                    $correctOptionStr = implode(',', $correctOptions);

                    // Sort the strings to make sure the order doesn't affect the comparison
                    $selectedOptionStr = implode(',', (array)collect(explode(',', $selectedOptionStr))->sort()->toArray());
                    $correctOptionStr = implode(',', (array)collect(explode(',', $correctOptionStr))->sort()->toArray());

                    // Compare the sorted strings
                    if ($selectedOptionStr === $correctOptionStr) {
                        $isCorrect = true;
                    }
                }

                // Store user answer details
                $userAnswers[] = [
                    'question_id' => $questionObj->id,
                    'selected_option' => $answer['selected_option'] ?? null,
                    'selected_options' => $answer['selected_options'] ?? null,
                    'is_correct' => $isCorrect,
                ];

                // Update score and obtain mark if the answer is correct
                if ($isCorrect) {
                    $score++;
                    $obtain_mark += $questionObj->mark;
                }

                // Insert submission record for each selected option
                foreach ($selectedOptionIds as $selectedOptionId) {
                    $selectedOption = $questionObj->options->where('id', $selectedOptionId)->first();
                    $mark = $questionObj->mark;

                    // Insert submission record
                    $quiz_submission_id = DB::table('quiz_question_submissions')->insertGetId([
                        'user_id' => auth()->user()->id,
                        'quiz_id' => $data['quiz_id'],
                        'question_id' => $questionObj->id,
                        'option_id' => $selectedOptionId, // Single option inserted per record
                        'is_correct' => $isCorrect,
                    ]);

                    $lms_quiz_submission_ids[] = $quiz_submission_id;
                }
            }
        }

        // Convert lms_quiz_submission_ids to string
        $string_quiz_submission_ids = implode(',', $lms_quiz_submission_ids);

        // Count existing submissions for this quiz
        $count_submission = DB::table('quiz_submission_results')
            ->where('user_id', auth()->user()->id)
            ->where('quiz_id', $data['quiz_id'])
            ->count();

        // // Insert the result of this submission
        DB::table('quiz_submission_results')->insert([
            'user_id' => auth()->user()->id,
            'quiz_id' => $data['quiz_id'],
            'quiz_submission_ids' => $string_quiz_submission_ids,
            'submission_no' => $count_submission + 1,
            'total_mark' => $total_mark,
            'obtain_mark' => $obtain_mark,
            'pass_mark' => null,
            'submission_datetime' => now(),
        ]);

        $quizSlug = Quiz::find($data['quiz_id'])->slug;

        // Return user answers and score to the session
        return redirect()->route('quiz.show', $quizSlug)
            ->with([
                'user_answers' => $userAnswers,
                'score' => $score,
                'total_questions' => count($data['answers']),
            ]);
    }

    public function course_completion(Request $request)
    {
        $courseID = json_decode($request->input('course_id'), true);
        $mileStoneID = json_decode($request->input('milestone_id'), true);
        $moduleId = json_decode($request->input('module_id'), true);
        $classId = json_decode($request->input('class_id'), true);
        $quizId = json_decode($request->input('quiz_id'), true) ?? null;
        $userId = auth()->user()->id;

        $course_completion = CourseModuleTaskCompleteByUsers::where('user_id', $userId)
            ->where('course_id', $courseID)
            ->where('milestone_id', $mileStoneID)
            ->where('module_id', $moduleId)
            ->where('class_id', $classId)
            ->first();

        if ($course_completion) {
            $course_completion->update([
                'quiz_id' => $quizId,
                'updated_at' => now(),
            ]);
        } else {
            CourseModuleTaskCompleteByUsers::create([
                'course_id' => $courseID,
                'milestone_id' => $mileStoneID,
                'module_id' => $moduleId,
                'class_id' => $classId,
                'user_id' => $userId,
                'quiz_id' => $quizId,
            ]);
        }

        return response()->json(['success' => 'Course Completion Updated Successfully']);
    }
}
