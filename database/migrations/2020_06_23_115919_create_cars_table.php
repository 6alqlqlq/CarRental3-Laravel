<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
			$table->string('brand');
			$table->string('model');
			$table->text('image');
			$table->integer('year');
			$table->integer('capacity');
			$table->integer('doors');
			$table->string('engine');
			$table->string('gearbox');
			$table->string('status');
			$table->integer('hire_cost');
            $table->timestamps();

        });

        DB::table('cars')->insert([
            [
                'id' => 1,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 2,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 3,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 4,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 5,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 6,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 7,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 8,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 9,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 10,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 11,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
