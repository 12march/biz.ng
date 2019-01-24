@extends('layouts.main')

@section('page')


<!-- sign-block
================================================== -->
<section class="sign">
        <div class="sign__area">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-sign-tab" data-toggle="tab" href="#nav-sign" role="tab" aria-controls="nav-sign" aria-selected="true">Register </a>
                    {{-- <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Register</a> --}}
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">

                    <!-- sign-form-module -->
                    <form class="sign-form" method="POST" action="{{ route('register') }}">
                            @csrf

                        <label class="sign-form__label" for="name">
                            Username:
                        </label>
                        <input id="name" type="text" class="sign-form__input-text{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                        <label class="sign-form__label" for="email">
                            Email address:
                        </label>
                        <input id="email" type="email" class="sign-form__input-text{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        
                        <label class="sign-form__label" for="password">
                            Password:
                        </label>
                        <input id="password" type="password" class="sign-form__input-text{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        <label class="sign-form__label" for="password_confirmation">
                            Confirm Password:
                        </label>
                        <input class="sign-form__input-text" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />

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