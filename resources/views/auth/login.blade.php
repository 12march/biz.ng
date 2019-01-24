@extends('layouts.main')

@section('page')


<!-- sign-block
================================================== -->
<section class="sign">
        <div class="sign__area">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-sign-tab" data-toggle="tab" href="#nav-sign" role="tab" aria-controls="nav-sign" aria-selected="true">Sign in</a>
                    {{-- <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Register</a> --}}
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">

                    <!-- sign-form-module -->
                    <form class="sign-form" action="{{ route('login') }}" method="POST">
                            @csrf
                            
                        <label class="sign-form__label" for="email">
                            Email address :
                        </label>
                        <input class="sign-form__input-text{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email') }}" required autofocus/>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <label class="sign-form__label" for="password">
                            Password:
                        </label>
                        <input class="sign-form__input-text{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" placeholder="Password" required/>
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