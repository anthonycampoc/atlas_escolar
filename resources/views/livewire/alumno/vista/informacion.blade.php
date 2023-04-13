
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
           
                    <div class="card card-primary">
                        <div class="row  align-items-center">
        
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">   
                                        <h3 class=" text-center text-info"> 
                                            <strong> 
                                                <i class="fas fa-school"></i> <span>Curso {{$personalizado->name}} </span>
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
                                                <h3 class="text-center text-warning " > <i class="fas fa-user-friends"></i><strong> Compañeros </strong> </h3>
                                                <div class="table-responsive">
                                                    <table id="tablem" class="table aling-middle">
                                    
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th class="text-left" >Nombre</th>
                                                                <th class="text-left" >Apellido</th>
                                                                <th class="text-left" >telefono</th>
                                                                <th class="text-left" >Correo</th>
                                                             
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($companero as $alumno)
                                                            <tr>
                                                                <td>{{$alumno->name}}</td>
                                                                <td>{{$alumno->last_name}}</td>
                                                                <td>{{$alumno->telephone}}</td>
                                                                <td>{{$alumno->email}}</td>
                                    
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
                        <div class="col-6">
                            <div class="card card-primary">
                                <div class="row  align-items-center">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                               
                                                <div class="table-responsive">
                                                    <table id="tablem" class="table aling-middle">
                                    
                                                        <thead>
                                                            <tr>
                                                                
                                                                
                                                                <th class="text-left" >Materia</th>
                                            
                                                                <th class="text-left" >Profesor</th>
                                                                <th class="text-left" >Correo</th>
                                                                <th class="text-left" >Telefono</th>
                                                                <th class="text-center" >Lecciones</th>
                                                               
                                                             
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($Prof_materias as $profesor)
                                                            <tr>
                                                               
                                                                <td>{{$profesor->materia}}</td>
                                                             
                                                                <td> {{$profesor->apellido}} {{$profesor->profesor}}</td>
                                                                <td> {{$profesor->correo}}</td>
                                                                <td> {{$profesor->telefono}}</td>
                                                                <td class="text-center"> <button wire:click="leccionesA({{$profesor->materiaID}}, {{$profesor->profesorId}} )" type="submit" class="btn btn-outline-primary "><i class="fas fa-eye"></i></button></td>
                                                               
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
