<div class="container-fluid">
    
     <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                   <h3 class="text-center text-warning mt-1">  <strong> <i class="fas fa-book"></i> <span> Actualizar Profesor</span></strong></h3>
                <div class="row  align-items-center">
                       
                        @include('livewire.profesor.form')

                        <div class="col-8 ml-3 mb-1">
                            <button wire:click="update" type="submit" class="btn btn-outline-warning mt-3"> <i class="fas fa-edit"></i> <span> Actualizar </span> </button>

                            <button wire:click="default" type="submit" class="btn btn-outline-secondary mt-3"> <i class="fas fa-long-arrow-alt-left"></i> <span>Cancelar</span> </button>   
                        </div>
                              
                </div>
                    
             </div>
        </div>
    </div>
</div>




