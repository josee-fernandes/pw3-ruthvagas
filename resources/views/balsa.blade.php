@extends('templates/barco-template')
@section('current-page', 'Balsa')

<!-- Remove conteúdo da section -->
<!-- @ section('sidebar-itens', '') -->

<!-- @section('sidebar-itens')
   <li><a href="/">Home</a></li> -->
   <!-- Herdando o conteúdo já existente -->
   <!-- @parent -->
<!-- @stop -->

@section('menubar-itens')

<li>
   <a href="/">Home</a>
</li>

@parent

@stop

@section('slide-items')
<div class="carousel-item">
   <img src="{{ asset('https://cdn.pixabay.com/photo/2016/02/16/22/13/fantasy-1204156_960_720.jpg') }}" alt="New York">
</div>
   
@parent

@stop