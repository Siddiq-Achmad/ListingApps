@extends('frontend.layouts.master')

@section('title', 'Left Sidebar')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection

@section('banner')
    <img src="{{ asset('assets/images/banner/7.jpg') }}" alt="banner" uk-cover>
@endsection


@section('content')



<!-- MAIN CONTENT -->
<div class="page-content">
<!-- isi content disini -->
<div class="uk-section uk-section-default">
    <div class="uk-container">

        <div uk-grid="" class="uk-grid">
            
            <!-- Sidebar left -->
            <div class="uk-width-expand@m uk-first-column">

                <div class="uk-border-circle uk-width-medium uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="assets/images/avatar.jpg" uk-img>
                   
                  </div>

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
                        <h4 class="uk-text-uppercase uk-text-primary">Latest Posts</h4>
                        <hr class="uk-divider-small">
                        <ul class="uk-flex uk-flex-column uk-padding-remove">
                            <li class="uk-list uk-text-italic"><a>How to find the right photographer</a><br>
                                <span class="uk-h6"> March 27, 2020</span>
                            </li>
                            <li class="uk-list uk-text-italic"><a>How do I make the ideal guest list?</a><br>
                                <span class="uk-h6"> March 27, 2020</span>
                            </li>
                            <li class="uk-list uk-text-italic"><a>How do I pick the perfect gown?</a><br>
                                <span class="uk-h6"> March 27, 2020</span>
                            </li>
                            <li class="uk-list uk-text-italic"><a>How do I pick a wedding destination?</a><br>
                                <span class="uk-h6"> March 27, 2020</span>
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
                            <li class="uk-list uk-margin-medium-right uk-margin-small-bottom uk-text-italic"><a>Photographer</a>
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
            
            <!-- Content Right -->
            <div class="uk-width-2-3@m ">

                
                <nav aria-label="Breadcrumb">
                    <ul class="uk-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="uk-disabled"><a>Category</a></li>
                        <li><span>Post</span></li>
                    </ul>
                </nav>

                <div> <!-- First Content -->
                    <div class="uk-card">
                        <div class="uk-card-media-top uk-inline uk-margin">
                            <a href=""><img src="assets/images/wedding/foto-pettine-IfjHaIoAoqE-unsplash.jpg" width="400" height="600" alt="" uk-cover></a>
                            <canvas width="1000" height="600"></canvas>
                            <div class="uk-margin uk-position-top-left uk-position-small"><span class="uk-badge">March 27, 2024</span></div>
                        </div>
                        <div class="uk-card-body uk-padding-remove">
                            <h5 class="uk-margin-remove">By Author - Category</h5>

                            <article class="uk-article">

                                <h1 class="uk-article-title"><a class="uk-link-reset" href="#">Article Title</a></h1>
    
                                <hr class="uk-divider-small">
    
                                <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    
                                <p class="uk-column-1-2@s uk-dropcap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
                                <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>
                                
                                <div  uk-grid>
                                    <div class="uk-width-1-4 ">
                                        <p><a href="#readmore" class="uk-text-primary uk-text-uppercase uk-button-text">Read more</a>
                                        </p>
                                    </div>
                                    <div class="uk-width-expand"></div>                                                                         
                                    <div class="uk-width-1-4">
                                        <div id="social_icons_group" class="widget" data-area="header-widget-two"> 
                                            <div class="social-icons-blog">
                                                <a href="https://www.facebook.com/luxima.photo" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook" style="color:#a78656" target="_blank"></a>
                                                <a href="https://www.instagram.com/luxima.id" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram" style="color:#a78656" target="_blank"></a>
                                                <a href="https://www.twitter.com/luximaid" class="uk-icon-button  uk-margin-small-right" uk-icon="twitter" style="color:#a78656" target="_blank"></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </article>
                            
                        </div>
                    </div>
                </div>

                <hr class="uk-divider-icon uk-margin-medium">
    
                <div> <!-- Second Content -->
                     <div class="uk-card">
                        <div class="uk-card-media-top uk-inline uk-margin">
                            <img src="assets/images/wedding/foto-pettine-AXaQzYRIb4w-unsplash.jpg" width="400" height="600" alt="" uk-cover>
                            <canvas width="1000" height="600"></canvas>
                            <div class="uk-margin uk-position-top-left uk-position-small"><span class="uk-badge">March 27, 2024</span></div>
                        </div>
                        <div class="uk-card-body uk-padding-remove">
                            <h5 class="uk-margin-remove">By Author - Category</h5>

                            <article class="uk-article">

                                <h1 class="uk-article-title"><a class="uk-link-reset" href="#">Article Title</a></h1>
    
                                <hr class="uk-divider-small">
    
                                <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    
                                <p class="uk-column-1-2@s uk-dropcap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
                                <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>
                                
                                <div  uk-grid>
                                    <div class="uk-width-1-4 ">
                                        <p><a href="#readmore" class="uk-text-primary uk-text-uppercase uk-button-text">Read more</a>
                                        </p>
                                    </div>
                                    <div class="uk-width-expand"></div>                                                                         
                                    <div class="uk-width-1-4">
                                        <div id="social_icons_group" class="widget" data-area="header-widget-two"> 
                                            <div class="social-icons-blog">
                                                <a href="https://www.facebook.com/luxima.photo" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook" style="color:#a78656" target="_blank"></a>
                                                <a href="https://www.instagram.com/luxima.id" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram" style="color:#a78656" target="_blank"></a>
                                                <a href="https://www.twitter.com/luximaid" class="uk-icon-button  uk-margin-small-right" uk-icon="twitter" style="color:#a78656" target="_blank"></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </article>
                            
                        </div>
                    </div>
                </div>

                <hr class="uk-divider-icon uk-margin-medium">

                <div> <!-- Third Content -->
                    <div class="uk-card">
                        <div class="uk-card-media-top uk-inline uk-margin">
                            <img src="assets/images/wedding/tom-pumford-UxzqDyzqs8w-unsplash.jpg" width="400" height="600" alt="" uk-cover>
                            <canvas width="1000" height="600"></canvas>
                            <div class="uk-margin uk-position-top-left uk-position-small"><span class="uk-badge">March 27, 2024</span></div>
                        </div>
                        <div class="uk-card-body uk-padding-remove">
                            <h5 class="uk-margin-remove">By Author - Category</h5>

                            <article class="uk-article">

                                <h1 class="uk-article-title"><a class="uk-link-reset" href="#">Article Title</a></h1>
    
                                <hr class="uk-divider-small">
    
                                <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    
                                <p class="uk-column-1-2@s uk-dropcap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
                                <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>
                                
                                <div  uk-grid>
                                    <div class="uk-width-1-4 ">
                                        <p><a href="#readmore" class="uk-text-primary uk-text-uppercase uk-button-text">Read more</a>
                                        </p>
                                    </div>
                                    <div class="uk-width-expand"></div>                                                                         
                                    <div class="uk-width-1-4">
                                        <div id="social_icons_group" class="widget" data-area="header-widget-two"> 
                                            <div class="social-icons-blog">
                                                <a href="https://www.facebook.com/luxima.photo" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook" style="color:#a78656" target="_blank"></a>
                                                <a href="https://www.instagram.com/luxima.id" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram" style="color:#a78656" target="_blank"></a>
                                                <a href="https://www.twitter.com/luximaid" class="uk-icon-button  uk-margin-small-right" uk-icon="twitter" style="color:#a78656" target="_blank"></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </article>
                            
                        </div>
                    </div>
                </div>

              

                <hr class="uk-margin-medium">

                <ul class="uk-pagination uk-flex-center" uk-margin="">
                    <li class="uk-first-column"><a href="#" aria-label="Previous page"><span uk-pagination-previous="" class="uk-icon uk-pagination-previous"><svg width="7" height="12" viewBox="0 0 7 12"><polyline fill="none" stroke="#000" stroke-width="1.2" points="6 1 1 6 6 11"></polyline></svg></span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" aria-label="Next page"><span uk-pagination-next="" class="uk-icon uk-pagination-next"><svg width="7" height="12" viewBox="0 0 7 12"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 1 6 6 1 11"></polyline></svg></span></a></li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!-- akhir konten -->
</div>
  
 

@endsection




@section('scripts')

@endsection