<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\SurveyAnswer;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use SebastianBergmann\CodeUnit\FunctionUnit;
use Illuminate\Support\Facades\Log;

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

    public function show($slug)
    {
        // if(view()->exists('frontend.pages.' . $slug)){
        //     return view('frontend.pages.' . $slug);
        // }
        // return abort(404);
    }


    public function survey($slug)
    {
        $survey = Survey::where('slug', $slug)->firstOrFail();
        $questions = $survey->questions();
        return view('frontend.surveys.survey', compact('survey', 'questions'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        //validasi semua form
        $validate  = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'age'  => 'nullable|numeric',
            'city' => 'nullable|string',
            'education_level' => 'nullable|string',
            'q_*' => 'required'
        ]);


        // Ambil data personal

        $dataRespondent = $request->only(['survey_id', 'name', 'email', 'phone', 'age', 'city', 'education_level']);

        //Melakukan pengecekan apakah user tersebut sudah pernah melakukan survey
        $cekEmail = SurveyResponse::where('email', $request->email,)->first();
        $cekContact =  SurveyResponse::where('phone', $request->phone)->first();
        if ($cekEmail ||  $cekContact) {
            return redirect()->back()->with('error', 'Anda sudah pernah mengisi survei');
        }
        // Ambil data jawaban
        $dataJawaban = [];

        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'q_') === 0) {
                $dataJawaban[$key] = $value;
            }
        }
        // dd($dataJawaban);


        //menggunakan try and catch
        try {

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


                    //melakukan cek jika jawaban null 
                    $answer ===  null ? $answer = '-' : $answer;

                    // Simpan jawaban ke SurveyAnswer
                    SurveyAnswer::create([
                        'response_id' => $surveyResponse->id,
                        'question_id' => $questionId,
                        'answer' => is_array($answer) ? implode(',', $answer) : $answer, // Jika input adalah array, gunakan fungsi implode untuk menggabungkan semua elemen menjadi string
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Survey berhasil disimpan!');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, simpan error ke log
            Log::error($e->getMessage());

            return  redirect()->back()->with('warning', 'Survey gagal disimpan!');
        }
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

    public function rigthSidebar()
    {
        return view('frontend.blogs.right-sidebar');
    }

    public function leftSidebar()
    {
        return view('frontend.blogs.left-sidebar');
    }

    public function blogDetails()
    {
        return view('frontend.blog-single');
    }

    public function listing()
    {
        return view('frontend.listings.listing');
    }

    public function listingMaps()
    {
        return view('frontend.listings.listingMaps');
    }

    public function listingDetails($slug)
    {

        return view('frontend.listings.listingDetails');
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
