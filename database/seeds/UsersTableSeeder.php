<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'id'=> 1,	
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'username'=> 'admin',
        'isAdmin'=> 1,      	
        'password' => bcrypt('admin')
       ]);
    }
}
