<div class="container-fluid">
    <div class="row">
        <div class="col-12">
           
            <div class="card card-primary">
                <div class="row  align-items-center">

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                   
                                <h3 class=" text-center text-warning"> 
                                    <strong> 
                                      <i class="fas fa-user-tie"></i>  <span>Curso {{$curso->name}} </span>
                                   </strong>
                               </h3>
                                    
                               

                                  
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
                                   
                                    <label for="">Listado de materias disponibles</label>
                                    
                                    <div class="table-responsive">
                                        <table class="table aling-middle">
                                            <thead>
                                                <tr>
                                                    <th>Informacion</th>
                                                    <th></th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($profeD as $item2)
                                                <tr>
                                                    <td>{{$item2->materia}} impartida por el profesor {{$item2->profesor}}  </td>
                                                    <td></td>
                                                    <td><button wire:click="addmateriaP({{$item2->id}}, {{$curso->id}})" type="submit" class="btn btn-outline-success"><i class="fas fa-check-circle"></i></button></td>
                                                </tr>
                                                @endforeach
                                            
                                            </tbody>
                                        </table>
                                     </div> 

                                  
                            </div> 
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <button wire:click="default" type="submit" class="btn btn-outline-secondary mt-3"> <i class="fas fa-long-arrow-alt-left"></i> <span>Cancelar</span> </button>  
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
                        <div class="row mt-3">
                                
                            <div class="col">
                                <label for="">Listado de profesores asignadas</label>

                                <div class="table-responsive">
                                        <table class="table aling-middle">
                                            <thead>
                                                <tr>
                                                    <th>Materia</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                               @foreach ($profeA as $item2)
                                                <tr>
                                                    <td>{{$item2->materia}} impartida por el profesor {{$item2->profesor}}
                                                    <td><button wire:click=" elminarmateriaP({{$item2->id}}, {{$curso->id}})" type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                                                </tr>
                                                @endforeach
                                            
                                            </tbody>
                                        </table>
                                </div> 
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
                        <div class="row mt-3">
                                
                            <div class="col">
                                <label for="">Estuadiantes Asignados</label>

                                <div class="table-responsive">
                                        <table class="table aling-middle">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                               @foreach ($alumnoA as $item2)
                                                <tr>
                                                    <td>{{$item2->name }}</td>
                                                    <td>{{$item2->status}}</td>
                                                    <td><button wire:click=" eliminarAlumno({{$item2->id}}, {{$curso->id}})" type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                                                </tr>
                                                @endforeach
                                            
                                            </tbody>
                                        </table>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



