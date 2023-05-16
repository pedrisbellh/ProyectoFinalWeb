<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users, $name, $email;
    public $modal = false;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.users');
    }

    public function insertar()
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
        $this->name = '';
        $this->id = '';

    }

    public function modificar($id)
    {
        $user = User::findOrFail($id);
        $this->id = $id;
        $this->name = $user->name;

        $this->abrirModal();
    }

    public function borrar($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Usuario eliminado correctamente');
    }

    public function guardar()
    {
        User::updateOrCreate(['id'=> $this->id_user],
        [
            'name' => $this->name,
            'email' => $this->email
        ]);

        session()->flash('message', $this->id_user ? '¡Actualización exitosa!' : '¡Alta exitosa!');

        $this->cerrarModal();
        $this->limpiarcampos();
    }
}
