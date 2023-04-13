@extends('adminlte::page')

@section('title', 'Detalles de usuario')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detalles de usuario</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
                    <li class="breadcrumb-item active">Detalles de usuario</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="row">

                     {{--  @include('partials.alerts')--}}

            <div class="col-12">
                <div class="card card-primary">
                    <div class="row  align-items-center">
                        <div class="col-8">
                            <a href="{{ route('users.index') }}" class="btn btn-warning ml-2 mt-2 mb-2"> <i class="fas fa-list"></i> Regresar a la lista</a>

                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-info ml-2 mt-2 mb-2"> <i class="far fa-edit"></i> Editar</a>

                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                <button type="submit" class="btn btn-danger ml-2 mt-2 mb-2"> <i class="fas fa-trash-alt"></i> Eliminar</button>      
                            {!! Form::close() !!}


                        </div>
                        <div class="col-4">

                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class="col-12">
                <div class="card card-primary">
                    
                    <div class="card-body">

						<div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    {{ $user->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Correo electrónico:</label>
                                    {{ $user->email }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Roles:</label>
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
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
    <script> console.log('Hi!'); </script>
@stop