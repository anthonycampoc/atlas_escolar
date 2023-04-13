<div class="col-12">
    <div class="card card-primary">
        
        <div class="card-body">

            <div class="table-responsive">
                <table id="tablem" class="table table-bordered">

                    <thead>
                        <tr>
                            
                            <th class="text-center" >Nombre</th>
                            <th class="text-center" >Descripcion</th>
                            <th class="text-center" >Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materias as $materia)
                        <tr>
                            <td>{{$materia->name}}</td>
                            <td>{{$materia->description}}</td>
                        
                                <td class="text-center"> <button wire:click="edit({{$materia->id}})" type="submit" class="btn btn-outline-primary "><i class="fas fa-edit"></i></button>
                              <button wire:click="destroy({{$materia->id}})" type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                       
                        </tr>
                            
                        @endforeach
                       
                    </tbody>
                </table>
              
            </div>
        </div>
        <div class="card-footer clearfix">
          {{--{{ $materias->links() }}--}} 
        </div>
    </div>
</div>

