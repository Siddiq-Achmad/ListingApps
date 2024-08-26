<?php

namespace App\Http\Controllers\API\Surveys;

use App\Http\Controllers\Controller;
use App\Http\Resources\Surveys\ResponseResource;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $responses = SurveyResponse::with(['survey'])->get();
        return ResponseResource::collection($responses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
