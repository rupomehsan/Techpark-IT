<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCourseInstructor extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'course_course_instructor';
    protected static function booted()
    {
        static::created(function ($data) {
            $data->slug = random_int(100, 999) . $data->id . random_int(1000, 9999);
            $data->save();
        });
    }

    public function course_teacher()
    {
        return $this->hasOne(CourseInstructors::class, 'id', 'instructor_id');
    }
}
