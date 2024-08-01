@extends('frontend.layouts.master')

@section('title', '404')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection

@section('banner')
    <img src="{{ asset('assets/images/banner/21.jpg') }}" alt="" uk-cover>
@endsection


@section('content')


 <!-- MAIN CONTENT -->
 <div class="page-content">
    <!-- isi content disini -->
        <div class="uk-section-default">
            <div class="uk-section uk-background-cover uk-background-primary uk-overflow-hidden uk-light uk-flex" style="background-image: url({{ asset('assets/images/404.jpg') }}); height:80vh"
             uk-parallax="bgy: -500; saturate: 200;" uk-height-viewport="offset-top: true;" >

            <h1 class="uk-heading-xlarge uk-margin-auto uk-margin-auto-vertical">404</h1>

            <div class="uk-margin-auto uk-margin-auto-vertical">
                <h3 class="uk-heading-small uk-text-muted uk-text-center">PAGE NOT FOUND</h3>

                <p class="uk-text-center">The page you are looking for was moved, removed, renamed or might never existed.</p>
                <div class="uk-margin uk-text-center">
                <a class="uk-button uk-button-default uk-button-large uk-margin-small-top uk-margin-small-bottom" href="{{ route('index') }}">Back to Home</a>
            </div>

            </div>
            </div>
        </div>
    <!-- akhir konten -->
    </div>

@endsection

@section('modals')
    @include('frontend.partials.modals')
@endsection

@section('footer')
    @include('frontend.partials.footer')
@endsection



@section('scripts')

@endsection