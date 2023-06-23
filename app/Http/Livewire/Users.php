<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Users extends Component
{
    public $users;
    public $name;
    public $email;
    public $password;
    public $rol;
    public $modal = false;
    public $rules = [
        'name'=>'required|max:8',
        'email'=>'required',
        'password'=>'required|min:8',
    ];

    public function render()
    {
        $this->users = User::where('id', '<>', 1)->get();
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

    public function limpiarCampos()
    {
        $this->name = '';
        $this->id = '';

    }

    public function borrar($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Usuario eliminado correctamente');
    }

    public function guardar()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'rol' => $this->rol,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', $this->id ? '¡Usuario insertado correctamente!' : '¡Usuario actualizado correctamente!');

        $this->cerrarModal();
        $this->limpiarcampos();
    }


}

