<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-pref etch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
    <body>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{asset('./images/afiblogo.png')}}" alt="logo" width="40px" height="40px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{asset('Accueil.blade.php')}}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Messsagerie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<main class="py-4">
            @yield('content')
        </main>
        <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Actualité</h6>
            <p class="text-justify">l'association <i>a mener une activite </i>du 15 au 20 Aout 2022 Dans le cadre de la promotion de la jeune femme.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Nos valeurs</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">integrite</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">sociabilte</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">compassion</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Amour</a></li>
              <li><a href="http://scanfcode.com/category/android/">partage</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Determination</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Contact</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">+22651530280</a></li>
              <li><a href="http://scanfcode.com/contact/">+22657000003</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">www.afib.facebbok.com</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">afib@gmail.com</a></li>
              <li><a href="http://scanfcode.com/sitemap/">sect 56, kadiogo Ouagadougou</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 tout droits reserves par 
         <a href="#">papiskeita</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('  /js/uikit-icons.min.js ')}}"></script>
  
</body>
</html>

