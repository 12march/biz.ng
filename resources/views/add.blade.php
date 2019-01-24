@extends('layouts.main')

@section('page')

<!-- add-listing
    ================================================== -->
<section class="add-listing">
    <div class="add-listing__title-box">
        <div class="container">
            <h1 class="add-listing__title">
                Add New Listing
            </h1>
        </div>
    </div>

    <!-- user scroll menu box -->
    <div class="user-detail__scroll-menu-box scroller-menu">
        <div class="container">
            <ul class="user-detail__scroll-menu navigate-section">
                <li>
                    <a class="active" href="#general-info" data-offset="30">General Information</a>
                </li>
                {{-- <li>
                    <a href="#location-box" data-offset="30">Location</a>
                </li>
                <li>
                    <a href="#opening-box" data-offset="30">Opening Hours</a>
                </li>
                <li>
                    <a href="#gallery-box" data-offset="30">Gallery</a>
                </li>
                <li>
                    <a href="#social-box" data-offset="30">Social Networks</a>
                </li> --}}
            </ul>
        </div>
    </div>

    <!-- form listing -->
    <form class="add-listing__form" action="/listings" method="POST">
        @csrf

        <div class="container">
            
            <!-- form box -->
            <div class="add-listing__form-box element-waypoint" id="general-info">

                <div class="add-listing__form-content">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label class="add-listing__label" for="name">
                                Business Name:
                            </label>
                            <input class="add-listing__input" type="text" name="name" id="name" placeholder="Enter business name" required/>
                        </div>
                        <div class="col-md-6">
                            <label class="add-listing__label" for="address">
                                Address:
                            </label>
                            <input class="add-listing__input" type="text" name="address" id="address" placeholder="Enter address" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="add-listing__label" for="website">
                                Website:
                            </label>
                            <input class="add-listing__input" type="text" name="website" id="website" placeholder="Enter phone number" />
                        </div>
                        <div class="col-md-4">
                            <label class="add-listing__label" for="phone">
                                Phone:
                            </label>
                            <input class="add-listing__input" type="text" name="phone" id="phone" placeholder="Enter phone number" />
                        </div>
                        <div class="col-md-4">
                            <label class="add-listing__label" for="email">
                                Email:
                            </label>
                            <input class="add-listing__input" type="text" name="email" id="email" placeholder="Enter email address" />
                        </div>
                    </div>
                    <label class="add-listing__label" for="bio">
                        Bio:
                    </label>
                    <textarea class="add-listing__textarea" name="bio" id="bio" placeholder="Describe the listing"></textarea>
                </div>

            </div>
            
            <div class="center-button">
                <button class="add-listing__submit" type="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Preview and Submit Listing
                </button>
            </div>

        </div>

    </form>
</section>
<!-- End add-listing -->


@endsection