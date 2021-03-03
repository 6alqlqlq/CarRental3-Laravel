@extends('layouts.layout')

@section('Body')
<div class="container" style="margin-top: 6rem !important;     height: 816px;">
  <div class="row ">   
    
    <div class="col-md-8">
      <img class="img-fluid" src="{{ URL::asset("storage/$car->image") }}" alt="{{ $car->brand }} {{ $car->model }}">
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
        <div class="mr-auto p-2">Brand: </div>        
        <div class="p-2">{{ $car->capacity }}</div>
      </div>
      <div class="d-flex">
        <div class="mr-auto p-2">Brand: </div>        
        <div class="p-2">{{ $car->brand }}</div>
      </div>

      <div class="d-flex">
      <h3>Your information</h3>   <a  class="m-auto" > edit</a>
      </div>
      <div class="d-flex">
        <div class="mr-auto p-2">First name: </div>        
        <div class="p-2">{{ $user->first_name }}</div>
      </div>
      <div class="d-flex">
        <div class="mr-auto p-2">Last name: </div>        
        <div class="p-2">{{ $user->last_name }}</div>
      </div>
      <div class="d-flex">
        <div class="mr-auto p-2">Email: </div>        
        <div class="p-2">{{ $user->email }}</div>
      </div>
      <div class="d-flex">
        <div class="mr-auto p-2">Address: </div>        
        <div class="p-2">{{ $user->address }}</div>
      </div>

      <h3 class="my-3">Pick rent dates</h3>
      <form method="POST" action="{{ route('create-rent') }}" >
        @csrf
        <input type="hidden" name="car_id" value="{{$car->id}}">
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <div class="d-flex">
          <div class="mr-auto p-2">Rent From date </div>        
          <input class="" type="date" name="from_date" id="datepicker">
        </div>
        <div class="d-flex mt-4 mb-5">
          <div class="mr-auto p-2">Rent To date </div>        
          <input class="" type="date" name="to_date" id="datepicker">
        </div>
             
    </div>
    <button type="submit" class="btn btn-primary d-flex m-auto ">Rent now </button>
  </form>
  </div>   
        
     
</div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
@endsection