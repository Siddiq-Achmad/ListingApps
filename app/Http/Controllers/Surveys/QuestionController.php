<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\SurveyAnswer;
use App\Models\SurveyQuestion;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

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
 

        try {
            
            $request->validate([
                'survey_id' => 'required|exists:surveys,id',
                'question_text' => 'required|string|max:255',
                'question_type' => 'required|string|max:255',
                'options' => 'nullable',
            ]);
           
            // Simpan data question
            $question = new SurveyQuestion([
                'survey_id' => $request->survey_id,
                'question_text' => $request->question_text,
                'question_type' => $request->question_type,
                'options' => $request->options,
            ]);
            $question->save();

    
            
            // Jika berhasil
            return response()->json([
                'success' => true,
                'message' => 'Question created successfully'
            ], 201);
    
        } catch (ValidationException $e) {
            // Jika validasi gagal, tangkap error dan kembalikan error dalam bentuk JSON
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
    
        } catch (\Exception $e) {
            // Tangkap semua error lainnya (misalnya error database)
            Log::error('Error saving Question: ' . $e->getMessage());
    
            // Kembalikan response error
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving the user'
            ], 500);
        }
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
                return response()->json([
                    'status' => 'success',
                    'message' => 'Question deleted successfully'
                ]);
            }
            else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'Question not found'
                ]);
            }
        }

        return response()->json([
            'status' => 'error',
            'message' => 'You are not authorized to delete this question'
        ]);

        
    }

}
