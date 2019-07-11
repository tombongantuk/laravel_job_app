<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
            $role_admin = Role::where('name','admin')->first(); 
            $role_user = Role::where('name','user')->first(); 

            $admin = new User(); 
            $admin->name = 'Aming'; 
            $admin->email = 'aming@example.com'; 
            $admin->password = bcrypt('amingg'); 
            $admin->save(); 
            $admin->roles()->attach($role_admin);

            $user = new User(); 
            $user->name ='Usering'; 
            $user->email = 'usering@example.com'; 
            $user->password = bcrypt('usering'); 
            $user->save();
            $user->roles()->attach($role_user); 
    }
}
