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
                                      <i class="fas fa-user-tie"></i>  <span>Materias de  {{$nombre->name}} {{$nombre->last_name}}</span>
                                   </strong>
                               </h3>
                                    
                               

                                  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="col-6"> 
            <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <div class="row">
                        <div class="col">
                               
                                <label for="">Listado de materias disponibles</label>
                                
                                <div class="table-responsive">
                                    <table class="table aling-middle">
                                        <thead>
                                            <tr>
                                                <th>Materia</th>
                                                <th></th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($materiad as $item2)
                                            <tr>
                                                <td>{{$item2->name}} </td>
                                                <td></td>
                                                <td><button wire:click="addmateria({{$item2->id }}, {{$nombre->id}} )" type="submit" class="btn btn-outline-success"><i class="fas fa-check-circle"></i></button></td>
                                            </tr>
                                            @endforeach
                                        
                                        </tbody>
                                    </table>
                            </div> 
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-arrow-alt-circle-up"></i>
                            </button>
                              
                        </div> 
                    </div>
                  </div>
                </div>
              </div>
        </div>

      
 
        <div class="col-6"> 
            <div id="accordion">
                <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                </button>
                            </h5>
                        </div>
            
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row mt-3"> 
                                        <div class="col">
                                            <label for="">Listado de materias asignadas</label>
                                            <div class="table-responsive">
                                                <table class="table aling-middle">
                                                    <thead>
                                                        <tr>
                                                            <th>Materia</th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($materiaAsig as $item2)
                                                        <tr>
                                                            <td>{{$item2->name}}</td>
                                                            <td><button wire:click="eliminarMateria({{$item2->id}}, {{$nombre->id}})" type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
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



