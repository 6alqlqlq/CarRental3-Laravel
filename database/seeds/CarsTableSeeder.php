<?php
use App\Cars;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cars::create([
		'Car_brand' => 'Range Rover',
		'model'=> 'Evoque',
		'image'	=> 'car2.jpg',
		'YearOfManufacturing' => '2011',			
		'capacity'=> '6',
		'doors'=> '4',
		'Engine'=> 'gasoline',
		'Gearbox'=> 'Automatic',
		'status' => 'Available',
		'hire_cost'	=> '33',
		]);
		
		Cars::create([
		'Car_brand' => 'Toyota',
		'model'=> 'supra',
		'image'	=> 'car3.jpg',	
		'YearOfManufacturing' => '2011',		
		'capacity'=> '6',
		'doors'=> '4',
		'Engine'=> 'gasoline',
		'Gearbox'=> 'Automatic',
		'status' => 'Available',
		'hire_cost'	=> '33',
		]);
		
		Cars::create([
		'Car_brand' => 'Toyota',
		'model'=> 'supra',
		'image'	=> 'car3.jpg',	
		'YearOfManufacturing' => '2011',			
		'capacity'=> '6',
		'doors'=> '4',
		'Engine'=> 'gasoline',
		'Gearbox'=> 'Automatic',
		'status' => 'Available',
		'hire_cost'	=> '33',
		]);
		
		Cars::create([
		'Car_brand' => 'Toyota',
		'model'=> 'supra',
		'image'	=> 'car3.jpg',	
		'YearOfManufacturing' => '2011'	,		
		'capacity'=> '6',
		'doors'=> '4',
		'Engine'=> 'gasoline',
		'Gearbox'=> 'Automatic',
		'status' => 'Available',
		'hire_cost'	=> '33',
		]);
		Cars::create([
		'Car_brand' => 'Toyota',
		'model'=> 'supra',
		'image'	=> 'car3.jpg',	
		'YearOfManufacturing' => '2011',		
		'capacity'=> '6',
		'doors'=> '4',
		'Engine'=> 'gasoline',
		'Gearbox'=> 'Automatic',
		'status' => 'Available',
		'hire_cost'	=> '33',
		]);
		Cars::create([
		'Car_brand' => 'Toyota',
		'model'=> 'supra',
		'image'	=> 'car3.jpg',	
		'YearOfManufacturing' => '2011'	,		
		'capacity'=> '6',
		'doors'=> '4',
		'Engine'=> 'gasoline',
		'Gearbox'=> 'Automatic',
		'status' => 'Available',
		'hire_cost'	=> '33',
		]);
    }
}
	 
	  
	  
