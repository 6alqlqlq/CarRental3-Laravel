@extends('layouts.dashboard')
@section('content-title')
    <h2>Edit rent {{ $rent->id }}</h2>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rents-management.index') }}" > Go Back </a>
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

    <form action="{{ route('rents-management.update',$rent->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row mt-5">            
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>User:</strong> 
                    <select class="form-control" name="user_id" >
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" >{{ $user->first_name }} {{ $user->last_name }} </option>
                         @endforeach                       
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Car:</strong> 
                    <select class="form-control" name="car_id" >
                        @foreach ($cars as $car)
                            <option value="{{ $car->id }}">{{ $car->brand }} {{ $car->model }} </option>
                         @endforeach                       
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Rent From date:</strong>                
                <input class="form-control " type="date" name="from_date" id="datepicker" value="{{ $rent->from_date }}">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <strong>Rent To date:</strong>   
                <input class="form-control" type="date" name="to_date" id="datepicker" value="{{ $rent->to_date }}">
              </div>
            
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
@endsection
