<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "Admin";
        $role->save();

        $role = new Role();
        $role->name = "Kepala Bagian";
        $role->save();

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("admin");
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Kepala Bagian";
        $user->email = "kepalabagian@gmail.com";
        $user->password = bcrypt("kepalabagian");
        $user->role_id = 2;
        $user->save();
    }
}
