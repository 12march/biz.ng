
@extends('layouts.main')

@section('page')

<!-- about-block
	================================================== -->
<section class="about">
	<div class="container">
		<div class="about__box">

			<div class="about__box-line">
				<div class="row">
					<div class="col-lg-8">
						
						<!-- article-post module -->
						<div class="article-post">
							<span class="article-post__excerpt">
								A few words about us
							</span>
							<h1 class="article-post__title">
								Best Deals in One Place
							</h1>
							<p class="article-post__description">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue.
							</p>
							<a class="text-btn" href="blog.html">
								Read Our Blog
							</a>
						</div>
						<!-- end article-post module -->

					</div>
					<div class="col-lg-4">
						
						<div class="testimonial-wrapp owl-wrapper">
							<h2>People Talking About Us</h2>
							<div class="owl-carousel" data-num="1">
							
								<div class="item">
									
									<!-- testimonial-post module -->
									<div class="testimonial-post">

										<img class="testimonial-post__image testimonial-post__image-top" src="{{ asset('assets/upload/test1.jpg') }}" alt="testimonial-image">

										<div class="testimonial-post__content testimonial-post__content-bottom">

											<p class="testimonial-post__description">
												“ Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh, nullam mollis. Ut justo. Suspendisse potenti. ”
											</p>

											<h2 class="testimonial-post__title">
												Michael Osborne
											</h2>

										</div>

									</div>
									<!-- end testimonial-post module -->

								</div>
							
								<div class="item">
									
									<!-- testimonial-post module -->
									<div class="testimonial-post">

										<img class="testimonial-post__image testimonial-post__image-top" src="assets/upload/test2.jpg" alt="testimonial-image">

										<div class="testimonial-post__content testimonial-post__content-bottom">

											<p class="testimonial-post__description">
												“Ut justo suspendisse potenti. Sed vel lacus mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus.”
											</p>

											<h2 class="testimonial-post__title">
												Lara Joy
											</h2>

										</div>

									</div>
									<!-- end testimonial-post module -->

								</div>
							
								<div class="item">
									
									<!-- testimonial-post module -->
									<div class="testimonial-post">

										<img class="testimonial-post__image testimonial-post__image-top" src="assets/upload/test3.jpg" alt="testimonial-image">

										<div class="testimonial-post__content testimonial-post__content-bottom">

											<p class="testimonial-post__description">
												“Sed vel lacus mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. ” 
											</p>

											<h2 class="testimonial-post__title">
												John Smith
											</h2>

										</div>

									</div>
									<!-- end testimonial-post module -->

								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="about__statistic-line">
				<div class="row">

					<div class="col-lg-3 col-sm-6">
						
						<!-- statistic-post module -->
						<div class="statistic-post">

							<span class="statistic-post__icon statistic-post__icon-primary">
								<i class="la la-fire" aria-hidden="true"></i>
							</span>

							<div class="statistic-post__content">
								<h1 class="statistic-post__title statistic-post__title-white">
									<span class="timer" data-from="0" data-to="100">100</span> +
								</h1>
								<p class="statistic-post__description">
									New Places Every Day 
								</p>
							</div>

						</div>
						<!-- end statistic-post module -->

					</div>

					<div class="col-lg-3 col-sm-6">
						
						<!-- statistic-post module -->
						<div class="statistic-post">

							<span class="statistic-post__icon statistic-post__icon-primary">
								<i class="la la-thumbs-up" aria-hidden="true"></i>
							</span>

							<div class="statistic-post__content">
								<h1 class="statistic-post__title statistic-post__title-white">
									<span class="timer" data-from="0" data-to="9500">9500</span> +
								</h1>
								<p class="statistic-post__description">
									Happy Costumers 
								</p>
							</div>

						</div>
						<!-- end statistic-post module -->

					</div>

					<div class="col-lg-3 col-sm-6">
						
						<!-- statistic-post module -->
						<div class="statistic-post">

							<span class="statistic-post__icon statistic-post__icon-primary">
								<i class="la la-comments" aria-hidden="true"></i>
							</span>

							<div class="statistic-post__content">
								<h1 class="statistic-post__title statistic-post__title-white">
									<span class="timer" data-from="0" data-to="25000">25000</span> +
								</h1>
								<p class="statistic-post__description">
									Costumers Review
								</p>
							</div>

						</div>
						<!-- end statistic-post module -->

					</div>

					<div class="col-lg-3 col-sm-6">
						
						<!-- statistic-post module -->
						<div class="statistic-post">

							<span class="statistic-post__icon statistic-post__icon-primary">
								<i class="la la-street-view" aria-hidden="true"></i>
							</span>

							<div class="statistic-post__content">
								<h1 class="statistic-post__title statistic-post__title-white">
									<span class="timer" data-from="0" data-to="5500">5500</span> +
								</h1>
								<p class="statistic-post__description">
									Unique Places and Events
								</p>
							</div>

						</div>
						<!-- end statistic-post module -->

					</div>

				</div>
			</div>

		</div>
	</div>
</section>
<!-- End about-block -->


<!--===========--  ================-->
    
<!-- my lists box -->
<div class="user-detail__favorites element-waypoint" id="favorites-box">
	<div class="container">
        
        <h2 class="user-detail__subtitle"> <span></span></h2>
        <!-- section-header module -->
		<div class="section-header">
                <h1 class="section-header__title">
                    Latest Listings
                </h1>
            </div>
            <!-- end section-header module -->

		@if (count($listings))

		<div class="user-detail__favorites-box iso-call" data-item-showen="3">

                @foreach ($listings as $listing)
			<div class="item">
			
				<!-- place-post module -->
				<div class="place-post">
					<div class="place-post__gal-box">
						<img class="place-post__image" src="assets/upload/1.jpg" alt="place-image">
						{{-- <span class="place-post__rating">9.3</span> --}}
						{{-- <a class="place-post__like active" href="/listings/{{ $listing->id }}"><i class="fa fa-heart" aria-hidden="true"></i></a> --}}
					</div>
					<div class="place-post__content">
						<p class="place-post__info">
							{{-- <i class="fa fa-clock-o" aria-hidden="true"></i>
							<span class="open">Open</span> until 8:00 PM --}}
						</p>
						<h2 class="place-post__title">
							<a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
						</h2>
						<p class="place-post__description">
							Restaurant
							{{-- <span>
								<i class="fa fa-usd red-col" aria-hidden="true"></i>
								<i class="fa fa-usd red-col" aria-hidden="true"></i>
								<i class="fa fa-usd" aria-hidden="true"></i>
								<i class="fa fa-usd" aria-hidden="true"></i>
							</span> --}}
							{{-- <span class="place-post__description-review">
								<i class="fa fa-comment-o" aria-hidden="true"></i>
								54 Reviews
							</span> --}}
						</p>
						<p class="place-post__address">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							{{ $listing->address }}
						</p>
					</div>
				</div>
                <!-- end place-post module -->
			</div>
            
            @endforeach
		</div>

        @endif
		
	</div>
</div>







<!---==================================================-->



<!-- how-it-work-block
    ================================================== -->
    <section class="how-it-work how-it-work-white">
            <div class="container">

                <!-- section-header module -->
                <div class="section-header">
                    <h1 class="section-header__title">
                        How It Works
                    </h1>
                    <p class="section-header__description">
                        Explore some of the best tips from around the world.
                    </p>
                </div>
                <!-- end section-header module -->

                <div class="how-it-work__box">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            
                            <!-- how-work-post module -->
                            <div class="how-work-post">

                                <span class="how-work-post__icon">
                                    <i class="la la-compass" aria-hidden="true"></i>
                                </span>

                                <h2 class="how-work-post__title">
                                    Explore The City
                                </h2>

                                <p class="how-work-post__description">
                                    Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. 
                                </p>

                            </div>
                            <!-- end how-work-post module -->

                        </div>

                        <div class="col-lg-4 col-md-6">
                            
                            <!-- how-work-post module -->
                            <div class="how-work-post">

                                <span class="how-work-post__icon">
                                    <i class="la la-binoculars" aria-hidden="true"></i>
                                </span>

                                <h2 class="how-work-post__title">
                                    Find Interesting Place
                                </h2>

                                <p class="how-work-post__description">
                                    Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.
                                </p>

                            </div>
                            <!-- end how-work-post module -->

                        </div>

                        <div class="col-lg-4 col-md-6">
                            
                            <!-- how-work-post module -->
                            <div class="how-work-post">

                                <span class="how-work-post__icon">
                                    <i class="la la-plus-circle" aria-hidden="true"></i>
                                </span>

                                <h2 class="how-work-post__title">
                                    Add Your Listing
                                </h2>

                                <p class="how-work-post__description">
                                    In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. 
                                </p>

                            </div>
                            <!-- end how-work-post module -->

                        </div>

                    </div>
                </div>
                
            </div>
        </section>
        <!-- End how-it-work-block -->

@endsection
