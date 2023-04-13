@extends('adminlte::page')

@section('title', 'Asignacion')

@section('content_header')
  <hr>
  @laravelPWA
@stop

@section('content')
       
        @livewire('grupo.asignacion.index') 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
 @livewireStyles
@stop

@section('js')
@livewireScripts
    <script> console.log('Hi!'); </script>
    
@stop