@extends('layouts.dashboard')
@section('content-title')
    <h2>Edit user: {{ $user->first_name }} {{ $user->last_name }} </h2>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('users-management.index') }}" > Go Back </a>
            </div>
            <div class="pull-right">
                
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

    <form action="{{ route('users-management.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row mt-5">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>First name:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $user->first_name }}" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Last name:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $user->last_name }}" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" class="form-control" value="{{ $user->address }}"  >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Country:</strong>
                    <input type="text" name="country" class="form-control" value="{{ $user->country }}"  >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="city" class="form-control" value="{{ $user->city }}"  >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Role:</strong>
                    <select type="text" name="role" class="form-control" value="{{ $user->role }}" >
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                        <option value="3">User</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" class="form-control" value="{{ $user->password }}" >
                </div>
            {{-- </div> --}}
            {{-- <div class="col-xs-6 col-sm-6 col-md-6"> --}}
                <div class="form-group">
                    <strong>Confirm password:</strong>
                    <input type="password" name="confirm-password" class="form-control"  >
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
