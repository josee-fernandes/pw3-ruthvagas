<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
   <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous" defer></script>
   <script src="https://kit.fontawesome.com/8c1e7e2148.js" crossorigin="anonymous" defer></script>

   <title>RUTHVAGAS | @yield('current-page')</title>

   <style>
      .carousel-inner{
         max-height: 700px;
      }
      .carousel-inner img{
         width: 100%;
         height: 100%;
         object-fit: cover;
      }
   </style>
</head>
<body>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
         <img src="{{ asset('https://cdn.pixabay.com/photo/2013/07/18/20/26/sea-164989_960_720.jpg') }}" alt="Logo" style="width: 40px;">
      </a>
      <ul class="nav navbar-nav menu">
         @section('menu-itens')
            <li class="nav-item active">
               <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/barco">Barco</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/barcos">Barcos</a>
            </li>
         @show
      </ul>
   </nav>

   
   @section('main-content')
      @section('banner')
         <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul> -->
            <!-- The slideshow -->
            <div class="carousel-inner">
               @section('slide-items')
                  <div class="carousel-item active">
                     <img src="{{ asset('https://cdn.pixabay.com/photo/2013/07/18/20/26/sea-164989_960_720.jpg') }}" alt="Los Angeles">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('https://cdn.pixabay.com/photo/2015/09/22/19/00/ship-952292_960_720.jpg') }}" alt="Chicago">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('https://cdn.pixabay.com/photo/2015/12/20/13/30/ship-1101168_960_720.jpg') }}" alt="New York">
                  </div>
               @show
               </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
               <span class="carousel-control-next-icon"></span>
            </a>
         </div>
      @show
      @section('about')
         conteudo + imagem
      @show
   @show
</body>
</html>