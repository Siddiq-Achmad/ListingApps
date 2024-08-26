<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Survey;
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

    public function show()
    {
        return view('frontend.show');
    }

    public function survey()
    {
        $dataId = 1;
        $survey = Survey::with('questions')->findOrFail($dataId);
        $questions = $survey->questions()->paginate(10);
        return view('frontend.surveys.survey', compact('survey', 'questions'));
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
