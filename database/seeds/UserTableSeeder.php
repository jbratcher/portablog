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
        $user = new User;
        $user->name = 'Bobby Baratheon';
        $user->email = 'robertbaratheon@kingslanding.com';
        $user->password = bcrypt('bobbyb3');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Ned Stark';
        $admin->email = 'eddardstark@winterfell.org';
        $admin->password = bcrypt('rpluslequalsj1');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
