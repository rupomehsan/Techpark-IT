<?php

namespace App\Models\Quiz;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuizQuestion extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'quiz_quiz_question';

    public function quizQuestion()
    {
        return $this->hasOne(QuizQuestion::class, 'id', 'quiz_question_id');
    }
}
