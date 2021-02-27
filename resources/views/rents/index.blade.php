@extends('layouts.layout')

@section('Body')
<div class="container" style="margin-top: 6rem !important;     height: 816px;">
<div class="row ">   
    
    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Car information</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3">Pick rent dates</h3>
      <ul>
        <p>From date</p>
        <input type="date" id="datepicker">
        <p class="mt-3">To date</p>
        <input type="date" id="datepicker">

      </ul>
    </div>

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