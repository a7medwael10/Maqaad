<?php

namespace App\Services;

use App\Models\Question;

class QuestionsService
{
    public function getAllQuestions($limit = null)
    {
        $query = Question::query()->orderBy('created_at', 'desc');

        if ($limit) {
            $query->take($limit);
        }

        return $query->get();
    }


}
