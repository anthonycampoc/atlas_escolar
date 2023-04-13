@extends('adminlte::page')

@section('title', 'Vista Alumno')

@section('content_header')

<hr>
@laravelPWA
@stop

@section('content')
    @livewire('alumno.vista.persanalizado', ['idgrado'=>$idnumber]) 
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop
    @livewireScripts
@section('js')

    <script> console.log('Hi!'); </script>
   
@stop