<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users 
        Permission::create([
            'name'   => 'Navegar usuarios',
            'slug'   => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([
            'name'   => 'Ver detalle de usuario',
            'slug'   => 'users.show',
            'description'   => 'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([
            'name'   => 'Edición de usuarios',
            'slug'   => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([
            'name'   => 'Eliminar usuario',
            'slug'   => 'users.destroy',
            'description'   => 'Eliminar cualquier usuario del sistema',

        ]);


        //Roles----------------------------------------------------------------

        Permission::create([
            'name'   => 'Navegar roles',
            'slug'   => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',

        ]);

        Permission::create([
            'name'   => 'Ver detalle de roles',
            'slug'   => 'roles.show',
            'description'   => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([
            'name'   => 'Creación de roles',
            'slug'   => 'roles.create',
            'description'   => 'Crea un rol del sistema',

        ]);

        Permission::create([
            'name'   => 'Editar roles',
            'slug'   => 'roles.edit',
            'description'   => 'Edita cualquier rol',

        ]);

        Permission::create([
            'name'   => 'Eliminar roles',
            'slug'   => 'roles.destroy',
            'description'   => 'Elimina roles del sistema',

        ]);

        //Clientes------------------------------------------------------------

        Permission::create([
            'name'   => 'Navegar Clientes',
            'slug'   => 'cliente.index',
            'description'   => 'Lista y navega todos los clientes del sistema',

        ]);

        Permission::create([
            'name'   => 'Ver detalle de Clientes',
            'slug'   => 'cliente.show',
            'description'   => 'Ver en detalle cada cliente del sistema',

        ]);

        Permission::create([
            'name'   => 'Creación de Clientes',
            'slug'   => 'cliente.create',
            'description'   => 'Crea un cliente del sistema',

        ]);

        Permission::create([
            'name'   => 'Editar Clientes',
            'slug'   => 'cliente.edit',
            'description'   => 'Edita cualquier cliente',

        ]);

        Permission::create([
            'name'   => 'Eliminar Clientes',
            'slug'   => 'cliente.destroy',
            'description'   => 'Elimina clientes del sistema',

        ]);

    }
}
