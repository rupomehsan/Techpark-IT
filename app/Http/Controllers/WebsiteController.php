<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Faq;
use App\Models\User;
use App\Models\Package;
use App\Models\Developer;
use App\Models\Blog\Blogs;
use App\Models\CourseType;
use App\Models\ItServices;
use App\Models\WorkWithUs;
use App\Models\GalleryImage;
use App\Models\SuccessStory;
use App\Models\Course\Course;
use App\Models\ItServiceImages;
use App\Models\CourseSepciality;
use App\Models\Package_Keypoint;
use App\Models\CourseOutcomeStep;
use App\Models\EnrollInformation;
use App\Models\Seminars\Seminars;
use App\Models\Blog\BlogsCategories;
use App\Models\Course\CourseBatches;
use App\Models\GalleryImageCategory;
use App\Models\Course\CourseCategory;
use App\Models\Package_Keypoint_value;
use Illuminate\Support\Facades\Request;
use App\Models\Course\CourseInstructors;
use App\Models\Course\CourseBatchStudent;
use Illuminate\Support\Facades\Validator;
use App\Models\Seminars\SeminarParticipants;
use App\Models\Course\CourseModuleClassRoutines;
use App\Models\Course\CourseModuleTaskCompleteByUsers;

class WebsiteController extends Controller
{
    public function index()
    {
        $course_categories = CourseCategory::where('status', 'active')->get();
        $course_types = CourseType::where('status', 'active')->get();
        $courses = Course::active()->with(['course_batch' => function ($batch) {
            $batch->orderBY('id', 'desc')->take(1);
        }])->where('is_published', 1)->get();
        $seminar = Seminars::whereDate('date_time', '>', Carbon::today())->get();
        $course_speciality = CourseSepciality::get();
        $course_learning_steps = CourseOutcomeStep::get();
        $success_stories = SuccessStory::get();
        $it_services = ItServices::get();
        $partners = WorkWithUs::select('image')->get();
        $team_picture = GalleryImageCategory::where('slug', 'home_team')->with('images')->first();

        return view(
            'frontend.home',
            [
                'course_categories' => $course_categories,
                'course_types' => $course_types,

                'courses' => $courses,
                "seminar" => $seminar,

                'course_speciality' => $course_speciality,
                'course_learning_steps' => $course_learning_steps,
                'success_stories' => $success_stories,
                'it_services' => $it_services,
                'partners' => $partners,
                'team_picture' => $team_picture
            ]
        );
    }

    public function all_types()
    {
        return CourseType::active()->get();
    }

    public function all_course()
    {
        $today = Carbon::today();
        $query = Course::select('id', 'title', 'slug', 'image')
            ->where('published_at', '<=', $today)->where('is_published', 1)->orWhere('published_at', NULL)->active();
        if (request()->has('course_type')) {
            $query->whereExists(function ($query) {
                $query->from('course_course_types')
                    ->whereColumn('course_course_types.course_id', 'courses.id')
                    ->where('course_course_types.course_type_id', request()->course_type);
            });
        }
        $courses = $query->paginate(3);

        if (request()->has('course_type')) {
            $courses->appends('course_type', request()->course_type);
        }

        // foreach ($courses as $course) {
        //     // $course->rest_days = $course
        //     $course->details = $course->course_batch()
        //         ->select([
        //             'id',
        //             'course_id',
        //             'admission_end_date',
        //             'batch_student_limit',
        //             'seat_booked',
        //             'course_price',
        //             'after_discount_price',
        //             'booked_percent'
        //         ])
        //         ->active()->orderBy('id', 'DESC')->first();
        // }

        return response()->json($courses);
    }

    public function course_details($slug)
    {
        $data = Course::active()->with([
            'course_instructor' => function ($q) {
                $q->with('course_teacher');
            },
        ])->where('slug', $slug)->first();

        $check_enrolled = false;
        if (auth()->check()) {
            $check_enrolled = EnrollInformation::where('student_id', auth()->user()->id)
                ->where('course_id', $data->id)
                ->exists();
        }
        return view('frontend.pages.course_details', ['data' => $data, 'check_enrolled' => $check_enrolled]);
    }

    public function course_enroll($slug)
    {
        $course = Course::active()->where('slug', $slug)
            ->select('id', 'title', 'slug', 'image', 'is_free')
            ->with([
                'course_batch' => function ($q) {
                    $q->select('id', 'course_id', 'course_price', 'after_discount_price')->active()->orderBy('id', 'DESC');
                }
            ])
            ->first();

        if ($course->is_free) {
            return $this->course_enroll_submit($slug, false);
        }

        return view('frontend.pages.course_enroll', ['course' => $course]);
    }

    public function course_enroll_submit($slug, $validation = true)
    {
        if ($validation) {
            $this->validate(request(), [
                "trx_id" => ["required"],
            ]);
        }

        $course = Course::active()->where('slug', $slug)->select('id', 'slug', 'title')->first();
        $batch = CourseBatches::active()
            ->where('course_id', $course->id)
            ->orderBy('id', 'DESC')
            ->select('id', 'batch_name')
            ->first();

        $course_std_check = CourseBatchStudent::where('student_id', auth()->user()->id)
            ->where('batch_id', $batch->id)
            ->where('course_id', $course->id)
            ->exists();

        if (!$course_std_check) {
            $enroll_payment = new EnrollInformation();
            $enroll_payment->course_id = $course->id;
            $enroll_payment->student_id = auth()->user()->id;
            $enroll_payment->batch_id = $batch->id;
            $enroll_payment->trx_id = request()->trx_id;
            $enroll_payment->payment_type = 'online';
            $enroll_payment->save();

            $course_batch_student = new CourseBatchStudent();
            $course_batch_student->course_id = $enroll_payment->course_id;
            $course_batch_student->batch_id = $enroll_payment->batch_id;
            $course_batch_student->student_id = $enroll_payment->student_id;
            $course_batch_student->status = 'active';
            $course_batch_student->save();

            return redirect("/my-course/$course->slug")
                ->with('success', 'Course Enrolled Successfully!');
        } else {
            return redirect("/my-course/$slug");
            // ->with('warning', 'You are already enrolled!');
        }
    }

    public function type_wise_course()
    {
        // $courses = Course
        $seminar = Seminars::whereDate('date_time', '>', Carbon::today())->get();
        return view('frontend.home', compact('seminar'));
    }

    public function about()
    {
        $course_categories = CourseCategory::where('status', 'active')->get();
        $partners = WorkWithUs::select('image')->get();
        $our_team_pictures = GalleryImageCategory::where('slug', 'hangouts')->with('images')->first();
        $course_instructore = CourseInstructors::take(3)->latest()->get();
        return view(
            'frontend.pages.about',
            [
                'partners' => $partners,
                'course_categories' => $course_categories,
                'our_team_pictures' => $our_team_pictures,
                'course_instructore' => $course_instructore
            ]
        );
    }

    public function contact()
    {
        $faqs = Faq::get();
        return view('frontend.pages.contact', compact('faqs'));
    }

    public function courses()
    {
        $courses = Course::active()->with(['course_batch' => function ($batch) {
            $batch->orderBY('id', 'desc')->take(1);
        }])->where('is_published', 1)->get();

        return view('frontend.pages.courses', [
            'courses' => $courses
        ]);
    }

    public function gallery()
    {
        $categories = GalleryImageCategory::with('images')->get();

        $paginatedImages = GalleryImage::paginate(9); // Adjust per-page count if needed

        return view('frontend.pages.gallery', compact('categories', 'paginatedImages'));
    }

    public function gallery_slug($slug)
    {
        $categories_titles = GalleryImageCategory::get();
        $category = GalleryImageCategory::where('slug', $slug)->firstOrFail();

        // Fetch paginated images using query builder
        $paginatedImages = GalleryImage::where('gallery_category_id', $category->id)->paginate(9);

        return view('frontend.pages.gallery', compact('categories_titles', 'category', 'paginatedImages'));
    }


    public function blog()
    {

        $blog_categories = BlogsCategories::where('status', 'active')->get();

        $blogsQuery = Blogs::where('published', 1)
            ->where('status', 'active')
            ->with(['categories']);

        if (request()->has('category')) {
            $category = BlogsCategories::where('id', request()->category)->first();
            if ($category) {
                $blogsQuery->whereHas('categories', function ($q) use ($category) {
                    $q->where('blogs_categories_id', $category->id);
                });
            }
        }

        $blogs = $blogsQuery->paginate(6);

        $latestBlogs = Blogs::where('published', 1)
                ->where('status', 'active')
                ->with(['categories'])
                ->latest()
                ->first();

        return view('frontend.pages.blog', compact('blog_categories', 'blogs', 'latestBlogs'));
    }


    public function blog_details($slug)
    {
        $blog = Blogs::where('slug', $slug)->where('published', 1)->where('status', 'active')->with(['category'])->first();
        return view('frontend.pages.blog-details', compact('blog'));
    }

    public function seminar()
    {
        $seminars = Seminars::whereDate('date_time', '>', Carbon::today())->get();
        return view('frontend.pages.seminar', compact('seminars'));
    }

    public function it_solution_services()
    {
        $it_services = ItServices::get();
        $partners = WorkWithUs::select('image')->get();
        return view('frontend.pages.it_solution_services', [
            'it_services' => $it_services,
            'partners' => $partners
        ]);
    }
    public function myCourse()
    {
        $user = User::find(auth()->user()->id);
        $userWithCourses = $user->load([
            'batchStudents' => function ($query) {
                $query->select('course_id', 'id', 'batch_id', 'student_id', 'course_percent', 'is_complete');
            },
            'batchStudents.course' => function ($query) {
                $query->select('id', 'title', 'image', 'slug');
            },
            'batchStudents.batch' => function ($q2) {
                $q2->select('id', 'batch_name', 'class_days', 'class_start_time', 'class_end_time');
            }
        ]);

        // Use collection methods to split courses based on 'is_complete'
        $completedCourses = $userWithCourses->batchStudents->where('is_complete', 'complete');
        $incompleteCourses = $userWithCourses->batchStudents->where('is_complete', 'incomplete');
        // dd($userWithCourses, $completedCourses, $incompleteCourses);

        return view('frontend.pages.mycouse', [
            'user_course' => $userWithCourses->batchStudents,
            'complete_courses' => $completedCourses,
            'incomplete_courses' => $incompleteCourses,
        ]);
    }

    public function routine_details($course_id)
    {
        $course_routines = CourseModuleClassRoutines::select('id', 'course_id', 'date')->where('course_id', $course_id)->get();
        $month = [];
        // ddd($course_routines);
        if (count($course_routines) > 0) {
            foreach ($course_routines as $course_routine) {
                // dd($course_routine->date->format('m'));
                $formated_date = $course_routine->date->format('m');
                array_push($month, $formated_date);
            }
        }

        $months = array_unique($month);
        sort($months);
        $month_wise_routines = [];
        foreach ($months as $key => $value) {
            $month_name = Carbon::parse("2023-$value-01")->format('F');
            $month_wise_routines[$month_name] = CourseModuleClassRoutines::where('course_id', $course_id)->with(['class'])->whereMonth('date', $value)->get();
        }

        return $month_wise_routines;
    }

    public function myCourseDetails($slug)
    {

        $data = Course::active()->where('slug', $slug)->select('id', 'title')->first();

        $data->routines = $this->routine_details($data->id);
        // dd($data->course_mile_stones);
        $data->course_mile_stones = $data->course_mile_stones()->orderBy('milestone_no', 'ASC')->get();
        // $data->course_module = $data->course_modules()->orderBy('module_no', 'ASC')->get();

        foreach ($data->course_mile_stones as $key => $mileStones) {
            $modules = $mileStones->course_modules()->orderBy('module_no', 'ASC')->get();
            $mileStones->course_modules = $modules;
            foreach ($mileStones->course_modules as $key => $module) {

                $classes = $module->classes()->get();

                foreach ($classes as $key => $class) {

                    $class_watched_check = CourseModuleTaskCompleteByUsers::where('class_id', $class->id)
                        ->where('quiz_id', null)
                        ->where('exam_id', null)
                        ->where('course_id', $data->id)
                        ->first();

                    if ($key == 0) {
                        $class->is_complete = true;
                    } else {
                        $class->is_complete = false;
                        if ($class_watched_check != null) {
                            $class->is_complete = true;
                        }
                    }

                    $class_quiz = $class->class_quiz()->with(['quiz'])->orderBy('id', 'DESC')->first();
                    $class_exam = $class->class_exam()->with(['exam'])->orderBy('id', 'DESC')->first();

                    if ($class_quiz != null) {
                        $quiz_complete_check = CourseModuleTaskCompleteByUsers::where('class_id', $class->id)
                            ->where('course_id', $data->id)
                            ->where('user_id', auth()->user()->id)
                            ->where('quiz_id', $class_quiz->quiz_id)
                            ->first();

                        $class->class_quiz = $class_quiz;

                        $class->class_quiz->is_complete = false;
                        if ($quiz_complete_check != null) {
                            $class->class_quiz->is_complete = true;
                        }
                    }

                    if ($class_exam != null) {
                        $exam_complete_check = CourseModuleTaskCompleteByUsers::where('class_id', $class->id)
                            ->where('course_id', $data->id)
                            ->where('user_id', auth()->user()->id)
                            ->where('exam_id', $class_exam->exam_id)
                            ->first();

                        $class->class_exam = $class_exam;

                        $class->class_exam->is_complete = false;
                        if ($exam_complete_check != null) {
                            $class->class_exam->is_complete = true;
                        }
                    }
                }

                $module->classes = $classes;
                // $data->course_module[$key] = $module;

            }
        }

        $total_class_attend = CourseModuleTaskCompleteByUsers::where('course_id', $data->id)
            ->where('user_id', auth()->user()->id)
            ->count();

        $total_class = $data->course_mile_stones->sum(function ($milestone) {
            return $milestone->course_modules->sum(function ($module) {
                return $module->classes->count();
            });
        });

        $progress = round(($total_class_attend / $total_class) * 100, 2);

        return view('frontend.pages.my_course_details', ['course' => $data, 'progress' => $progress]);
    }

    public function registerSeminar()
    {
        $validator = Validator::make(request()->all(), [
            'full_name' => ['required'],
            'phone_number' => ['required'],
            'email' => ['email', 'nullable'],
            'address' => ['string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $seminar = new SeminarParticipants();
        $seminar->seminar_id = request()->seminar_id;
        $seminar->full_name = request()->full_name;
        $seminar->email = request()->email;
        $seminar->phone_number = request()->phone_number;
        $seminar->address = request()->address;
        $seminar->save();

        return response()->json(['message' => 'Registraiton for the seminar completed'], 200);
    }

    public function developer()
    {
        $developers = Developer::where('status', 'active')->get();
        return view('frontend.pages.developers', ['developer' => $developers]);
    }
    public function developer_details($slug)
    {
        $developer = Developer::where('slug', $slug)->first();
        return view('frontend.pages.developer_details', ['developer' => $developer]);
    }

    public function project_details($slug)
    {
        $service = ItServices::with('package_price')->where('slug', $slug)->first();
        $packages = Package::where('service_id', $service->id)->get();
        $it_services = ItServices::latest()->take(5)->get();
        $it_service_images = ItServiceImages::where('it_service_id', $service->id)->get();

        $package_array = [];
        $heading = ["Packages"];
        foreach ($packages as $package) {
            $package_title = '<h2>' . $package->package_title . '</h2>';
            $package_title .= "<p>" . $package->sub_title . ' pages </p>';
            $package_title .= "<h2>৳ " . $package->price . '</h2>';

            $heading[] = $package_title;
        }
        $package_array[] = $heading;

        $keypoints = Package_Keypoint::where('service_id', $service->id)->get();
        $package_rows = [];

        foreach ($keypoints as $keypoint) {
            $row = [$keypoint->title];
            foreach ($packages as $package) {
                $keypoint_values = Package_Keypoint_value::where('package_id', $package->id)
                    ->where('package_keypoint_id', $keypoint->id)
                    ->pluck('value')
                    ->toArray();
                $values = implode(', ', $keypoint_values);
                $row[] = $values ?: '<i class="fa-solid fa-check"></i>';
            }
            $package_rows[] = $row;
        }

        $price_row = ['<h2>Total Price</h2>'];
        foreach ($packages as $package) {
            $price_row[] = '<h2>৳ ' . $package->price . '</h2>';
        }
        $package_rows[] = $price_row;

        $package_array = array_merge($package_array, $package_rows);;

        return view(
            'frontend.pages.project_details',
            [
                'service' => $service,
                'packages' => $package_array,
                'package_price' => $packages,
                'it_services' => $it_services,
                'it_service_images' => $it_service_images
            ]
        );
    }

    public function success_story()
    {
        $success_stories = SuccessStory::get();
        return view('frontend.pages.successStory', ['success_stories' => $success_stories]);
    }
}
