@extends('layouts.dashboard')
@section('content-title')
    <h2>Add car</h2>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users-management.index') }}" title="Go back"> Back </a>
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
    <form class="inline-form" action="{{ route('users-management.store') }}" method="POST" >
        @csrf

        <div class="row mt-5">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>First name:</strong>
                    <input type="text" name="first_name" class="form-control" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Last name:</strong>
                    <input type="text" name="last_name" class="form-control" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Country:</strong>
                    <input type="text" name="country" class="form-control" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="city" class="form-control" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" class="form-control" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Role:</strong> 
                    <select class="form-control" name="role" >
                      <option value="1">Admin</option>
                      <option value="2">Moderator</option>
                      <option value="3">User</option>                      
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" class="form-control" >
                </div>
            {{-- </div> --}}
            {{-- <div class="col-xs-6 col-sm-6 col-md-6"> --}}
                <div class="form-group">
                    <strong>Confirm password:</strong>
                    <input type="password" name="confirm-password" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
