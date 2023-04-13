@extends('adminlte::page')

@section('title', 'Leccion')

@section('content_header')
  <hr>
  @laravelPWA
@stop

@section('content')
       
        @livewire('leccion.index') 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
  @livewireStyles
@stop

@section('js')
  @livewireScripts
    <script> console.log('Hi!'); </script>
  
@stop