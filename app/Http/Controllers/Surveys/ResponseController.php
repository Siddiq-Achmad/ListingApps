<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\SurveyAnswer;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    //
    public function index()
    {
        //
        $surveys = Survey::all();
        $questions = SurveyQuestion::all();
        $respondents = SurveyResponse::with(['survey'])->get();
        $answer = SurveyAnswer::all();
        return view('surveys.response', compact('answer', 'surveys', 'questions', 'respondents'));
    }

    public function Responses()
    {
        $responses = SurveyResponse::with(['survey'])->get();
        return response()->json([
            'status' => 'success',
            'data' => $responses
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
        $response = SurveyResponse::with(['survey', 'survey.questions'])->find($id);
        $survey = $response->survey;
        $questions = $response->survey->questions;
        $answers = SurveyAnswer::with('question')->where('response_id', $id)->get();
        $data = compact('response','survey','questions','answers');


        
        
        //dd($response, $answer);
        return view('surveys.survey-response', compact('response','survey','questions','answers'));
        // return response()->json([
        //     'status' => 'success',
        //     'data' => $data,
            
        // ], 200);
    }


    public function destroy($id)
    {
        //
    }
}
