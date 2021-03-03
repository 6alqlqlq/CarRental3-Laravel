@extends('layouts.dashboard')

@section('content-title')
    <h2>Rent id: {{ $rent->id }} </h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb d-flex " style="justify-content: space-between;">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('rents-management.index') }}">Go Back</a>
            </div>
            <div class="pull-right">               
                <form action="{{ route('rents-management.destroy', $rent->id) }}" name="single-delete" method="POST">
                    @csrf
                   @method('DELETE') 
            
                   <button class="btn btn-danger" type="submit" title="delete" for="single-delete" >
                   Delete
                   </button> 
                </form> 
            </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-5">User names: </strong>
                {{ $rent->user->first_name }} {{ $rent->user->last_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-5">Car:</strong>
                <td>{{ $rent->car->brand }} {{ $rent->car->model }}</td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-5">Rent from date:</strong>
                {{ $rent->from_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-5">Rent to date:</strong>
                {{ $rent->to_date }}
            </div>
        </div>
    </div>    
    
@endsection
