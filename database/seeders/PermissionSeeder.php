<?php

namespace Database\Seeders;

use App\Models\Config\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                "name"=>"permission-create",
                "guard_name"=>"web",
                "group_name"=>'Permission'
            ],
            [
                "name"=>"permission-edit",
                "guard_name"=>"web",
                "group_name"=>'Permission'
            ],
            [
                "name"=>"permission-view",
                "guard_name"=>"web",
                "group_name"=>'Permission'
            ],
            [
                "name"=>"permission-delete",
                "guard_name"=>"web",
                "group_name"=>'Permission'
            ],
            [
                "name"=>"role-create",
                "guard_name"=>"web",
                "group_name"=>'Role'
            ],
            [
                "name"=>"role-edit",
                "guard_name"=>"web",
                "group_name"=>'Role'
            ],
            [
                "name"=>"role-view",
                "guard_name"=>"web",
                "group_name"=>'Role'
            ],
            [
                "name"=>"role-delete",
                "guard_name"=>"web",
                "group_name"=>'Role'
            ],
            [
                "name"=>"user-create",
                "guard_name"=>"web",
                "group_name"=>'User'
            ],
            [
                "name"=>"user-edit",
                "guard_name"=>"web",
                "group_name"=>'User'
            ],
            [
                "name"=>"user-view",
                "guard_name"=>"web",
                "group_name"=>'User'
            ],
            [
                "name"=>"user-delete",
                "guard_name"=>"web",
                "group_name"=>'User'
            ]
        ];

        foreach($permissions as $permission){
            Permission::create($permission);
        }
    }
}
