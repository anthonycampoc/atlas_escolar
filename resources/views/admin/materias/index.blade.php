@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
  <hr>
  @laravelPWA
@stop

@section('content')
       
        @livewire('materias.index') 
@stop

@section('plugins.Datatables', true)

@section('css')
   
    <link rel="stylesheet" href="/css/admin_custom.css">
   @livewireStyles
@stop

@section('js')
  @livewireScripts
  <script>

    $(document).ready( function () {
        $('#tablem').DataTable();
    } );
  </script>
    
@stop

