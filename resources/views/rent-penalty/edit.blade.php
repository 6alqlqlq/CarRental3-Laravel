@extends('layouts.dashboard')
@section('content-title')
    <h2>Edit penalty: {{ $penalty->id }} </h2>
@endsection
@section('content')   

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

    <form action="{{ route('rent-penalty.update',$penalty->id) }}" method="POST">
        @csrf
        @method('PUT')

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
                    <input class="form-control" type="date" name="from_date" id="datepicker" value="{{ $penalty->from_date }}" >
                </div>
                <div class="form-group">
                    <strong>Penalty date to:</strong>   
                    <input class="form-control" type="date" name="to_date" id="datepicker"value="{{ $penalty->to_date }}" >
                </div>
                <div class="form-group ">
                    <strong>Total: </strong>   
                    <input class="form-control" type="number" name="total"  value="{{ $penalty->total }}">
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
@endsection
