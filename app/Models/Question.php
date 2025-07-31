<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Question extends Model
{
    protected $fillable = [
        'question_ar',
        'question_en',
        'answer_ar',
        'answer_en',
    ];

    public function getQuestionAttribute()
    {
        return $this['question_' . app()->getLocale()];
    }

    public function getAnswerAttribute()
    {
        return $this['answer_' . app()->getLocale()];
    }
}
