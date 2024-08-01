@extends('frontend.layouts.master')

@section('title', 'Shops')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection


@section('banner')
    <img src="{{ asset('assets/images/banner/about-us.jpg') }}" alt="banner" uk-cover>
@endsection


@section('content')

<div class="page-content">
    <!-- isi content disini -->
    <div class="uk-section uk-section-default">
        <div class="uk-container">

            <div uk-grid="" class="uk-grid">
                
                <!-- Content Left -->
                <div class="uk-width-expand@m">
                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-13-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">BLUE VELVET</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 2.000k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-02-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">FINE DINING</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 2.500k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-03-1-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">CINDERELLA</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 1.850k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-04-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">ENGAGEMENT RING</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 2.950k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-05-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">MEN SUIT</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 1.150k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-06-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">DRESS</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 1.550k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-07-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">BLUES DRESS</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 1.650k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-08-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">GOLD RING</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 2.050k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-09-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">SPRING DRESS</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 2.150k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-10-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">FLOWER</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 850k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-11-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">CAKE</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 1.050k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-shop uk-margin-small-bottom">
                            <div class="uk-inline uk-margin-small-bottom uk-transition-toggle" tabindex="0">
                                <span class="uk-position-center z-index-up">
                                    <a href="#readmore" class="uk-text-meta text-spacing2 uk-button-text uk-text-center uk-text-primary">ADD TO CART</a>
                                </span>
                                <img src="assets/images/shop/shop-12-600x792.jpg" alt="" uk-cover>
                                <canvas width="400" height="550"></canvas>
                                <div class="uk-position-absolute uk-position-bottom-center cat-title-shop">
                                    <div class="uk-position-center">
                                    </div> 
                                </div>

                            </div>
                        
                            <div class="uk-flex-column">
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a class="text-spacing uk-text-normal">VENUE</a>
                                    </div>
                                </div>
                                <div class="uk-flex-center">
                                    <div class="uk-card">
                                        <a href=""><span class="uk-h6 uk-text-italic uk-text-primary uk-text-meta">Rp. 2.050k</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        
                        
                    </div>
                </div>
                
                <!-- Sidebar Right -->
                <div class="uk-width-1-3 uk-first-column">

                    <h4 class="uk-text-uppercase uk-text-primary">Article Title</h4>
        
                    <hr class="uk-divider-small">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <div class="uk-margin">
                        <div id="social_icons_group" class="widget" data-area="header-widget-two"> 
                            <div class="social-icons-blog">
                                <a href="https://www.facebook.com/luxima.photo" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook" style="color:#a78656" target="_blank"></a>
                                <a href="https://www.instagram.com/luxima.id" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram" style="color:#a78656" target="_blank"></a>
                                <a href="https://www.twitter.com/luximaid" class="uk-icon-button  uk-margin-small-right" uk-icon="twitter" style="color:#a78656" target="_blank"></a>
                                
                            </div>
                        </div>
                    </div>

                    <br>

                    <div>
                        <div class="footer-item uk-margin" >
                            <h4 class="uk-text-uppercase uk-text-primary">Products</h4>
                            <hr class="uk-divider-small">

                            <ul class="uk-flex uk-flex-column uk-padding-remove">
                                <li class="uk-list uk-text-italic">
                                    <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 60px; width: 100px;">
                                        <a class="" href="#" data-caption="Caption1">
                                        <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/soni.jpg" alt="" uk-cover>
                                        </a>
                                    </div>
                                </li>
                                <li class="uk-list uk-text-italic"><a>Princess style</a><br>
                                    <span class="uk-h6 uk-text-italic uk-text-primary">Rp.2000k</span>
                                </li>
                            </ul>
                            <ul class="uk-flex uk-flex-column uk-padding-remove">
                                <li class="uk-list uk-text-italic">
                                    <div class="uk-card uk-flex uk-flex-center uk-flex-middle" style="height: 60px; width: 100px;">
                                        <a class="" href="#" data-caption="Caption1">
                                        <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/h1-listing-img-14.jpg" alt="" uk-cover>
                                        </a>
                                    </div>
                                </li>
                                <li class="uk-list uk-text-italic"><a>Venue arrangements</a><br>
                                    <span class="uk-h6 uk-text-italic uk-text-primary">Rp.3500k</span>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                    <div>
                        <div class="footer-item uk-margin" >
                            <h4 class="uk-text-uppercase uk-text-primary">CATEGORIES</h4>
                            <hr class="uk-divider-small">
                            <ul class="uk-flex uk-flex-column uk-padding-remove">
                                <li class="uk-list uk-margin-small-bottom"><a>Photographer</a>
                                </li>
                                <li class="uk-list uk-margin-small-bottom"><a>Make Up</a>
                                </li>
                                <li class="uk-list uk-margin-small-bottom"><a>Location</a>
                                </li>
                                <li class="uk-list uk-margin-small-bottom"><a>catering</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="footer-item uk-margin" >
                            <h4 class="uk-text-uppercase uk-text-primary">TAGS</h4>
                            <hr class="uk-divider-small">
                            <ul class="uk-flex uk-flex-wrap uk-flex-wrap-around uk-padding-remove">
                                <li class="uk-list uk-margin-medium-right"><a>Photographer</a>
                                </li>
                                <li class="uk-list uk-margin-medium-right uk-margin-small-bottom uk-text-italic"><a>Make Up</a>
                                </li>
                                <li class="uk-list uk-margin-medium-right uk-margin-small-bottom uk-text-italic"><a>Location</a>
                                </li>
                                <li class="uk-list uk-margin-medium-right uk-margin-small-bottom uk-text-italic"><a>catering</a>
                                </li>
                                <li class="uk-list uk-margin-medium-right uk-margin-small-bottom uk-text-italic"><a>Vendor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-margin-medium-bottom">
                        <form class="uk-search uk-search-default uk-width-1-1">
                            <span uk-search-icon="" class="uk-icon uk-search-icon"><svg width="20" height="20" viewBox="0 0 20 20"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"></path></svg></span>
                            <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
                        </form>
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