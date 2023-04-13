
    <div class="container-fluid">
        @if (count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                <label>¡Vaya!</label> Hubo algunos problemas con su entrada. <br> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="row  align-items-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">   
                                    <h3 class=" text-center text-warning"> 
                                        <strong> 
                                          <i class="fas fa-user-tie"></i>  <span> Agregar Leccion {{$leccionesM->name}} </span>
                                       </strong>
                                   </h3> 
                                   
                                                @include('livewire.grupo.asignacion.materiaform')
                                   
                                    <div class="row mt-3">
                                        <div class="col">
                                            <button wire:click="store({{$leccionesM->id}})" type="submit" class="btn btn-outline-success mt-3"><i class="fas fa-save"></i> <span>Guardar</span> </button>  
                                        </div>
                                    </div>
    
                                    
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    