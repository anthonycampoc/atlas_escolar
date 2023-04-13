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
                                        @foreach ($materiaH as $m)
                                        <i class="fas fa-book-open"></i> <span>Lecciones de {{$m->nombreMateria}}  </span>
                                        @endforeach
                                      
                                   </strong>
                               </h3> 
                               
                               <div class="table-responsive">
                                <table class="table table-bordered">
                
                                    <thead>
                                        <tr>
                                            
                                            <th class="text-center" >Titulo</th>
                                            <th class="text-center" >Contenido</th>
                                            <th class="text-center" >Fecha Publicada</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($l as $item)
                                        <tr>
                                            <td>{{$item->nombreLeccion}}</td>
                                            <td>{{$item->contenidoLeccion}}</td>
                                            <td>{{$item->fechaLeccion}}</td>
                                           
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

