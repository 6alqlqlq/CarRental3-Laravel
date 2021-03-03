@extends('layouts.dashboard')
@section('content-title')
    <h2>User: {{ $user->first_name }} {{ $user->last_name }} </h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb d-flex " style="justify-content: space-between;">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('users-management.index') }}">Go Back</a>
            </div>
            <div class="pull-right">
               
                <form action="{{ route('users-management.destroy', $user->id) }}" name="single-delete" method="POST">
                    @csrf
                   @method('DELETE') 
            
                   <button class="btn btn-danger" type="submit" title="delete" for="single-delete" >
                   Delete
                   </button> 
                </form> 
            </div>
            
        </div>
    </div>

    <div class="row text-center mt-5">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First name:</strong>
            {{ $user->first_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last name:</strong>
            {{ $user->last_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>role:</strong>
            {{ $user->role }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address:</strong>
            {{ $user->address }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Coutry:</strong>
            {{ $user->country }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>City:</strong>
            {{ $user->city }}
        </div>
    </div>    
</div>    
    
   
@endsection
