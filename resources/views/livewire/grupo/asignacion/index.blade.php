
 
 
   <div class="row">
      @can('grupo-asignacion')
         @include("livewire.grupo.asignacion.$view")

         @include("livewire.grupo.asignacion.table")
      @endcan
   </div>   

 