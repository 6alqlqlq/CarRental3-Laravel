@extends('layouts.dashboard')
@section('content-title')
    <h2>User: {{ $user->name }} </h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users-management.index') }}">Go Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
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
                <strong>Username:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>role:</strong>
                {{ $user->role }}
            </div>
        </div>
    </div>
    
    <form action="{{ route('users-management.destroy', $user->id) }}" name="single-delete" method="POST">
        @csrf
       @method('DELETE') 

       <button class="btn btn-danger" type="submit" title="delete" for="single-delete" >
       Delete
       </button> 
    </form> 
@endsection
