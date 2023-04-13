<div class="col-12">
    <div class="card card-primary">
        
        <div class="card-body">

            <div class="table-responsive">
                <table id="tablem" class="table table-bordered">

                    <thead>
                        <tr>
                            
                            <th class="text-center" >Nombre</th>
                            <th class="text-center" >Apellido</th>
                            <th class="text-center" >cedula</th>
                            <th class="text-center" >telefono</th>
                            <th class="text-center" >Estado</th>
                            <th class="text-center" >Correo</th>
                            <th class="text-center" >Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                        <tr>
                            <td>{{$alumno->name}}</td>
                            <td>{{$alumno->number}}</td>
                            <td>{{$alumno->last_name}}</td>
                            <td>{{$alumno->telephone}}</td>
                            <td>{{$alumno->status}}</td>
                            <td>{{$alumno->email}}</td>

                 
                            <td class="text-center"> 
                                <button wire:click="view({{$alumno->id}})" type="submit" class="btn btn-outline-primary "><i class="fas fa-eye"></i></button>
                                <button wire:click="edit({{$alumno->id}})" type="submit" class="btn btn-outline-primary "><i class="fas fa-edit"></i></button>
                                <button wire:click="destroy({{$alumno->id}})" type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                            
                        @endforeach
                       
                    </tbody>
                </table>
              
            </div>
        </div>
        <div class="card-footer clearfix">
            {{$alumnos->links() }}
        </div>
    </div>
</div>