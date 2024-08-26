<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\SurveyAnswer;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    //
    public function index()
    {
        //
        $surveys = Survey::all();
        $respondents = SurveyResponse::all();
        $answers = SurveyAnswer::all();
        $questions = SurveyQuestion::with('survey')->get();
        return view('surveys.question', compact('questions', 'surveys', 'respondents', 'answers'));
    }

    public function questions()
    {
        $questions = SurveyQuestion::with('survey')->get();
        return response()->json([
            'status' => 'success',
            'data' => $questions
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
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
        $question = SurveyQuestion::find($id);
        $surveys = Survey::find($question->survey_id);

        if(Auth::user()->id == $surveys->user_id){
            $delete = $question->delete();
            if($delete){
                return redirect()->route('surveys.show', $question->survey_id)->with('success', 'Question deleted successfully. ');
            }
            else{
                return redirect()->route('surveys.show', $question->survey_id)->with('error', 'Question not deleted. ');
            }
        }

        return redirect()->route('surveys.show', $question->survey_id)->with('error', 'You are not authorized to delete this question. ');

        
    }

}
