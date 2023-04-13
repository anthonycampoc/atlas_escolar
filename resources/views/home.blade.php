@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@laravelPWA
    <h1 class="text-center text-info "> <strong> Panel administrador</strong></h1>

@stop

@section('content')

@can('profesor-index')
<section class="content">
    <div class="container-fluid">
        <div class="row">

            {{--@include('partials.alerts')--}}

            <div class="col-4">
                <div class="card card-primary">
                    <div class="row  align-items-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                        @foreach ($materias as $item)
                                            <h3 class="text-center text-warning " > <strong>{{$item->total}} Materias Asignadas  </strong> <i class="fas fa-calculator"></i> </h3>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-primary">
                    <div class="row  align-items-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                        @foreach ($cursos as $item)
                                        <h3 class="text-center text-danger " > <strong>{{$item->total}} Curso Asignados </strong> <i class="fas fa-school"></i>  </h3>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-primary">
                    <div class="row  align-items-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                        @foreach ($alumnos as $item)
                                            <h3 class="text-center text-success " > <strong>{{$item->total}} Alumnos Asignados </strong> <i class="fas fa-user-friends"></i> </h3>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>

@endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop