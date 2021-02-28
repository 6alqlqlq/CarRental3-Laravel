@extends('layouts.layout')

@section ('Body')


<section class="sticky-top" style="top: 55px;">
    <div class="container">
        <div class="row "style="margin-top: 71px;">
            <div class="col-md-12">
                <div class="bg-secondary">
                    <div class="card-body">
                        <div class="row">                    	    
                    	    
                            <div class="col-md-12">
                                <form class="">
                                    <div class="card-body row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-search h4 text-body"></i>
                                        </div>                                        
                                        <div class="col">
                                            <input class="form-control form-control form-control-borderless" type="search" placeholder="Car">
                                        </div>                                        
                                        <div class="col-auto">
                                            <button class="btn btn btn-primary " type="submit">Search</button>
                                        </div>                                       
                                    </div>
                                </form>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">  
        <div class="row">
            <div class="col-md-12">
                
            @foreach ($cars as $car)
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-3">
                                    <a href="{{route('cars-show', $car->id)}}"><img src="img/rentals/{{$car ->image}}" style=" width: 180px; height: 140px;"></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Brand :{{$car->Car_brand}}</h5>
                                        <h5>Model :{{$car->model}}</h5>

                                        <p><small>Engine :{{$car->Engine}}</small></p>
                                        <p><small>Gearbox :{{$car->Gearbox}}</small></p>
                                        <p><small>Year :{{$car->YearOfManufacturing}}</small></p>
                                        <p><small>Capacity :{{$car->capacity}}</small></p>
                                        <p><small>Doors :{{$car->doors}}</small></p>
                                        <p><small>Status :{{$car->status}}</small></p>
                                    </div>
                                    <div class="col-md-2 flex-direction-column">
                                        <small class=" d-flex mt-2">Published {{$car->created_at}}</small>
                                        
                                        <a href="{{route('cars-show', $car->id)}}"><button type="button" class="btn btn-primary"style="margin-top: 10px;padding-right: 32px;">Details </button></a>

                                        <a class="btn btn-primary" style="margin-top: 150px" href="{{ route('rent',$car->id) }}">Book now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach            
            </div>            
        </div>
        <div class=" m-auto"> {{ $cars->links() }} </div>        
    </div>
</section>


@endsection
