<?php

namespace App\Http\Controllers\Import;

use Illuminate\Http\Request;
use App\Imports\CourseImport;
use App\Models\Course\Course;
use App\Models\Course\CourseModule;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Course\CourseMilestone;
use App\Models\Course\CourseModuleClasses;

class CourseImportController extends Controller
{
    public function showImportForm()
    {
        return view('frontend.import.courseImport');
    }

    /**
     * Handle the import request.
     */
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv|max:2048',
        ]);

        try {

            $import = new CourseImport;
            Excel::import($import, $request->file('file'));

            // Get the imported data
            $importedData = $import->getImportedData();

            // Find the course
            $course = Course::where('title', $importedData[1])->first();

            if ($course) {
                // Delete related data before inserting new data
                CourseMilestone::where('course_id', $course->id)->delete();
                CourseModule::where('course_id', $course->id)->delete();
                CourseModuleClasses::where('course_id', $course->id)->delete();
            }

            // Skip the first row by slicing the array (from second element onward)
            $importedData = array_slice($importedData, 0); // This removes the first row


            foreach ($importedData as $row) {
                // Skip if the first column (course title) is empty
                if (empty($row[0])) {
                    \Log::info("Row skipped due to missing ID: " . json_encode($row));
                    continue; // Skip this row if the first column is empty
                }

                // Insert records
                $milestone = CourseMilestone::firstOrCreate([
                    'course_id' => $course->id,
                    'title' => $row[1] ?? null,
                ]);

                $module = CourseModule::firstOrCreate([
                    'course_id' => $course->id,
                    'milestone_id' => $milestone->id,
                    'title' => $row[2] ?? null,
                ]);

                if (!empty($row[4])) {
                    CourseModuleClasses::firstOrCreate([
                        'course_id' => $course->id,
                        'milestone_id' => $milestone->id,
                        'course_modules_id' => $module->id,
                        'title' => $row[3] ?? null,
                        'class_video_link' => $row[4] ?? null,
                    ]);
                }
            }

            return back()->with('success', 'Courses imported successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }
}
