@extends('layouts.main')

@section('page')


<!-- listing-detail
    ================================================== -->
<section class="listing-detail">
    <div class="user-detail__profile">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="user-detail__profile-box">
                            <a class="user-detail__profile-image" href="#"><img src="{{ asset('assets/upload/avat1.jpg') }}" alt=""></a>
                            <h3 class="user-detail__profile-title">
                                <a href="#">{{ Auth::user()->name }}</a>
                                
                            </h3>
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
                    
                        <!-- my lists box -->
                        <div class="user-detail__mylist element-waypoint" id="my-lists-box">
                            <div class="container">
                                <h2 class="user-detail__subtitle">My Lists <span>({{count($listings)}})</span></h2>
                                <div class="user-detail__mylist-box iso-call">


                                    @foreach ($listings as $listing)
                                    <div class="item">

                                        <!-- place-post module -->
                                        <div class="place-post">
                                            <div class="place-post__gal-box">
                                                <img class="place-post__image" src="{{ ('assets/upload/1.jpg') }}" alt="place-image">
                                            </div>
                                            <div class="place-post__content">
                                                <p class="place-post__info">
                                                </p>
                                                <h2 class="place-post__title">
                                                    <a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
                                                </h2>
                                                <p class="place-post__description">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    {{ $listing->address }}
                                                </p>
                                                {{-- <p class="place-post__address">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    {{ $listing->address }}
                                                </p> --}}
                                            </div>
                                        </div>
                                        <!-- end place-post module -->

                                    </div><br>
                                    @endforeach
                                    
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
                                    <i class="la la-envelope"></i>
                                    {{ Auth::user()->email }}
                                </li>
                                <li>
                                    <i class="la la-mobile-phone"></i>
                                    +44 20 7336 8898
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

<hr>

<!-- top-experience-block
    ================================================== -->
    <section class="top-experience top-experience-white">
            <div class="container">

                <!-- section-header module -->
                <div class="section-header">
                    <h1 class="section-header__title">
                        Top-rated Experiences
                    </h1>
                    <p class="section-header__description">
                        Sed egestas, ante et vulputate volutpat, eros pede semper est
                    </p>
                </div>
                <!-- end section-header module -->


                <div class="top-experience__box top-experience-white__box owl-wrapper">
                    <div class="owl-carousel" data-num="4">
                    
                        <div class="item">

                            <!-- place-gal module -->
                            <div class="place-gal">
                                <img class="place-gal__image" src="{{ asset('assets/upload/top1.jpg') }}" alt="place-image">
                                <div class="place-gal__content">
                                    <h2 class="place-gal__title">
                                        <a href="#">
                                            <img src="{{ asset('assets/upload/flag1.jpg') }}" alt="">
                                            Malaysia
                                        </a>
                                    </h2>
                                    <ul class="place-gal__list">
                                        <li class="place-gal__list-item">
                                            <a href="#">5 Cities</a>
                                        </li>
                                        <li class="place-gal__list-item">
                                            <a href="#">255 Listing</a>
                                        </li>
                                    </ul>
                                    <a class="btn-default" href="#">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        Explore
                                    </a>
                                </div>
                            </div>
                            <!-- end place-gal module -->

                        </div>
                    
                        <div class="item">

                            <!-- place-gal module -->
                            <div class="place-gal">
                                <img class="place-gal__image" src="{{ asset('assets/upload/top2.jpg') }}" alt="place-image">
                                <div class="place-gal__content">
                                    <h2 class="place-gal__title">
                                        <a href="#">
                                            <img src="{{ asset('assets/upload/flag2.jpg') }}" alt="">
                                            Italia
                                        </a>
                                    </h2>
                                    <ul class="place-gal__list">
                                        <li class="place-gal__list-item">
                                            <a href="#">8 Cities</a>
                                        </li>
                                        <li class="place-gal__list-item">
                                            <a href="#">749 Listing</a>
                                        </li>
                                    </ul>
                                    <a class="btn-default" href="#">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        Explore
                                    </a>
                                </div>
                            </div>
                            <!-- end place-gal module -->

                        </div>
                    
                        <div class="item">

                            <!-- place-gal module -->
                            <div class="place-gal">
                                <img class="place-gal__image" src="{{ asset('assets/upload/top3.jpg') }}" alt="place-image">
                                <div class="place-gal__content">
                                    <h2 class="place-gal__title">
                                        <a href="#">
                                            <img src="{{ asset('assets/upload/flag3.jpg') }}" alt="">
                                            France
                                        </a>
                                    </h2>
                                    <ul class="place-gal__list">
                                        <li class="place-gal__list-item">
                                            <a href="#">12 Cities</a>
                                        </li>
                                        <li class="place-gal__list-item">
                                            <a href="#">1003 Listing</a>
                                        </li>
                                    </ul>
                                    <a class="btn-default" href="#">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        Explore
                                    </a>
                                </div>
                            </div>
                            <!-- end place-gal module -->

                        </div>
                    
                        <div class="item">

                            <!-- place-gal module -->
                            <div class="place-gal">
                                <img class="place-gal__image" src="{{ asset('assets/upload/top4.jpg') }}" alt="place-image">
                                <div class="place-gal__content">
                                    <h2 class="place-gal__title">
                                        <a href="#">
                                            <img src="{{ asset('assets/upload/flag4.jpg') }}" alt="">
                                            United States
                                        </a>
                                    </h2>
                                    <ul class="place-gal__list">
                                        <li class="place-gal__list-item">
                                            <a href="#">4 Cities</a>
                                        </li>
                                        <li class="place-gal__list-item">
                                            <a href="#">409 Listing</a>
                                        </li>
                                    </ul>
                                    <a class="btn-default" href="#">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        Explore
                                    </a>
                                </div>
                            </div>
                            <!-- end place-gal module -->

                        </div>
                    
                        <div class="item">

                            <!-- place-gal module -->
                            <div class="place-gal">
                                <img class="place-gal__image" src="{{ asset('assets/upload/top1.jpg') }}" alt="place-image">
                                <div class="place-gal__content">
                                    <h2 class="place-gal__title">
                                        <a href="#">
                                            <img src="{{ asset('assets/upload/flag1.jpg') }}" alt="">
                                            Malaysia
                                        </a>
                                    </h2>
                                    <ul class="place-gal__list">
                                        <li class="place-gal__list-item">
                                            <a href="#">5 Cities</a>
                                        </li>
                                        <li class="place-gal__list-item">
                                            <a href="#">255 Listing</a>
                                        </li>
                                    </ul>
                                    <a class="btn-default" href="#">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        Explore
                                    </a>
                                </div>
                            </div>
                            <!-- end place-gal module -->

                        </div>
                    
                        <div class="item">

                            <!-- place-gal module -->
                            <div class="place-gal">
                                <img class="place-gal__image" src="{{ asset('assets/upload/top2.jpg') }}" alt="place-image">
                                <div class="place-gal__content">
                                    <h2 class="place-gal__title">
                                        <a href="#">
                                            <img src="{{ asset('assets/upload/flag2.jpg') }}" alt="">
                                            Italia
                                        </a>
                                    </h2>
                                    <ul class="place-gal__list">
                                        <li class="place-gal__list-item">
                                            <a href="#">8 Cities</a>
                                        </li>
                                        <li class="place-gal__list-item">
                                            <a href="#">749 Listing</a>
                                        </li>
                                    </ul>
                                    <a class="btn-default" href="#">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        Explore
                                    </a>
                                </div>
                            </div>
                            <!-- end place-gal module -->

                        </div>
                        
                    </div>
                </div>

            </div>
        </section>
        <!-- End top-experience-block -->

@endsection