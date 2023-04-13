<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    //use WithPagination;
    //protected $paginationTheme = 'bootstrap';
    public $name;
    public $description;
    public $materia_id;
    public $view = 'create';
    

    public function render()
    {
        return view('livewire.materias.index', [
            'materias' =>Materia::orderBy('id','desc')->paginate(),
        ]);
    }

    public function store(){
        $this->validate([
            'name' => 'required',
            'description' => 'required', 
        ]);

        $materia = Materia::create([
            'name' => $this->name,
            'description' => $this->description, 
        ]);

        $this->edit($materia->id);
        session()->flash('message', 'Materia ingresada correctamente');
        $this->default();
    }

    public function edit($id){
        $materia = Materia::find($id);
        $this->materia_id = $materia->id;
        $this->name = $materia->name;
        $this->description = $materia->description;
        $this->view = 'edit';
    }

    public function default()
    {
        $this->name = '';
        $this->description = '';
        $this->view = 'create';
    }

    public function update(){
        $this->validate([
            'name' => 'required',
            'description' => 'required', 
        ]);

        $materiaUpdate = Materia::find($this->materia_id);
        $materiaUpdate->update([
            'name' => $this->name,
            'description' => $this->description, 
        ]);
        session()->flash('message', 'Materia actualizada correctamente');
        $this->default();
    
    }

    public function destroy($id){
        Materia::destroy($id);
        session()->flash('message', 'Materia eliminada correctamente');
    }
}
