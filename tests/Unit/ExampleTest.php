<?php

namespace Tests\Unit;

use App\Http\Livewire\Users;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    // public function testUpdateInfo() {
    //     // Creamos un usuario de ejemplo
    //     $user = new User(1, 'Pedrisbel', 'pedrisbel@example.com');

    //     // Definimos los nuevos valores de nombre y correo electrónico
    //     $newName = 'Pedrisbel';
    //     $newEmail = 'pedrisbel@example.com';

    //     // Llamamos al método updateInfo() para actualizar la información del usuario
    //     $user->updateInfo($newName, $newEmail);

    //     // Verificamos que los valores de nombre y correo electrónico se hayan actualizado correctamente
    //     $this->assertEquals($newName, $user->getName());
    //     $this->assertEquals($newEmail, $user->getEmail());
    //  }
}
