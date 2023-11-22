<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@email.com',
            'password' => bcrypt('super_admin')
        ]);

        $role = Role::create([
            'name'=>'Superadmin',
            'guard_name'=>'web'
        ]);

        $permission = Permission::pluck('id','id')->all();
        $role->syncPermissions($permission);
        $user->assignRole([$role->id]);

    }
}
