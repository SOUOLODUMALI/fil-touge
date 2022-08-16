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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
</head>
<body>
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!"><img src="{{asset('/images/afiblogo.png')}}"></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#!">Accueil</a>
        </li>
        <li>
          <a href="#!">Inscription</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Compte</a>
        </li>
        <li>
          <a href="#!">Messagerie</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</section>




             




          

<main class="py-4">
            @yield('content')
        </main>
    
       
        <section class="down">
        <footer>
            <div class="container-fluid">
            <div class="row">
            
      <div class="feet">
        <ul>
           <li><a href="#">A PROPOS DE NOUS</a>
           <a href="#">L’association AFiB <br>(Avenir pour les <br>Filles du Burkina <br>Faso) soutient<br>
            la scolarité de <br>filles et de jeunes-fille<br>s dans la région<br> 
            de la Bougouriba,<br> au Burkina Faso. </a></li>
        
               
      <div><li><a href="#">EVENEMENT RECENT</a>
      <div><a href="#">Souvenir du premier<br> jour des « 72 heures de l’AFiB »<br>
       célébrées l’été passé : <br>séance de sensibilisation<br> sur les <br>grossesses non désirées<br> 
      en milieu scolaire, <br>animée par des <br>spécialistes en la 
      <br>matière au <br>bénéfice des filleules de<br> 
       l’AFiB et de <br>leurs parents.</a></li>
    <li>
      <a class="#">INFORMATION DE CONTACT</a>
      <a href="tel:25000000 ">
                     25 00 00 00
                    </a>
                
                <a href="https://goo.gl/maps/a7Zx99VJFg1e1mhF7 ">
                <img src="maps.JPG " alt="maps " class="maps ">
            </a>
            
                    <a href="tel:77000000 ">
                    <span class="mop "> 77 00 00 00</span>
                    </a>
                    
                   
                    <a href="mailto:AFIB@gmail.com?subject=écrivez nous! ">
                         AFIB@gmail.com
                    </a>
                   
                      <a>01 BP OUAGA 01</a></li>
                    </ul>
                </div>   </div></div>   
                 
    </section>
    </footer> 
    <div class="base">
      <h4></h4>  <span> COPYRIGHT-AFIB-2022</span>
      </div>

    </div>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('  /js/uikit-icons.min.js ')}}"></script>
  
</body>
</html>

