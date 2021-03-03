<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->insert([
            [
                'id' => 1,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 2,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 3,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 4,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 5,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 6,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 7,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 8,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 9,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 10,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 11,
                'user_id'=> 1,
                'car_id'=> 1,
                'from_date'=>  \Carbon\Carbon::now(),
                'to_date' =>  \Carbon\Carbon::now(),
               
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],

        ]);
    }
}
