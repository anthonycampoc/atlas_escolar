
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                   <h3 class="text-center text-warning mt-1">  <strong> <i class="fas fa-book"></i> <span> Actualizar Materia</span></strong></h3>
                    <div class="row  align-items-center">
                       
                       {{-- <div class="col-4">

                            <div class="input-group float-rigth mr-2  mt-2 mb-2">
                                <input type="text" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="button">
                                    <i class="fas fa-search"></i>
                                  </button>
                                </div>
                            </div>

                        </div>--}}
                        

                        @include('livewire.materias.form')

                        <div class="col-8 ml-3 mb-1">
                            <button wire:click="update" type="submit" class="btn btn-outline-warning mt-3"> <i class="fas fa-edit"></i> <span> Actualizar </span> </button>

                            <button wire:click="default" type="submit" class="btn btn-outline-secondary mt-3"> <i class="fas fa-long-arrow-alt-left"></i> <span>Cancelar</span> </button>   
                        </div>
                              
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

