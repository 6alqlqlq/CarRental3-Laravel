@extends('layouts.layout')
@section ('Body')

 <div class="card" style="width: 18rem;top: 150px;">
  <img class="card-img-top" src="{{ asset("img/rentals/$cars->image")}}" >  
  <div class="card-body">
     <h5>Brand :{{$cars->Car_brand}}</h5>
	<h5>Model :{{$cars->model}}</h5>
									
	<p><small>Engine :{{$cars->Engine}}</small></p>                                    
    <p><small>Gearbox :{{$cars->Gearbox}}</small></p>
	<p><small>Year :{{$cars->YearOfManufacturing}}</small></p>
	<p><small>Capacity :{{$cars->capacity}}</small></p>
	<p><small>Doors :{{$cars->doors}}</small></p>
	<p><small>Status :{{$cars->status}}</small></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection      