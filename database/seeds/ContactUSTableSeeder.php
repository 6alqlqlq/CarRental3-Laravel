<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUSTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_us')->insert([
            [
                'id' => 1,
                'name' => 'Ivan',
                'email' => 'test@test.com ',
                'subject' => 'test',
                'message' => 'test',
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 2,
                'name' => 'Ivan',
                'email' => 'test@test.com ',
                'subject' => 'test',
                'message' => 'test',
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 3,
                'name' => 'Ivan',
                'email' => 'test@test.com ',
                'subject' => 'test',
                'message' => 'test',
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 4,
                'name' => 'Ivan',
                'email' => 'test@test.com ',
                'subject' => 'test',
                'message' => 'test',
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 5,
                'name' => 'Ivan',
                'email' => 'test@test.com ',
                'subject' => 'test',
                'message' => 'test',
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 6,
                'name' => 'Ivan',
                'email' => 'test@test.com ',
                'subject' => 'test',
                'message' => 'test',
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
        ]);
    }
}
