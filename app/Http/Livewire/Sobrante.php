<?php

namespace App\Http\Livewire;

use App\Models\Recurso;
use Livewire\Component;

class Sobrante extends Component
{
    public $recursos, $categoria, $cantidad, $disponibilidad;
    public $modal = false;

    public function render()
    {
        $this->recursos = Recurso::where('disponibilidad', 'sobrante')->get();
        return view('livewire.sobrante');
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

    public function limpiarcampos()
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
}
