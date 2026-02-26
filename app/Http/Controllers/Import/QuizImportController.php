<?php

namespace App\Http\Controllers\Import;

use App\Models\Quiz\Quiz;
use App\Imports\QuizImport;
use Illuminate\Http\Request;
use App\Models\Quiz\QuizQuestion;
use App\Models\QuizQuestionTopic;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Quiz\QuizQuestionOption;
use App\Models\Quiz\QuizQuizQuestion;

class QuizImportController extends Controller
{
    public function showImportForm()
    {
        return view('frontend.import.quizImport');
    }

    /**
     * Handle the import request.
     */
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv|max:2048',
        ]);

        $import = new QuizImport;
        Excel::import($import, $request->file('file'));

        $importedData = $import->getImportedData();

        $quiz = Quiz::where('title', $importedData[1][0])->first();

        if ($quiz) {
            QuizQuestion::where('quiz_id', $quiz->id)->delete();
            QuizQuestionOption::where('quiz_id', $quiz->id)->delete();
            DB::table('quiz_quiz_question')->where('quiz_id', $quiz->id)->delete();
        } else {
            $quiz = Quiz::create([
                'title' => $importedData[1][0],
            ]);
        }

        $importedData = array_slice($importedData, 0);

        foreach ($importedData as $row) {
            if (empty($row[0])) {
                \Log::info("Row skipped due to missing ID: " . json_encode($row));
                continue;
            }

            $quiz_topic = QuizQuestionTopic::firstOrCreate([
                'title' => $row[1] ?? null,
            ]);

            $quiz_question = QuizQuestion::firstOrCreate([
                'quiz_question_topic_id' => $quiz_topic->id,
                'quiz_id' => $quiz->id,
                'topic_title' => $quiz_topic->title,
                'title' => $row[2] ?? null,
                'mark' => $row[3] ?? null,
                'is_multiple' => $row[4] ?? null,
            ]);

            QuizQuizQuestion::create([
                'quiz_id' => $quiz->id,
                'quiz_question_id' => $quiz_question->id,
            ]);

            $options = [
                ['title' => $row[5], 'is_correct' => $row[6]],
                ['title' => $row[7], 'is_correct' => $row[8]],
                ['title' => $row[9], 'is_correct' => $row[10]],
                ['title' => $row[11], 'is_correct' => $row[12]],
            ];

            $correctOptionsCount = 0;

            foreach ($options as $option) {
                if ($option['is_correct'] == 1) {
                    $correctOptionsCount++;
                }

                QuizQuestionOption::create([
                    'quiz_id' => $quiz->id,
                    'question_id' => $quiz_question->id,
                    'title' => $option['title'] ?? null,
                    'is_correct' => $option['is_correct'] ?? null,
                ]);
            }

            if ($quiz_question->is_multiple == 1) {
                if ($correctOptionsCount >= 2) {
                    \Log::error("Error in question: {$quiz_question->title} (Quiz ID: {$quiz->id}) - For multiple choice questions, exactly 2 options must be marked as correct. Found {$correctOptionsCount} correct options.");
                    continue;
                }
            } else {
                if ($correctOptionsCount != 1) {
                    \Log::error("Error in question: {$quiz_question->title} (Quiz ID: {$quiz->id}) - For single choice questions, exactly 1 option must be marked as correct. Found {$correctOptionsCount} correct options.");
                    continue;
                }
            }
        }

        try {

            return back()->with('success', 'Courses imported successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }
}
