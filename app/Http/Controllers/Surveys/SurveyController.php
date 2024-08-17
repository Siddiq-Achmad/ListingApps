<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $surveys = Survey::all();
        //return response()->json($surveys);
        return view('surveys.index', compact('surveys'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('surveys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);
        
        $survey = new Survey();
        $survey->title = $request->title;
        $survey->description = $request->description;
        $survey->status = $request->status;
        $survey->user_id = auth()->user()->id;
        $survey->save();
        $typeStatus = $survey->status ? 'Active' : 'Inactive';

        return redirect()->route('surveys.index')->with('success', 'Survey created successfully. Status: '.$request->status . 'Type: ' . $typeStatus );
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        //
        if($survey->id){
        $survey = Survey::find($survey->id);
        
        return view('surveys.survey-details', compact('survey'));
        }
        else{
            return redirect()->route('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $survey = Survey::find($id);
        return response()->json($survey);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        
        

        $survey = Survey::findOrFail($id);

        if($request->status == null){
           $status = $survey->status;
        }else{
           $status = $request->status;
        }

        $survey->title = $request->title;
        $survey->description = $request->description;
        $survey->status = $status;
        $survey->save();
        $typeStatus = $survey->status ? 'Active' : 'Inactive';
        
        //dd($request->all());
        
        return redirect()->route('surveys.index')->with('success', 'Survey updated successfully');
        //return response()->json($survey)->with('success', 'Survey updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $survey = Survey::find($id);

        $survey->delete();
        if($survey){
            return redirect()->route('surveys.index')->with('error', 'Survey deleted successfully.');
        }
        else{
            return redirect()->route('surveys.index')->with('info', 'Survey not found.');
        }
    }

    public function storeResponse(Request $request, Survey $survey)
    {
        $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|string',
        ]);

        $response = $survey->responses()->create();

        foreach ($request->answers as $question_id => $answer_text) {
            $response->answers()->create([
                'question_id' => $question_id,
                'answer_text' => $answer_text,
            ]);
        }

        return redirect()->route('surveys.thankyou', $survey);
    }

    public function thankYou(Survey $survey)
    {
        return view('surveys.thankyou', compact('survey'));
    }
}
