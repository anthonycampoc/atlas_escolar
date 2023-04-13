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
                                            <i class="fas fa-user-tie"></i>  <span>Alumno {{$alumnoM->name}} {{$alumnoM->last_name}} </span>
                                        </strong>
                                    </h3> 
                                    @if ($alumnoM->asignacion == 1)
                                        @foreach ($alumnoM->grupo as $itemA)
                                            <div>
                                                <strong>
                                                    <h3 class=" text-center text-info"> ASIGNADO AL CURSO {{$itemA->name}}</h3> 
                                                </strong>
                                            </div> 
                                        @endforeach        
                                    @endif    
                                 
                              
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



