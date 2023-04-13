@extends('adminlte::page')

@section('title', 'Registro de usuario')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registro de usuario</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
                    <li class="breadcrumb-item active">Registro de usuario</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')


@if (count($errors) > 0)
<div class="alert alert-danger" role="alert">
    <label>¡Vaya!</label> Hubo algunos problemas con su entrada. <br> <br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<section class="content">
    <div class="container-fluid">
        <div class="row">

            {{--@include('partials.alerts')--}}

            <div class="col-12">
                <div class="card card-primary">
                    <div class="row  align-items-center">
                        <div class="col-8">
                            <a href="{{ route('users.index') }}" class="btn btn-warning ml-2 mt-2 mb-2"> <i class="fas fa-list"></i> Regresar a la lista</a>
                            

                        </div>
                        <div class="col-4">

                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class="col-12">
                <div class="card card-primary">
                    
                    <div class="card-body">

                        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    {!! Form::text('name', null, array('placeholder' => 'Nombre','class' =>
                                    'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Correo electrónico:</label>
                                    {!! Form::text('email', null, array('placeholder' => 'Correo electrónico','class' =>
                                    'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Contraseña:</label>
                                    {!! Form::password('password', array('placeholder' => 'Contraseña','class' =>
                                    'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Confirmar Contraseña:</label>
                                    {!! Form::password('confirm-password', array('placeholder' => 'Confirmar Contraseña','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Rol:</label>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple'))
                                    !!}
                                </div>
                            </div>
                            {{--  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>  --}}

                            <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                            <a href="{{route('users.index')}}" class="btn btn-light">
                                Cancelar
                            </a>

                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="card-footer clearfix">



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
