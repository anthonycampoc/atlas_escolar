@extends('adminlte::page')

@section('title', 'Alumno')

@section('content_header')
  <hr>
  @laravelPWA
@stop

@section('content')
       
        @livewire('alumno.index') 
@stop

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