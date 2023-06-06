<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role1 = Role::create(['name'=>'admin']);
       $role2 = Role::create(['name'=>'blogger']);

       Permission::create(['name' => 'home'])->syncRoles([$role1,$role2]);

       Permission::create(['name' => 'productos.index'])->assignRole($role1);
       Permission::create(['name' => 'productos.create'])->assignRole($role1);
       Permission::create(['name' => 'productos.edit'])->assignRole($role1);
       Permission::create(['name' => 'productos.destroy'])->assignRole($role1);


       Permission::create(['name' => 'categoria.index'])->assignRole($role1);
       Permission::create(['name' => 'categoria.create'])->assignRole($role1);
       Permission::create(['name' => 'categoria.edit'])->assignRole($role1);
       Permission::create(['name' => 'categoria.destroy'])->assignRole($role1);


       Permission::create(['name' => 'subcategoria.index'])->assignRole($role1);
       Permission::create(['name' => 'subcategoria.create'])->assignRole($role1);
       Permission::create(['name' => 'subcategoria.edit'])->assignRole($role1);
       Permission::create(['name' => 'subcategoria.destroy'])->assignRole($role1);

    }
}
