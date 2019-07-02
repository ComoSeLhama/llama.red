<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sócio Desenvolvedor</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

  <!-- SEO -->
  @include('site.seo')

</head>
<body>
  <!-- Menu -->
  <nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-center align-items-center">
    <a class="navbar-brand nav-link" href="#">
      <img class="mt-3" src="{{ asset('assets/img/logo.svg') }}" height="100" alt="Sócio Desenvolvedor">
    </a>
  </nav>

  <!-- Conteudo -->
  @yield('content')

  <!-- Login -->
  <!-- <div class="btn-yellow d-flex justify-content-center align-items-center shadow">
    @if(Request::path() != '/')
      <a href="{{ route('home') }}">Voltar</a>
    @else
      <a href="{{ route('home') }}">Login</a>
    @endif
  </div> -->

  <!-- Footer -->
  <div class="container-fluid fixed-bottom bg-white">
    <div class="row">
      <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand text-black-50" href="/"><b>Red llama</b></a>
        <button class="navbar-toggler bg-yellow text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-arrow-up"></i>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
              <li class="nav-item mr-3"><a class="nav-link text-black-50" href="{{ route('home') }}"><small>Home</small></a></li>
              <li class="nav-item mr-3"><a class="nav-link text-black-50" href="{{ route('home') }}"><small>Sobre</small></a></li>
              <li class="nav-item mr-3"><a class="nav-link text-black-50" href="{{ route('privacidade') }}"><small>Privacidade</small></a></li>
              <li class="nav-item mr-3"><a class="nav-link text-black-50" href="{{ route('termos') }}"><small>Termos</small></a></li>
              <li class="nav-item mr-3"><a class="nav-link text-black-50" href=""><small> <i class="fa fa-facebook"></i></small></a></li>
              <li class="nav-item mr-3"><a class="nav-link text-black-50" href=""><small> <i class="fa fa-instagram"></i></small></a></li>
              <li class="nav-item mr-3"><a class="nav-link text-black-50" href=""><small> <i class="fa fa-dribbble"></i></small></a></li>
              <li class="nav-item mr-3"><a class="nav-link text-black-50" href=""><small> <i class="fa fa-github"></i></small></a></li>
              <li class="nav-item mr-3"><a class="nav-link text-white font-weight-bold btn btn-danger" href="https://api.whatsapp.com/send?l=pt&phone=5515998215822"><small> <i class="fa fa-whatsapp"></i> <b>Hire us</b></small></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</body>
</html>
