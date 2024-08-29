<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\SurveyAnswer;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }

    public function search()
    {
        return view('frontend.search');
    }


    public function survey()
    {
        $dataId = 26;
        $survey = Survey::with('questions')->findOrFail($dataId);
        $questions = $survey->questions();
        return view('frontend.surveys.survey', compact('survey', 'questions'));
    }

    public function surveyStore(Request $request)
    {
        //dd($request->all());
        // Ambil data personal
        $dataRespondent = $request->only(['survey_id','name', 'email', 'phone', 'age', 'city', 'education_level']);

        // Buat data SurveyResponse
        
        // Simpan data ke SurveyResponse
        $surveyResponse = new SurveyResponse();
        $surveyResponse->survey_id = $dataRespondent['survey_id'];
        $surveyResponse->name = $dataRespondent['name'];
        $surveyResponse->email = $dataRespondent['email'];
        $surveyResponse->phone = $dataRespondent['phone'];
        $surveyResponse->gender = '-';
        $surveyResponse->age = $dataRespondent['age'];
        $surveyResponse->city = $dataRespondent['city'];
        $surveyResponse->education_level = $dataRespondent['education_level'];
        $surveyResponse->save();

        
        // Ambil semua input yang terkait dengan jawaban survey
        $answers = $request->except(['_token', 'survey_id', 'name', 'email', 'phone', 'age', 'city', 'education_level']);

        // Loop semua jawaban
        foreach ($answers as $key => $answer) {
            if (strpos($key, 'q_') === 0) { // Cek apakah input ini merupakan pertanyaan (q_1, q_2, dst)
                $questionId = str_replace('q_', '', $key); // Ambil ID pertanyaan dari nama field
                
                // Simpan jawaban ke SurveyAnswer
                SurveyAnswer::create([
                    'response_id' => $surveyResponse->id,   
                    'question_id' => $questionId,
                    'answer' => is_array($answer) ? implode(',', $answer) : $answer, // Jika input adalah array, gunakan fungsi implode untuk menggabungkan semua elemen menjadi string
                ]);
            }
        }

        return redirect()->back()->with('success', 'Survey berhasil disimpan!');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function packages()
    {
        return view('frontend.packages');
    }

    public function howItWork()
    {
        return view('frontend.how-it-work');
    }

    public function blogList()
    {
        return view('frontend.blogs.blog-list');
    }

    public function blog()
    {
        return view('frontend.blogs.blog');
    }

    public function blogDetails()
    {
        return view('frontend.blog-single');
    }

    public function listing()
    {
        return view('frontend.listings.listing');
    }

    public function listingDetails()
    {
        return view('frontend.listing-single');
    }

    public function shop()
    {
        return view('frontend.shops.shop');
    }

    public function cart()
    {
        return view('frontend.carts.cart');
    }

    public function checkout()
    {
        return view('frontend.carts.checkout');
    }

    public function wishlist()
    {
        return view('frontend.carts.wishlist');
    }

    public function auth()
    {
        return view('frontend.auth');
    }

    public function notFound()
    {
        return view('frontend.errors.404');
    }


}
