<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
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
                   <h3 class="text-center text-success mt-1">  <strong> <i class="fas fa-book"></i> <span> Ingreso Alumno</span></strong></h3>
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
                        

                        @include('livewire.alumno.form')

                        <div class="col-8 ml-3 mb-1">
                            <button wire:click="store" type="submit" class="btn btn-outline-success mt-3"><i class="fas fa-save"></i> <span>Guardar</span> </button>    
                        </div>
                              
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

    


