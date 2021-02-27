<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'admin',
                'last_name' => 'admin',                
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'role' => 1,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 2,
                'first_name' => 'admin',
                'last_name' => 'admin', 
                'name' => 'moderator',
                'email' => 'moderator@moderator.com',
                'username' => 'moderator',
                'password' => Hash::make('moderator'),
                'role' => 2,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 3,
                'first_name' => 'user',
                'last_name' => 'user',                 
                'email' => 'user@user.com',
                'username' => 'user',
                'password' => Hash::make('user'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 4,
                'first_name' => 'user2',
                'last_name' => 'user2',                 
                'email' => 'user2@user.com',
                'username' => 'user2',
                'password' => Hash::make('user2'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 5,
                'first_name' => 'user3',
                'last_name' => 'user3', 
                'email' => 'user3@user.com',
                'username' => 'user3',
                'password' => Hash::make('user3'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 6,
                'first_name' => 'user6',
                'last_name' => 'user6',
                'email' => 'user6@user.com',
                'username' => 'user6',
                'password' => Hash::make('user6'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 7,
                'first_name' => 'user7',
                'last_name' => 'user7',                 
                'email' => 'user7@user.com',
                'username' => 'user7',
                'password' => Hash::make('user7'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 8,
                'first_name' => 'user8',
                'last_name' => 'user8',
                'email' => 'user8@user.com',
                'username' => 'user8',
                'password' => Hash::make('user8'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 9,
                'first_name' => 'user9',
                'last_name' => 'user9', 
                'email' => 'user9@user.com',
                'username' => 'user9',
                'password' => Hash::make('user9'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 10,
                'first_name' => 'user10',
                'last_name' => 'user10',
                'email' => 'user10@user.com',
                'username' => 'user10',
                'password' => Hash::make('user10'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 11,
                'first_name' => 'user11',
                'last_name' => 'user11',                
                'email' => 'user11@user.com',
                'username' => 'user11',
                'password' => Hash::make('user11'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 12,
                'first_name' => 'user12',
                'last_name' => 'user12',               
                'email' => 'user12@user.com',
                'username' => 'user12',
                'password' => Hash::make('user12'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 13,
                'first_name' => 'user13',
                'last_name' => 'user13',                
                'email' => 'user13@user.com',
                'username' => 'user13',
                'password' => Hash::make('user13'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 14,
                'first_name' => 'user14',
                'last_name' => 'user14',
                'email' => 'user14@user.com',
                'username' => 'user14',
                'password' => Hash::make('user14'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 15,
                'first_name' => 'user15',
                'last_name' => 'user15',                 
                'email' => 'user15@user.com',
                'username' => 'user15',
                'password' => Hash::make('user15'),
                'role' => 3,
                'address' => ' district mladost',
                'city' => 'Sofia',
                'country' => 'Bulgaria',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],


        ]);
    }
}
