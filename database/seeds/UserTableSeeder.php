<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Jeremy Bratcher';
        $admin->email = 'jeremy.bratcher@gmail.com';
        $admin->password = bcrypt('port1981');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());

    }
}
