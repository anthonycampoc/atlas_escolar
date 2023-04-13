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
                                      <i class="fas fa-user-tie"></i>  <span>Leccion </span>
                                   </strong>
                               </h3> 
                               
                               <div class="table-responsive">
                                <table class="table table-bordered">
                
                                    <thead>
                                        <tr>
                                            
                                            <th class="text-center" >Titulo</th>
                                            <th class="text-center" >Contenido</th>
                                            <th class="text-center" >Fecha Publicada</th>
                                            <th class="text-center" >ACCIONES</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lecciones as $item)
                                        <tr>
                                            <td>{{$item->nLeccion}}</td>
                                            <td>{{$item->tarea}}</td>
                                            <td>{{$item->FD}}</td>
                                            <td>
                                                <button wire:click="editleccion({{$item->idleccion}})" type="submit" class="btn btn-outline-primary "><i class="fas fa-edit"></i></button>
                                            </td>
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
        
    </div>
</div>



