



<div class="col-12">
    <div class="card card-primary">
        
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered">

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
                        @foreach ($profesores as $profesor)
                        <tr>
                            <td>{{$profesor->name}}</td>
                            <td>{{$profesor->number}}</td>
                            <td>{{$profesor->last_name}}</td>
                            <td>{{$profesor->telephone}}</td>
                            <td>{{$profesor->status}}</td>
                            <td>{{$profesor->email}}</td>

                 
                            <td class="text-center">  
                                
                                    <button wire:click="view({{$profesor->id}})" type="submit" class="btn btn-outline-primary "><i class="fas fa-eye"></i></button>
                                    <button wire:click="edit({{$profesor->id}})" type="submit" class="btn btn-outline-primary "><i class="fas fa-edit"></i></button>
                                    <button wire:click="destroy({{$profesor->id}})" type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                            
                        </tr>
                            
                        @endforeach
                       
                    </tbody>
                </table>
              
            </div>
        </div>
        <div class="card-footer clearfix">
            {{$profesores->links() }}
        </div>
    </div>
</div>