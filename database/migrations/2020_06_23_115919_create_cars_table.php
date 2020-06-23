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
			$table->string('Car_brand');
			$table->string('model');
			$table->text('image');			
			$table->integer('YearOfManufacturing');				
			$table->integer('capacity');	
			$table->integer('doors');	
			$table->string('Engine');	
			$table->string('Gearbox');
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
