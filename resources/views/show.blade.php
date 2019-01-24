@extends('layouts.main')

@section('page')


<!-- listing-detail
    ================================================== -->
<section class="listing-detail">
    <div class="listing-detail__gal">
        <ul class="listing-detail__fullwidth-gal">
            <li>
                <img src="{{ asset('assets/upload/g7.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ asset('assets/upload/g8.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ asset('assets/upload/g9.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ asset('assets/upload/g10.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ asset('assets/upload/g11.jpg') }}" alt="">
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="listing-detail__title-box">
            <div class="row">
                <div class="col-md-6">
                    {{-- <p class="listing-detail__rate">9.3 <span>/ 10</span></p> --}}
                    <h1 class="listing-detail__title listing-detail__title-black">
                        {{ $listing->name }}
                    </h1>
                    <p class="listing-detail__address">
                        <i class="fa fa-map-marker"></i>{{ $listing->address }}
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="listing-detail__buttons">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="listing-detail__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing-detail__content-box">
                                <!-- overview box -->
                        <div class="listing-detail__overview" id="overview-box">

                            <h2 class="listing-detail__content-title">Overview</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="listing-detail__content-description with-border-top">
                                        {{ $listing->bio }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">

                        <div class="sidebar__widget sidebar__widget-listing-details">
                            <h2 class="sidebar__widget-title">
                                Details
                            </h2>
                            <ul class="sidebar__listing-list">
                                <li>
                                    <i class="la la-map-marker"></i>
                                    {{ $listing->address }}
                                </li>
                                <li>
                                    <i class="la la-mobile-phone"></i>
                                    {{ $listing->phone }}
                                </li>
                                <li>
                                    <i class="la la-link"></i>
                                    <a href="{{ $listing->website }}">{{ $listing->website }}</a>
                                </li>
                                <li>
                                    <i class="la la-clock-o"></i>
                                    <span class="color-close">Closed until Noon</span>
                                    <div>
                                        <p>
                                            Mon–Thu, Sun <span class="right-align">Noon–Midnight</span>
                                        </p>
                                        <p>
                                            Fri–Sat <span class="right-align">Noon–1:00 AM</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- End listing-detail -->

@endsection