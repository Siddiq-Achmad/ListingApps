@extends('frontend.layouts.master')

@section('title', 'Package List')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection

@section('banner')
    <img src="{{ asset('assets/images/banner/23.jpg') }}" alt="banner" uk-cover>
@endsection


@section('content')

<!-- MAIN CONTENT -->
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
                            <h1 class="uk-margin-small text-spacing uk-text-nowrap@m">PRICING PACKAGES</h1>
                        </div>
                        
                        <div class="uk-child-width-expand@s uk-grid-small uk-text-center" uk-grid>
                            <div>
                                <div class="uk-card uk-card-body uk-box-shadow-small">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            
                                            <div class="uk-width-expand">
                                                <h2 class="uk-text-primary">Rp. 1500k</h2>
                                                <h1 class="uk-card-title uk-text-lead uk-margin-remove text-spacing">BASIC</h1>
                                                <p class="uk-text-meta uk-margin-small-top">6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card">
                                        <li class="uk-margin-small-bottom">Listings Included: 10</li>
                                        <li class="uk-margin-small-bottom">Featured Included: 5</li>
                                        <li class="uk-margin-small-bottom">Venue: 300</li>
                                        <li class="uk-margin-small-bottom">Decoration: 350</li>
                                        <li class="uk-margin-small-bottom">Ads Included</li>
                                    </div>
                                    <div class="uk-width-1-2 uk-align-center ">
                                        <button class="btn-animate uk-button uk-form-width-medium uk-form-large uk-align-left uk-margin-remove-adjacent uk-width-1-1" name="search" type="submit">
                                            <span class="uk-margin-small-left uk-position-relative uk-text-uppercase uk-icon">BUY PACKAGE</span> 
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-body uk-box-shadow-small sec-bg">
                                    <div class="uk-card-badge uk-label">Recomended</div>
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            
                                            <div class="uk-width-expand">
                                                <h2 class="uk-text-primary">Rp. 3000k</h2>
                                                <h1 class="uk-card-title uk-text-lead uk-margin-remove text-spacing">STANDARD</h1>
                                                <p class="uk-text-meta uk-margin-small-top">12 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card">
                                        <li class="uk-margin-small-bottom">Listings Included: 50</li>
                                        <li class="uk-margin-small-bottom">Featured Included: 25</li>
                                        <li class="uk-margin-small-bottom">Venue 500</li>
                                        <li class="uk-margin-small-bottom">Decoration 500</li>
                                        <li class="uk-margin-small-bottom">Ads Included</li>
                                    </div>
                                    <div class="uk-width-1-2 uk-align-center ">
                                        <button class="btn-animate uk-button uk-form-width-medium uk-form-large uk-align-left uk-margin-remove-adjacent uk-width-1-1" name="search" type="submit">
                                            <span class="uk-margin-small-left uk-position-relative uk-text-uppercase uk-icon">BUY PACKAGE</span> 
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-body uk-box-shadow-small">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            
                                            <div class="uk-width-expand">
                                                <h2 class="uk-text-primary">Rp. 5000k</h2>
                                                <h1 class="uk-card-title uk-text-lead uk-margin-remove text-spacing">PREMIUM</h1>
                                                <p class="uk-text-meta uk-margin-small-top">24 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card">
                                        <li class="uk-margin-small-bottom">Listings Included: Unlimited listings</li>
                                        <li class="uk-margin-small-bottom">Featured Included: 100</li>
                                        <li class="uk-margin-small-bottom">Venue 700</li>
                                        <li class="uk-margin-small-bottom">Decoration 800</li>
                                        <li class="uk-margin-small-bottom">Ads Excluded</li>
                                    </div>
                                    <div class="uk-width-1-2 uk-align-center ">
                                        <button class="btn-animate uk-button uk-form-width-medium uk-form-large uk-align-left uk-margin-remove-adjacent uk-width-1-1" name="search" type="submit">
                                            <span class="uk-margin-small-left uk-position-relative uk-text-uppercase uk-icon">BUY PACKAGE</span> 
                                        </button>
                                    </div>
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