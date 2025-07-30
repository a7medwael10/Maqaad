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
        return App::getLocale() === 'ar' ? $this->question_ar : $this->question_en;
    }

    public function getAnswerAttribute()
    {
        return App::getLocale() === 'ar' ? $this->answer_ar : $this->answer_en;
    }
}
