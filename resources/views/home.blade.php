@extends('templates/base-template')
@section('current-page', 'Home')   

@section('breadcrumb')
   <li class="breadcrumb-item active" aria-current="page">Home</li>
@stop

@section('main-content')
   <!-- @component('components.Alerts.alert')
      <strong>Error!</strong>
      <hr>
      Uknown error. Try again later.
   @endcomponent
   @component('components.Alerts.alert2')
      @slot('title')
         <strong>Information</strong>
      @endslot
      Just an informative alert.
   @endcomponent
   @component('components.Alerts.alert3')
      @slot('type')
         success
      @endslot
      @slot('title')
         <strong>Success!</strong>
      @endslot
      Success alert!
   @endcomponent
   <x-alerta type="warning" title="Warning!">
      Warning content!
   </x-alerta>
   <x-alerta type="warning">
      Warning content!
   </x-alerta> -->
   <h1 class="text-center align-middle my-5">Bem vindo ao RUTHVAGAS!</h1>
@stop
