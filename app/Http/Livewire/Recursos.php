<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recurso;

class Recursos extends Component
{
    public $recursos, $categoria, $cantidad, $disponibilidad;
    public $modal = false;

    public function render()
    {
        $this->recursos = Recurso::all();
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
    }

    public function borrar($id)
    {
        Recurso::find($id)->delete();
        session()->flash('message', 'Recurso eliminado correctamente');
    }

    public function guardar()
    {
        Recurso::updateOrCreate(['id'=> $this->id_recurso],
        [
            'categoria' => $this->categoria,
            'cantidad' => $this->cantidad
        ]);

        session()->flash('message', $this->id_recurso ? '¡Actualización exitosa!' : '¡Alta exitosa!');

        $this->cerrarModal();
        $this->limpiarcampos();
    }
}
