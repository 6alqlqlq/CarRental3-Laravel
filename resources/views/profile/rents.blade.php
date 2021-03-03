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
                      		<h4 class="mr-auto p-2 mb-0">My Rents</h4>                     
                    	</div>                  
		            </div>
                <hr>

				@foreach ($rents as $rent)

				<div class="row">
					<div class="col-md-12 ">                     
				  <div class="d-flex">
					<div class="mr-auto p-2">Car:</div>
					<div class="p-2">{{ $rent->car->brand }} {{ $rent->car->model }}</div>       
														
				  </div>
				  <div class="d-flex">
					<div class="mr-auto p-2">From Date:</div>
					<div class="p-2">{{ $rent->from_date }}</div>                                                                     
				  </div>
				 
				  <div class="d-flex">
					<div class="mr-auto p-2">To Date:</div>
					<div class="p-2">{{ $rent->to_date }}</div>                        
				  </div>
				  <hr>
				@endforeach 
		                </div>
		            </div>		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection