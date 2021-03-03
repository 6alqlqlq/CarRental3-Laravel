@extends('layouts.dashboard')
@section('content-title')
    <h2>Form posted from: {{ $msge->name }} </h2>
@endsection

@section('content')
    <div class="row ">
        <div class="col-lg-12 margin-tb d-flex " style="justify-content: space-between;">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('contact-us-management.index') }}">Go Back</a>
            </div>
            <div class="pull-right">
                <form action="{{ route('contact-us-management.destroy', $msge->id) }}" name="single-delete" method="POST">
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
            <strong>Name</strong>
            {{ $msge->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $msge->Email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Subject:</strong>
            {{ $msge->subject }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Message:</strong>
            {{ $msge->message }}
        </div>
    </div>
    
</div>
    
    
   
@endsection
