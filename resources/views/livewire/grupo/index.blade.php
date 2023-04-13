

 <div class="row">
   @can('role-edit')
    @include("livewire.grupo.$view")
      @include("livewire.grupo.table")
    @endcan
 </div>



