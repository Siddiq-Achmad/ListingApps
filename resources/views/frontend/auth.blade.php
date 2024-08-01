
@extends('frontend.layouts.master')

@section('title', 'Authentication')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection

@section('banner')
    <img src="{{ asset('assets/images/banner/24.jpg') }}" alt="banner" uk-cover>
@endsection


@section('content')


    <div id="app" class="page_wrapper" uk-scroll>
       
       
        <div class="uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport uk-animation>
            <div class="uk-width-1-1">
              <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                  <div class="uk-width-5-6 uk-margin-auto">
                    <div class="uk-card uk-card-default uk-card-large uk-grid-collapse uk-child-width-1-2@s uk-margin uk-border-rounded uk-position-relative uk-overflow-hidden" uk-grid>
                      <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                        <img src="assets/images/inside-weather-Uxqlfigh6oE-unsplash.jpg" alt="" uk-cover>
                        <canvas width="600" height="400"></canvas>
                      </div>
                      <div id="main">
                        <div class="uk-card-header uk-text-center">
                          <a id="logo" href="index.html">
                          <img src="assets/images/luxima.png" class="uk-text-center" alt="luxima-logo" >
                        </a>
                        </div>
                        <div class="uk-card-body">
                                                   
                            <form class="uk-margin">
                              <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                                <li><a href="#">Sign Up</a></li>
                                <li><a href="#">Log In</a></li>
                                <li class="uk-hidden"><a href="#">Forgot Password?</a></li>
                              </ul>
                              <ul class="uk-switcher uk-margin">
                                <li id="register">
                                  <h3 class="uk-card-title uk-text-center uk-text-primary">Sign up today. It's free!</h3>
                                  <form>
                                    <div class="uk-margin">
                                      <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                                        <input class="uk-input uk-form-large" type="text" placeholder="First and last name">
                                      </div>
                                    </div>
                                    <div class="uk-margin">
                                      <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                                      </div>
                                    </div>
                                    <div class="uk-margin">
                                      <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-large" type="password" placeholder="Set a password">	
                                      </div>
                                    </div>
                                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                      <label><input class="uk-checkbox" type="checkbox"> I agree the Terms and Conditions.</label>
                                    </div>
                                    <div class="uk-margin">
                                      <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Register</button>
                                    </div>
                                    <div class="uk-text-small uk-text-center">
                                      Already have an account? <a href="#" uk-switcher-item="1">Log in</a>
                                    </div>
                                  </form>
                                </li>
                                <li id="login">
                                  <h3 class="uk-card-title uk-text-center uk-text-primary">Welcome back!</h3>
                                  <form>
                                    <div class="uk-margin">
                                      <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                                      </div>
                                    </div>
                                    <div class="uk-margin">
                                      <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-large" type="password" placeholder="Password">	
                                      </div>
                                    </div>
                                    <div class="uk-margin uk-text-right@s uk-text-center uk-text-small">
                                      <a href="#" uk-switcher-item="2">Forgot Password?</a>
                                    </div>
                                    <div class="uk-margin">
                                      <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                                    </div>
                                    <div class="uk-text-small uk-text-center">
                                      Not registered? <a href="#" uk-switcher-item="0">Create an account</a>
                                    </div>
                                  </form>
                                </li>
                                <li id="forgot">
                                  <h3 class="uk-card-title uk-text-center uk-text-primary">Forgot your password?</h3>
                                  <p class="uk-text-center uk-width-medium@s uk-margin-auto">Enter your email address and we will send you a link to reset your password.</p>
                                  <form>
                                    <div class="uk-margin">
                                      <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input uk-form-large" type="email" placeholder="Email address" required>
                                      </div>
                                    </div>
                                    <div class="uk-margin">
                                      <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Send Email</button>
                                    </div>
                                    <div class="uk-text-small uk-text-center">
                                      <a href="#" uk-switcher-item="1">Back to login</a>
                                    </div>
                                  </form>
                                </li>
                              </ul>
                            </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>

        @endsection




@section('scripts')
<script>
  UIkit.scroll(app).scrollTo(app);
  </script>
@endsection

        