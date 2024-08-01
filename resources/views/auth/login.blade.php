
@extends('frontend.layouts.fullscreen')

@section('title', 'Contact Us')

@section('styles')
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
@endsection




@section('content')
<div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
    
    <div class="uk-background-cover uk-visible@s" style="background-image: url('assets/images/wedding/alexandra-gornago-o2zFDffQnDM-unsplash.jpg');" uk-height-viewport></div>
    <div class="uk-padding-large">
        
        <h1>Log in</h1>
        <p>Welcome to LUXIMA Directory & Listing App </p>
        <form id="form_login" class="uk-form-stacked uk-width-1-2@s" action="{{ route('login') }}" method="post">
            @csrf
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Sign In</legend>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-s-email">Email</label>
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input class="uk-input @error('email') uk-form-danger @enderror" id="form-s-email" type="email"  value="{{ old('email', 'admin@luxima.id') }}" id="username" name="email" placeholder="Enter username">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-s-password">Password</label>
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input class="uk-input @error('password') uk-form-danger @enderror" id="form-s-password" type="password"  name="password" placeholder="Enter password" id="password-input" value="12345678" >
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">Log in</button>
                    <button type="reset" class="uk-button uk-button-default">Cancel</button>
                </div>
                <div class="uk-text-light">
                    Not registered? <a href="{{ route('register') }}" class="login-opener" uk-switcher-item="0" uk-toggle>Sign Up</a>
                  </div>
            </fieldset>
                

        </form>
    </div>
</div>

 

@endsection





@section('scripts')

@endsection


