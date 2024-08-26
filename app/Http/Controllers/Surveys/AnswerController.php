<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\SurveyAnswer;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    public function index()
    {
        //
        $surveys = Survey::all();
        $questions = SurveyQuestion::all();
        $respondents = SurveyResponse::all();
        $answers = SurveyAnswer::all();
        return view('surveys.answer', compact('answers', 'surveys', 'questions', 'respondents'));
        //return response()->json($questions);
    }

    public function answers()
    {
        //
        $surveyId = 1;
        $questions = SurveyQuestion::all();
        $respondents = SurveyResponse::all();
        //$answers = SurveyAnswer::with('response', 'question')->get();
        $answers = SurveyAnswer::with('response', 'question', 'question.survey')->get();
                         
        //return response()->json($answers);
        return response()->json([
            'status' => 'success',
            'data' => $answers
        ], 200);
    }


}
