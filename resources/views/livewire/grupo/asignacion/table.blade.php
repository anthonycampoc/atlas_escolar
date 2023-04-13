

<div class="col-12">
 
    <div class="card card-primary">
        
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            
                            <th class="text-center" >Nombre</th>
                            <th class="text-center" >Numero</th>
                            <th class="text-center" >Calendario</th>
                            <th class="text-center" >Descripcion</th>
                            <th class="text-center" >Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gruposA as $grupo)
                        <tr>
                            <td>{{$grupo->name}}</td>
                            <td>{{$grupo->number}}</td>
                            <td>{{$grupo->schedule}}</td>
                            <td>{{$grupo->description}}</td>
                    

                 
                            <td class="text-center"> 
                                <button wire:click="view({{$grupo->id}})" type="submit" class="btn btn-outline-primary "><i class="fas fa-eye"></i></button>
                            </td>
                            </tr>
                            
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer clearfix">
           
        </div>
    </div>
</div>