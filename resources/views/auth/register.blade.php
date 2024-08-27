
@extends('frontend.layouts.fullscreen')

@section('title', 'Register')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection




@section('content')

<div>
    <div class="uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport uk-animation>
        <div class="uk-width-1-1">
          <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
              <div class="uk-width-5-6 uk-margin-auto">
                <div class="uk-card uk-card-default uk-card-large uk-grid-collapse uk-child-width-1-2@s uk-margin uk-border-rounded uk-position-relative uk-overflow-hidden" uk-grid>
                  <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                    <img src="{{ asset('assets/images/inside-weather-Uxqlfigh6oE-unsplash.jpg') }}" alt="" uk-cover>
                    <canvas width="600" height="400"></canvas>
                  </div>
                  <div id="main">
                    <div class="uk-card-header uk-text-center">
                      <a id="logo" href="{{ route('index') }}">
                      <img src="{{ asset('assets/images/luxima.png') }}" class="uk-text-center" alt="luxima-logo" >
                    </a>
                    </div>
                    <div class="uk-card-body">
                                               
                        <div class="uk-margin" >
                          <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">Log In</a></li>
                            <li class="uk-hidden"><a href="#">Forgot Password?</a></li>
                          </ul>
                          <ul class="uk-switcher uk-margin">
                            <li id="register">
                              <h3 class="uk-card-title uk-text-center uk-text-primary">Sign up today. It's free!</h3>
                              <form class="needs-validation" novalidate method="POST"
                              action="{{ route('register') }}" enctype="multipart/form-data">
                              @csrf
                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                    <input class="uk-input @error('username') uk-form-danger @enderror" type="text" placeholder="Username" name="username" required>
                                    
                                  </div>
                                  @error('username')
                                    <div class="uk-alert-danger" uk-alert>
                                        <a class="uk-alert-close" href uk-close></a>
                                        <p>{{ $message }}</p>
                                    </div>
                                    @enderror
                                </div>
                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input @error('email') uk-form-danger @enderror" type="text" placeholder="Email address" name="email" required>
                                    
                                  </div>
                                  @error('email')
                                    <div class="uk-alert-danger" uk-alert>
                                        <a class="uk-alert-close" href uk-close></a>
                                        <p>{{ $message }}</p>
                                    </div>
                                    @enderror
                                </div>
                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input @error('password') uk-form-danger @enderror" type="password" placeholder="Password" name="password" required>	
                                  </div>
                                    @error('password')
                                    <div class="uk-alert-danger" uk-alert>
                                        <a class="uk-alert-close" href uk-close></a>
                                        <p>{{ $message }}</p>
                                    </div>
                                    @enderror
                                  
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                      <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                      <input class="uk-input @error('confirm_password') uk-form-danger @enderror" type="password" placeholder="Confirm password" name="password_confirmation" required>
                                    </div>
                                      @error('confirm_password')
                                    <div class="uk-alert-danger" uk-alert>
                                        <a class="uk-alert-close" href uk-close></a>
                                        <p>{{ $message }}</p>
                                    </div>
                                    @enderror	
                                   
                                  </div>
                                  <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1" uk-form-custom="target: true">
                                      
                                        <span class="uk-form-icon" uk-icon="icon: image"></span>
                                        <input type="file" aria-label="Custom controls" name="avatar" id="input-avatar">
                                        <input class="uk-input" type="text" placeholder="Avatar" disabled>
                                        
                                    </div>
                                    @error('avatar')
                                    <div class="uk-alert-danger" uk-alert>
                                      <a class="uk-alert-close" href uk-close></a>
                                      <p>{{ $message }}</p>
                                  </div>
                                  @enderror
                                  </div>
                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                  <label class="uk-text-light"><input class="uk-checkbox uk-text-light" type="checkbox"> I agree the Terms and Conditions.</label>
                                </div>
                                <div class="uk-margin">
                                  <button type="submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1">Register</button>
                                </div>
                                <div class="uk-text-light uk-text-center">
                                  Already have an account? <a href="#" uk-switcher-item="1">Log in</a>
                                </div>
                              </form>
                            </li>
                            <li id="login">
                              <h3 class="uk-card-title uk-text-center uk-text-primary">Welcome back!</h3>
                              <form class="needs-validation" novalidate action="{{ route('login') }}" method="post">
                                @method('POST')
                                @csrf

                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input @error('email') uk-form-danger @enderror" type="text" placeholder="Email address" name="email" required>
                                  </div>
                                    @error('email')
                                    <div class="uk-alert-danger" uk-alert>
                                        <a class="uk-alert-close" href uk-close></a>
                                        <p>{{ $message }}</p>
                                    </div>
                                    
                                    @enderror
                                  
                                </div>
                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input @error('password') uk-form-danger @enderror" type="password" placeholder="Password" name="password" required>	
                                  </div>
                                    @error('password')
                                    <div class="uk-alert-danger" uk-alert>
                                        <a class="uk-alert-close" href uk-close></a>
                                        <p>{{ $message }}</p>
                                    </div>
                                    @enderror
                                  
                                </div>
                                <div class="uk-margin uk-text-right@s uk-text-center uk-text-light">
                                  <a href="#" uk-switcher-item="2">Forgot Password?</a>
                                </div>
                                <div class="uk-margin">
                                  <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                                </div>
                                <div class="uk-text-light uk-text-center">
                                  Not registered? <a href="#" uk-switcher-item="0">Sign Up</a>
                                </div>
                              </form>
                            </li>
                            <li id="forgot">
                              <h3 class="uk-card-title uk-text-center uk-text-primary">Forgot your password?</h3>
                              <p class="uk-text-center uk-text-light uk-width-medium@s uk-margin-auto">Enter your email address and we will send you a link to reset your password.</p>
                              <form>
                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input " type="email" placeholder="Email address" required>
                                  </div>
                                </div>
                                <div class="uk-margin">
                                  <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Send Email</button>
                                </div>
                                <div class="uk-text-light uk-text-center">
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

</div>
 

@endsection





@section('scripts')

@endsection


