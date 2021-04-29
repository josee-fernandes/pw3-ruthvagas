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
</head>
<body>
   @section('nav-bar')
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="navbar-brand" href="/">RUTHVAGAS</a></li>
         </ul>
         <ul class="navbar-nav">
               <x-nav-link
                  goTo="/"
                  text="Home"
               />
               <x-nav-link
                  goTo="/jobs"
                  text="Vagas"
               />
               <x-nav-link
                  goTo="/candidato"
                  text="Candidatos"
               />
         </ul>
      </nav>
   @show

   <header class="header">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            @yield('breadcrumb')
         </ol>
      </nav>
      <div class="title py-5">
         <h1 class="text-center">@yield('current-page')</h1>
      </div>
   </header>

   <main class="main container">
      @yield('main-content')
   </main>

   <footer class="footer ml-5">
      <p class="text-muted" style="position: fixed; bottom: 0; z-index: 0">RUTHVAGAS - 2021</p>      
   </footer>
</body>
</html>