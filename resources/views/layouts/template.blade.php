<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crediexpres | Te acerca a lo que quieres</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">


        <!-- CSS -->

        <link href="{{ asset('inicioweb/css/main.css') }}" rel="stylesheet">

        <!-- JS -->
       
        <script src="{{ asset('inicioweb/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <script src="{{ asset('inicioweb/js/vendor/jquery-1.12.0.min.js') }}"></script>

    </head>
    <body>
        <div class="site" id="page">
            <a class="skip-link sr-only" href="#main">Skip to content</a>

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
            <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="{{asset('inicioweb/images/index.jpg')}}" alt="Hero section image">
                    </div>
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
                                <img src="{{asset('inicioweb/images/horselogo.png')}}">
                                    <h2 class="title__heading">
                                        <span>Crediexpres$</span>
                                    </h2>
                                    <div class="title__description">Te acerca a lo que quieres</div>

                                    <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                
                                    <div class="title__action"><a href="{{ route('login') }}" class="btn btn-success">Ingresa</a></div>
                                </div> <!-- .title-01 -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @yield('content')


        
        <div class="button-group">
           
            <a href="{{ route('login') }}" class="btn btn-outline-success button-sm">Ingreso</a>
            <a href="{{ route('register') }}" class="btn btn-outline-success button-sm">Registro</a>
           
        </div>
       

        <!-- JS -->
        <script src="{{ asset('inicioweb/js/main.js') }}"></script>
        <script src="{{ asset('inicioweb/js/plugins/animate-headline.js') }}"></script>

    </body>
</html>