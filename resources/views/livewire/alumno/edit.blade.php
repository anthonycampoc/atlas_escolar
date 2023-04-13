<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card card-primary">
                   <h3 class="text-center text-warning mt-1">  <strong> <i class="fas fa-book"></i> <span> Actualizar Alumno</span></strong></h3>
                <div class="row  align-items-center">
                       
                        @include('livewire.profesor.form')

                        <div class="col-8 ml-3 mb-1">
                            <button wire:click="update" type="submit" class="btn btn-outline-warning mt-3"> <i class="fas fa-edit"></i> <span> Actualizar </span> </button>

                            <button wire:click="default" id="refresh" type="submit" class="btn btn-outline-secondary mt-3"> <i class="fas fa-long-arrow-alt-left"></i> <span>Cancelar</span> </button>   
                        </div>
                              
                </div>
                    
             </div>
        </div>

        <div class="col-4">
           
            <div class="card card-primary">
                <div class="row  align-items-center">

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                    @if ($idalumnado->asignacion == 1)
                                        <h4 class=" text-center text-info">{{$idalumnado->name}} {{$idalumnado->last_name}} YA TIENE UN CURSO ASIGNADO</h4>
                                    @else
                                    <label for="">Listado de cursos</label>
                                    <div class="table-responsive">
                                        <table class="table aling-middle">
                                            <thead>
                                                <tr>
                                                    <th>Cursos</th>
                                                    <th></th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>
    
                                            <tbody>
                                                @foreach ($cursoM as $item2)
                                                <tr>
                                                    <td>{{$item2->name}}</td>
                                                    <td></td>
                                                    <td><button wire:click="addmateriaA({{$item2->id}},{{$idalumnado->id}})" type="submit" class="btn btn-outline-success"><i class="fas fa-check-circle"></i></button></td>
                                                </tr>
                                                @endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




