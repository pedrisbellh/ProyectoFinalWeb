<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recurso;
use Livewire\Livewire;
use Illuminate\Http\Request;

class Recursos extends Component
{
    public $recursos, $categoria, $cantidad, $disponibilidad;
    public $modal = false;
    public $ruta = '/sobrantes';
    public $rules = [
        'categoria' => 'required',
        'cantidad' => 'required|numeric',
        'disponibilidad' => 'required',
    ];

    public function render()
    {
        $this->recursos = Recurso::where('disponibilidad', 'disponible')->get();
        return view('livewire.recursos');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;

    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->categoria = '';
        $this->cantidad = '';
        $this->disponibilidad = '';
        $this->id = '';

    }

    public function editar($id)
    {
        $recurso = Recurso::findOrFail($id);
        $this->id = $id;
        $this->categoria = $recurso->categoria;
        $this->cantidad = $recurso->cantidad;
        $this->disponibilidad = $recurso->disponibilidad;
        $this->abrirModal();
        $this->borrar($id);
    }

    public function borrar($id)
    {
        Recurso::find($id)->delete();
        session()->flash('message', 'Recurso eliminado correctamente');
    }

    public function guardar()
    {

        $this->validate();

        Recurso::updateOrCreate(['id'=> $this->id],
        [
            'categoria' => $this->categoria,
            'cantidad' => $this->cantidad,
            'disponibilidad' => $this->disponibilidad
        ]);




        session()->flash('message', $this->id ? '¡Recurso insertado correctamente!' : '¡Recurso actualizado correctamente!');

        $this->cerrarModal();
        $this->limpiarcampos();
    }


    public function sobrantes(){

        return redirect()->to($this->ruta);

    }

    public function store(Request $request){
        $request->validate([
            'categoria' =>'required|string|exists:recursos,categoria',
            'cantidad' =>'required|numeric',
        ]);
    }
}
