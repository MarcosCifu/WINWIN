<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          //Permission list
          Permission::create(['name' => 'puntos.index']);
          Permission::create(['name' => 'puntos.edit']);
          Permission::create(['name' => 'puntos.show']);
          Permission::create(['name' => 'puntos.create']);
          Permission::create(['name' => 'puntos.destroy']);
          Permission::create(['name' => 'puntos.agregarIwin']);
  
          //Admin
          $admin = Role::create(['name' => 'Admin']);
  
          $admin->givePermissionTo([
              'puntos.index',
              'puntos.edit',
              'puntos.show',
              'puntos.create',
              'puntos.destroy',
              'puntos.agregarIwin'
          ]);
          //$admin->givePermissionTo('products.index');
          //$admin->givePermissionTo(Permission::all());
         
          //Guest
          $guest = Role::create(['name' => 'Jugador']);
  
          $guest->givePermissionTo([
              'puntos.index',
              'puntos.show'
          ]);
  
          //User Admin
          $user = User::find(1); 
          $user->assignRole('Admin');

    }
}
