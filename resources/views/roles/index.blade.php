@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
@laravelPWA
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Roles</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                    <li class="breadcrumb-item active">Roles</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')

@can('role-index')
<section class="content">
    <div class="container-fluid">
        <div class="row">

           {{-- @include('partials.alerts')--}}

            <div class="col-12">
                <div class="card card-primary">
                    <div class="row  align-items-center">
                        <div class="col-8">
                            <a href="{{ route('roles.create') }}" class="btn btn-info ml-2 mt-2 mb-2"> <i
                                    class="far fa-plus-square"></i> Nuevo rol</a>


                        </div>
                        <div class="col-4">

                            <div class="input-group float-rigth mr-2  mt-2 mb-2">
                                <input type="text" class="form-control" placeholder="Buscar"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>


            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>Nombre</th>
                                        <th width="280px">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a class="btn btn-info"
                                                href="{{ route('roles.show',$role->id) }}">Mostrar</a>
                                           
                                            <a class="btn btn-primary"
                                                href="{{ route('roles.edit',$role->id) }}">Editar</a>
                                        
                                         
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                                            $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                       
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card-footer clearfix">

                        {!! $roles->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endcan    
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
