<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>"Super Admin",
            'email'=>"admin@admin.com",
            'password'=>Hash::make("secret"),
        ]);

        Role::create(['name'=>'SuperAdmin']);
        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'User']);
        
        $user->assignRole('SuperAdmin');
    }
}
