@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
  <hr>
  @laravelPWA
@stop

@section('content')
       
        @livewire('grupo.index') 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
@livewireScripts
<script>
  
  $(document).ready( function () {
      $('#tablec').DataTable();
  } );
</script>
    
@stop