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
