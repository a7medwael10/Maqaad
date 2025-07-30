<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Services\QuestionsService;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    protected $questionsService;

    public function __construct(QuestionsService $questionsService)
    {
        $this->questionsService = $questionsService;
    }

    public function questions()
    {
        $questions = $this->questionsService->getAllQuestions();
        return view('site.questions',compact('questions'));
    }
}
