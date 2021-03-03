@extends('layouts.dashboard')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>  </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cars-management.index') }}">Go Back</a>
        </div>
    </div>
</div>
<div class="container" >
    <div class="row ">           
        <div class="col-md-8">
          <img class="img-fluid mb-5 mt-5"src="{{ URL::asset("storage/$car->image") }}" alt="{{ $car->brand }} {{ $car->model }}">
        </div>
    
        <div class="col-md-4">
          <h3 class="my-3">Car information</h3>      
          <div class="d-flex">
            <div class="mr-auto p-2">Brand: </div>        
            <div class="p-2">{{ $car->brand }}</div>
          </div>
          <div class="d-flex">
            <div class="mr-auto p-2">Model: </div>        
            <div class="p-2">{{ $car->model }}</div>
          </div>
          <div class="d-flex">
            <div class="mr-auto p-2">Capacity: </div>        
            <div class="p-2">{{ $car->capacity }}</div>
          </div>
          <div class="d-flex">
            <div class="mr-auto p-2">Engine: </div>        
            <div class="p-2">{{ $car->engine }}</div>
          </div> 
          <div class="d-flex">
            <div class="mr-auto p-2">Gearbox: </div>        
            <div class="p-2">{{ $car->gearbox }}</div>
          </div> 
          <div class="d-flex">
            <div class="mr-auto p-2">Year : </div>        
            <div class="p-2">{{ $car->year }}</div>
          </div> 
          <div class="d-flex">
            <div class="mr-auto p-2">Doors : </div>        
            <div class="p-2">{{ $car->doors }}</div>
          </div>
          <div class="d-flex">
            <div class="mr-auto p-2">Status : </div>        
            <div class="p-2">{{ $car->Status }}</div>
          </div>
    
          <div class="d-flex mt-5 mb-5">
            <div class="mr-auto p-2">Rent per day  : </div>        
            <div class="p-2">{{ $car->hire_cost }}</div>
          </div>     
        </div>
       
      </div>            
    </div>
@endsection
