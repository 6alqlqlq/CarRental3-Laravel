@extends('layouts.dashboard')
@section('content-title')
    <h2>Create Penalty</h2>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rent-penalty.index') }}" title="Go back"> Back </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="inline-form" action="{{ route('rent-penalty.store') }}" method="POST" >
        @csrf
        <div class="row mt-5">            
            <div class="col-xs-6 col-sm-6 col-md-6">               
                <div class="form-group">
                    <strong>Rent:</strong> 
                    <select class="form-control" name="rent_id" >
                        @foreach ($rents as $rent)
                            <option value="{{ $rent->id }}">{{ $rent->user->first_name }} {{ $rent->user->last_name }}, {{$rent->car->brand }} {{$rent->car->model }} </option>
                         @endforeach                       
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">  
                <div class="form-group">
                    <strong>Penalty date from:</strong>                
                    <input class="form-control" type="date" name="from_date" id="datepicker" >
                </div>
                <div class="form-group">
                    <strong>Penalty date to:</strong>   
                    <input class="form-control" type="date" name="to_date" id="datepicker" >
                </div>
                <div class="form-group ">
                    <strong>Total: </strong>   
                    <input class="form-control" type="number" name="total"  >
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    
  <script>
      $(function() {
          $( "#datepicker" ).datepicker();
      });
  </script>
@endsection
