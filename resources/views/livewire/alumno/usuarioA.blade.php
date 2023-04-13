
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                   <h3 class="text-center text-info mt-1">  <strong> <i class="fas fa-user"></i> <span> Ingreso Usuario</span></strong></h3>
                    <div class="row  align-items-center">
                      
                        @include('livewire.alumno.form')

                        <div class="row mt-3">
                            <div class="col">
                              <input type="text" wire:model= "codigo" name="telephone" class="form-control" placeholder="Numero" aria-label="Nombre">
                            </div>
                          </div> 

                        <div class="col-8 ml-3 mb-1">
                            <button wire:click="addusuario" type="submit" class="btn btn-outline-info mt-3"><i class="fas fa-save"></i> <span>Guardar</span> </button>    
                        </div>
                              
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

    


