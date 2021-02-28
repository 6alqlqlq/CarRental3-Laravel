@extends('layouts.layout')

@section('Body')
<div class="container" style="margin-top: 120px">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="{{ route('profile') }}" class="list-group-item list-group-item-action ">Profile</a>
              <a href="{{ route('my-rents') }}" class="list-group-item list-group-item-action active">My Rents</a>                          
              <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12 d-flex">
                      <h4 class="mr-auto p-2 mb-0">Your Profile</h4>                     
                    </div>
                  
		            </div>
                <hr>
		            <div class="row">
		                <div class="col-md-12 ">                     
                      <div class="d-flex">
                        <div class="mr-auto p-2">First name</div>
                        <div class="p-2"></div>
                      </div>
                      
                      

                     
		                </div>
		            </div>		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection