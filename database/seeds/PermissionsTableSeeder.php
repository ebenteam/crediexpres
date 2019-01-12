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
            'slug'   => 'clientes.index',
            'description'   => 'Lista y navega todos los clientes del sistema',

        ]);

        Permission::create([
            'name'   => 'Ver detalle de Clientes',
            'slug'   => 'clientes.show',
            'description'   => 'Ver en detalle cada cliente del sistema',

        ]);

        Permission::create([
            'name'   => 'Creación de Clientes',
            'slug'   => 'clientes.create',
            'description'   => 'Crea un cliente del sistema',

        ]);

        Permission::create([
            'name'   => 'Editar Clientes',
            'slug'   => 'clientes.edit',
            'description'   => 'Edita cualquier cliente',

        ]);

        Permission::create([
            'name'   => 'Eliminar Clientes',
            'slug'   => 'clientes.destroy',
            'description'   => 'Elimina clientes del sistema',

        ]);



       //Creditos------------------------------------------------------------

       Permission::create([
        'name'   => 'Navegar Creditos ',
        'slug'   => 'creditos.index',
        'description'   => 'Lista y navega todos los creditos del cliente',

    ]);

    Permission::create([
        'name'   => 'Ver detalle de Creditos',
        'slug'   => 'creditos.show',
        'description'   => 'Ver en detalle cada credito',

    ]);

    Permission::create([
        'name'   => 'Creación de Creditos',
        'slug'   => 'creditos.create',
        'description'   => 'Crea un credito al cliente',

    ]);

    Permission::create([
        'name'   => 'Editar Creditos',
        'slug'   => 'creditos.edit',
        'description'   => 'Edita cualquier credito',

    ]);

    Permission::create([
        'name'   => 'Eliminar Creditos',
        'slug'   => 'creditos.destroy',
        'description'   => 'Elimina creditos del sistema',

    ]);


    //Abonos------------------------------------------------------------

    Permission::create([
        'name'   => 'Navegar Abonos',
        'slug'   => 'abonos.index',
        'description'   => 'Lista y navega todos los abonos del cliente',

    ]);

    Permission::create([
        'name'   => 'Ver detalle de Abonos',
        'slug'   => 'abonos.show',
        'description'   => 'Ver en detalle cada abono',

    ]);

    Permission::create([
        'name'   => 'Creación de Abonos',
        'slug'   => 'abonos.create',
        'description'   => 'Crea un abono al cliente',

    ]);

    Permission::create([
        'name'   => 'Editar Abonos',
        'slug'   => 'abonos.edit',
        'description'   => 'Edita cualquier abono',

    ]);

    Permission::create([
        'name'   => 'Eliminar Abonos',
        'slug'   => 'abonos.destroy',
        'description'   => 'Elimina abonos del sistema',

    ]);



    //Administrador------------------------------------------------------------

    Permission::create([
        'name'   => 'Cuadre del dia',
        'slug'   => 'administracion.cuadredia',
        'description'   => 'Informacion para realizar cuadre del dia',

    ]);

    Permission::create([
        'name'   => 'Cuenta Total',
        'slug'   => 'administracion.cuentatotal',
        'description'   => 'Informacion detallada del total',

    ]);

    Permission::create([
        'name'   => 'Gastos',
        'slug'   => 'administracion.gastos',
        'description'   => 'Informacion de los gastos de la empresa',

    ]);

    Permission::create([
        'name'   => 'Listas de Cobros',
        'slug'   => 'administracion.listacobros',
        'description'   => 'Lista de Cobros a realizar',

    ]);

   











    }
}
