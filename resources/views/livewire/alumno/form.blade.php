<div class="card-body">
    <div class="row">
        <div class="col">
          <input type="text" wire:model= "name" name="name" class="form-control" placeholder="Nombre" aria-label="Nombre">
        </div>
        <div class="col">
          <input type="text" wire:model = "last_name" name="last_name" class="form-control" placeholder="Apellido" aria-label="Descripcion">
        </div>
        <div class="col">
          <input type="text" wire:model = "number" name="number" class="form-control" placeholder="Cedula" aria-label="Descripcion">
        </div>
    </div> 
    <div class="row mt-3">
      <div class="col">
        <input type="text" wire:model= "telephone" name="telephone" class="form-control" placeholder="Numero" aria-label="Nombre">
      </div>
      <div class="col">
        <input type="text" wire:model = "email" name="email" class="form-control" placeholder="Correo" aria-label="Descripcion">
      </div>
    </div> 
</div>