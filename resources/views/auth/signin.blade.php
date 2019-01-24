@extends('layouts.main')

@section('page')


<!-- sign-block
================================================== -->
<section class="sign">
        <div class="sign__area">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-sign-tab" data-toggle="tab" href="#nav-sign" role="tab" aria-controls="nav-sign" aria-selected="true">Sign in</a>
                    <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Register</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">

                    <!-- sign-form-module -->
                    <form class="sign-form" action="{{ route('login') }}" method="POST">
                            @csrf

                        <label class="sign-form__label" for="username">
                            Email address :
                        </label>
                        <input class="sign-form__input-text{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="username" value="{{ old('email') }}" />
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <label class="sign-form__label" for="password">
                            Password:
                        </label>
                        <input class="sign-form__input-text{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" placeholder="Password" />
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        
                        <div class="sign-form__checkbox">
                            <input class="sign-form__input-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="sign-form__checkbox-style"></span>
                            <span class="sign-form__checkbox-text">Remember me</span>
                        </div>
                        {{-- <a class="sign-form__forget-link" href="#">Forget password?</a> --}}
                        @if (Route::has('password.request'))
                            <a class="sign-form__forget-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <button  class="sign-form__submit" id="submit-loggin" type="submit">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            Login
                        </button>
                        {{-- <p class="sign-form__text">
                            or Login With
                        </p> --}}
                        {{-- <ul class="sign-form__social">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        </ul> --}}
                    </form>

                    <!-- End sign-form-module -->

                </div>
                <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">


                    <!-- sign-form-module -->
                    <form class="sign-form" method="POST" action="{{ route('register') }}">
                            @csrf

                        <label class="sign-form__label" for="username2">
                            Username:
                        </label>
                        <input id="name" type="text" class="sign-form__input-text{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                        <label class="sign-form__label" for="email">
                            Email address:
                        </label>
                        <input id="email" type="email" class="sign-form__input-text{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        
                        <label class="sign-form__label" for="password2">
                            Password:
                        </label>
                        <input id="password" type="password" class="sign-form__input-text{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        <label class="sign-form__label" for="con-password2">
                            Confirm Password:
                        </label>
                        <input class="sign-form__input-text" type="password" name="password_confirmation" id="con-password2" placeholder="Confirm Password" />


                        <div class="sign-form__checkbox">
                            <input class="sign-form__input-checkbox" type="checkbox" name="rememb-check2" id="rememb-check2"/>
                            <span class="sign-form__checkbox-style"></span>
                            <span class="sign-form__checkbox-text">I've read and accept terms & conditions</span>
                        </div>

                        <button  class="sign-form__submit" type="submit" id="submit_signup">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            Sign Up
                        </button>
                        {{-- <p class="sign-form__text">
                            or Sign Up With
                        </p>
                        <ul class="sign-form__social">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        </ul> --}}
                    </form>

                    <!-- End sign-form-module -->
                </div>
            </div>
        </div>
        <ul class="sign__slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
        </ul>
    </section>
    <!-- End sign-block -->

</div>
<!-- End Container -->


@endsection