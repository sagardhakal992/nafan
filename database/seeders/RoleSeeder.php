<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Role::create(["name"=>"superadmin"]);
        Role::create(["name"=>"staff"]);

        $superuser = User::create(["name"=>"superadmin","email"=>"nafansuperadmin@nafan.org","password"=>Hash::make(env("SUPERADMIN_PASSWORD","nafan@1234@"))]);
        $superuser->member()->create(
            [
                "name"=>$superuser->name,
                "email"=>$superuser->email,
                "fk_role_id"=>$superadmin->id,
                "phone_number"=>"98",
                "age"=>0
            ]
        );
    }
}
