@extends('layouts.layout')
@section ('Body')

<div class="container" style="margin-top: 150px !important;    ">
<div class="row ">   
    
    <div class="col-md-8">
      <img class="img-fluid" src="{{ $cars->image }}" alt="{{ $cars->brand }} {{ $cars->model }}">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Car information</h3>      
      <div class="d-flex">
        <div class="mr-auto p-2">Brand: </div>        
        <div class="p-2">{{ $cars->brand }}</div>
      </div>
      <div class="d-flex">
        <div class="mr-auto p-2">Model: </div>        
        <div class="p-2">{{ $cars->model }}</div>
      </div>
      <div class="d-flex">
        <div class="mr-auto p-2">Brand: </div>        
        <div class="p-2">{{ $cars->capacity }}</div>
      </div>
      <div class="d-flex">
        <div class="mr-auto p-2">Engine: </div>        
        <div class="p-2">{{ $cars->engine }}</div>
      </div> 
      <div class="d-flex">
        <div class="mr-auto p-2">Gearbox: </div>        
        <div class="p-2">{{ $cars->gearbox }}</div>
      </div> 
      <div class="d-flex">
        <div class="mr-auto p-2">Year : </div>        
        <div class="p-2">{{ $cars->year }}</div>
      </div> 
      <div class="d-flex">
        <div class="mr-auto p-2">Doors : </div>        
        <div class="p-2">{{ $cars->doors }}</div>
      </div>

      <div class="d-flex mt-5 mb-5">
        <div class="mr-auto p-2">Rent per day  : </div>        
        <div class="p-2">{{ $cars->hire_cost }}</div>
      </div>     
    </div>
    <a class="btn btn-primary d-flex m-auto" href="{{ route('rent',$cars->id) }}">Rent now </a>
  </div>
</div>




@endsection      