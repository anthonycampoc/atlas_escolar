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
                                      <i class="fas fa-user-tie"></i>  <span>Curso {{$cursoP->name}} </span>
                                   </strong>
                               </h3>         
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
           
            <div class="card card-primary">
                <div class="row  align-items-center">

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                   
                                    <label for="">Listado de estudiante</label>
                                    
                                    <div class="table-responsive">
                                      <table class="table aling-middle">
                                        <thead>
                                            <tr>
                                                <th>Apellido y Nombre </th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                           @foreach ($alumnoA as $item2)
                                            <tr>
                                                <td> {{$item2->apellido }} {{$item2->estudiante }}</td>
                                                <td>{{$item2->estado}}</td>
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

        <div class="col-6">
            <div class="card card-primary">
                <div class="row  align-items-center">

                    <div class="card-body">
                        <div class="row mt-3">
                                
                            <div class="col">
                                <label for="">Listado de materias</label>

                                <div class="table-responsive">
                                     <table class="table aling-middle">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Materia</th>
                                                    <th>Lecciones</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                               @foreach ($MateriaA  as $item2)
                                                <tr>
                                                
                                                    <td>{{$item2->materia}} </td>  
                                                    <td>
                                                        <button wire:click="viewleccion({{$item2->materiaId}})" type="submit" class="btn btn-outline-success"><i class="fas fa-book-reader"></i></button>
                                                        <button wire:click="lecciones({{$item2->materiaId}})" type="submit" class="btn btn-outline-success"><i class="fas fa-eye"></i></button>
                                                    
                                                    </td>
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



