@extends('frontend.layouts.master')

@section('title', 'Gallery')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection


@section('banner')
    <img src="{{ asset('assets/images/banner/p3-title-are-img.jpg') }}" alt="banner" uk-cover>
@endsection


@section('content')

<div class="page-content">
    <!-- isi content disini -->
    <div class="uk-section uk-section-default">
        <div class="uk-container">

            <div uk-grid="" class="uk-grid">
                <div class="uk-width-expand@m">

                        <div class="uk-margin uk-margin-large-bottom uk-text-center">
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-card uk-margin-left">
                                    <span class="uk-text-muted uk-icon"><svg width="20" height="20" viewBox="0 0 20 20"><rect width="18" height="1" x="1" y="12"></rect></svg></span>
                                </div>
                                <div class="uk-card uk-margin-left">
                                    <h4 class="uk-margin-remove">Heavenly Places</h4>
                                </div>
                                <div class="uk-card uk-margin-left">
                                    <span class="uk-text-muted uk-icon"><svg width="20" height="20" viewBox="0 0 20 20"><rect width="18" height="1" x="1" y="12"></rect></svg></span>
                                </div>
                            </div>
                            <h1 class="uk-margin-small text-spacing uk-text-nowrap@m">WEDDING DESTINATIONS</h1>
                        </div>
                        

                        <div class="uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small" uk-grid=" masonry: pack" uk-lightbox="animation: slide">

                            <div >
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 515px">
                                    <a class="" href="assets/images/wedding/chasse-sauvage-cKupNvXrU4I-unsplash.jpg" data-caption="Caption1">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/wedding/chasse-sauvage-cKupNvXrU4I-unsplash.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px">
                                    <a class="" href="assets/images/wedding/foto-pettine-IfjHaIoAoqE-unsplash.jpg" data-caption="Caption2">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/wedding/foto-pettine-IfjHaIoAoqE-unsplash.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px">
                                    <a class="" href="assets/images/wedding/kelsey-curtis-8ezfg5oYHNY-unsplash.jpg" data-caption="Caption3">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/wedding/kelsey-curtis-8ezfg5oYHNY-unsplash.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px">
                                    <a class="" href="assets/images/wedding/stefan-maass-w4RKzC4W0V0-unsplash.jpg" data-caption="Caption4">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/wedding/stefan-maass-w4RKzC4W0V0-unsplash.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px">
                                    <a class="" href="assets/images/wedding/soulseeker-creative-photography-tUbSra1Vw8k-unsplash.jpg" data-caption="Caption5">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/wedding/soulseeker-creative-photography-tUbSra1Vw8k-unsplash.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px; width: 593px;">
                                    <a class="" href="assets/images/banner/21.jpg" data-caption="Caption6">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/banner/21.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small" uk-grid=" masonry: pack" uk-lightbox="animation: slide">

                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px">
                                    <a class="" href="assets/images/small-studio-negarin-2649165.jpg" data-caption="Caption7">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/small-studio-negarin-2649165.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px">
                                    <a class="" href="assets/images/wedding/evelina-friman-hw_sKmjb0ns-unsplash.jpg" data-caption="Caption8">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/wedding/evelina-friman-hw_sKmjb0ns-unsplash.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px">
                                    <a class="" href="assets/images/small-jin-wedding-5729029.jpg" data-caption="Caption9">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/small-jin-wedding-5729029.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 515px">
                                    <a class="" href="assets/images/wedding/katrien-sterckx-fn0xXL9szcU-unsplash.jpg" data-caption="Caption10">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/wedding/katrien-sterckx-fn0xXL9szcU-unsplash.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px">
                                    <a class="" href="assets/images/small-studio-negarin-2613458.jpg" data-caption="Caption11">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/small-studio-negarin-2613458.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 250px; width: 593px;">
                                    <a class="" href="assets/images/banner/23.jpg" data-caption="Caption12">
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/banner/23.jpg" alt="" uk-cover>
                                    </a>
                                </div>
                            </div>
                        </div>

                </div>

            </div>

            

            

        </div>
    </div>


    <!-- akhir konten -->
</div>
 

@endsection




@section('scripts')

@endsection