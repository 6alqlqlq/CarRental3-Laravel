@extends('layouts.layout')

@section("carousel")
   <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
           
            
	 <!-- Carousel image-->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel-1.jpg') }}" class="d-block w-100" alt="carousel1" width="1903" height="590">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Get only best for you!</h4>
                        <p>Click below to see our offer.</p>

                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="{{ asset('img/carousel-2.jpg') }}" class="d-block w-100" alt="carousel2" width="1903" height="590">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Register today!</h5>
                        <p>Get your car in two steps!</p>

                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="{{ asset('img/carousel-3.jpg') }}" class="d-block w-100" alt="carousel3" width="1903" height="590">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Book Now</h4>
                        <p>Choose from every model we have</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--End Carousel image-->
@endsection

@section ('Body')
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('img/electric-charge-car.jpg')}}" alt="electric car charger" width="140" height="140">
            <h2>Electric cars</h2>
            <p>Prepared and charged to full electric cars</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('img/diesel-charge-car.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Diesel</h2>
            <p>Economic diesel cars. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('img/gas-charge-car.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Gasoline powered viachles</h2>
            <p>Gas powered viachles.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Golf 7 <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Gasoline</p>
			<p class="lead">Automatic</p>
			<p class="lead">4 door</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('img/rentals/golf7.jpg')}}" alt="special offer 1" style="width: 300px; height: 200px;    margin-left: 120px!important;" src="" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">bmw m6 630 <span class="text-muted">See for yourself.</span></h2>
			<p class="lead">Gasoline</p>
			<p class="lead">Automatic</p>
			<p class="lead">4 door</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid " src="{{asset('img/rentals/630.jpg')}}" alt="special offer 2"  data-holder-rendered="true" style="width: 300px; height: 200px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Tesla model S <span class="text-muted">Checkmate.</span></h2>
			<p class="lead">Gasoline</p>
			<p class="lead">Automatic</p>
			<p class="lead">4 door</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid " src="{{asset('img/rentals/teslaS.jpg')}}" alt="special offer 3"  data-holder-rendered="true" style="width: 300px; height: 200px;    margin-left: 120px!important;">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

     
      
<div class="container" style="margin-bottom: 150px;">
  <div class="row blog">
      <div class="col-md-12">
          <div id="blogCarousel" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators" style="    bottom: -62px;">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active" style="background-color: black;"></li>
                  <li data-target="#blogCarousel" data-slide-to="1" style="background-color: black;"></li>
              </ol>

              <!-- Carousel items -->
              <div class="carousel-inner">

                  <div class="carousel-item active">
                      <div class="row">
                          <div class="col-md-3">
                              <a href="#">
                                  <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                              </a>
                          </div>
                          <div class="col-md-3">
                              <a href="#">
                                  <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                              </a>
                          </div>
                          <div class="col-md-3">
                              <a href="#">
                                  <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                              </a>
                          </div>
                          <div class="col-md-3">
                              <a href="#">
                                  <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                              </a>
                          </div>
                      </div>
                      <!--.row-->
                  </div>
                  <!--.item-->

                  <div class="carousel-item">
                      <div class="row">
                          <div class="col-md-3">
                              <a href="#">
                                  <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                              </a>
                          </div>
                          <div class="col-md-3">
                              <a href="#">
                                  <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                              </a>
                          </div>
                          <div class="col-md-3">
                              <a href="#">
                                  <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                              </a>
                          </div>
                          <div class="col-md-3">
                              <a href="#">
                                  <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                              </a>
                          </div>
                      </div>
                      <!--.row-->
                  </div>
                  <!--.item-->

              </div>
              <!--.carousel-inner-->
          </div>
          <!--.Carousel-->

      </div>
  </div>
</div>
@endsection
