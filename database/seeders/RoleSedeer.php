<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol1 = Role::create(['name'=>'vicedecano']);
        $rol2 = Role::create(['name'=>'asistente']);


        Permission::create(['name'=>'gestion.recursos.index'])->assignRole($rol2);
        Permission::create(['name'=>'gestion.recursos.create'])->assignRole($rol2);
        Permission::create(['name'=>'gestion.recursos.edit'])->assignRole($rol2);
        Permission::create(['name'=>'gestion.recursos.destroy'])->assignRole($rol2);
        Permission::create(['name'=>'importar.acta'])->assignRole($rol2);

        Permission::create(['name'=>'gestion.sobrantes.index'])->assignRole($rol2);
        Permission::create(['name'=>'gestion.sobrantes.create'])->assignRole($rol2);
        Permission::create(['name'=>'gestion.sobrantes.edit'])->assignRole($rol2);
        Permission::create(['name'=>'gestion.sobrantes.destroy'])->assignRole($rol2);


        Permission::create(['name'=>'gestion.usuarios.index'])->assignRole($rol1);
        Permission::create(['name'=>'gestion.usuarios.create'])->assignRole($rol1);
        Permission::create(['name'=>'gestion.usuarios.edit'])->assignRole($rol1);
        Permission::create(['name'=>'gestion.usuarios.destroy'])->assignRole($rol1);
        Permission::create(['name'=>'importar.vale'])->assignRole($rol1);



    }
}
