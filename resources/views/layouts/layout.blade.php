<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="">
	 <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand mr-5" href="{{ route('home') }}" style="font-size: 26px;">Car Rental </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('home') }}"> Home </a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="{{ route('cars') }}">Cars</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
            </li>
			 <li class="nav-item active">
              <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
            </li>
          </ul>
		
            @guest
              <a class="btn btn-primary" href="{{ route('login') }}" style="margin-right: 20px;padding-right: 21px;padding-left: 21px;">{{ __('Login') }}</a>
                @if (Route::has('register'))
                  <a class="btn btn-primary" href="{{ route('register') }}" >{{ __('Register') }}</a>
                @endif
            @else
              <a id="navbarDropdown" class="nav-link dropdown-toggle shadow p-3 bg-body rounded text-white"  font size="100" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->email }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  @if (Auth::user()->role === 2 || Auth::user()->role === 1)
                  <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                  @else
                  @endif
                  <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                  <a class="dropdown-item" href="#">My Rents</a>                             

                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          @endguest
        </div>
      </nav>
    </header>
	<main role="main">
		@yield('carousel')
    <div class="container">
      @yield('Body')
    </div>
     
    
      <footer class="footer fixed-bottom bg-dark d-flex " style="height: 53px">       
        <p class="mr-auto mt-4 text-center">Copyright © <?php echo date("Y"); ?> Laravel CarRental3
           {{-- <a href="#">Privacy</a> · <a href="#">Terms</a> --}}
        </p>
        <a href="#" class=" shadow p-3 bg-body rounded text-white text-center " style="height: 45px">Back to top</a>
      </footer>
    </main>

</html>
