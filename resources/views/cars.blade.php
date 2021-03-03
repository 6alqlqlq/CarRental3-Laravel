@extends('layouts.layout')

@section ('Body')


{{-- <section class="sticky-top" style="top: 55px;"> --}}
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
                                {{-- <select  id="select-action" onchange="window.location.replace(document.querySelector('#select-action').value)" > --}}
                                <div class="col-md-12 ">
                                    <p class="text-center text-white"> Order by<p>
                                    <div class="form-row">
                                        <div class="form-group col-md-2 mr-5"> 
                                            <label for="inputEmail4">Engine Type</label>                               
                                            <select class="form-control form-control-sm" onchange="location = this.value;">
                                                <option value="?sortBy=electric" {{ (request('sortBy') == 'electric' ? 'selected=selected' : '') }}>Electric </option>
                                                <option value="?sortBy=gasoline" {{ (request('sortBy') == 'gasoline' ? 'selected=selected' : '') }}>Gasoline </option>
                                                <option value="?sortBy=diesel" {{ (request('sortBy') == 'diesel' ? 'selected=selected' : '') }}>Diesel </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2 mr-5"> 
                                            <label for="inputEmail4">Gearbox Type</label>                               
                                            <select class="form-control form-control-sm" onchange="location = this.value;">
                                                <option value="?gearbox=manual" {{ (request('gearbox') == 'manual' ? 'selected=selected' : '') }}>Manual </option>
                                                <option value="?gearbox=automatic" {{ (request('gearbox') == 'automatic' ? 'selected=selected' : '') }}>Automatic </option>                                        
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2 mr-5"> 
                                            <label for="inputEmail4">Year Type</label>                               
                                            <select class="form-control form-control-sm" onchange="location = this.value;">
                                                <option value="?year=desc" {{ (request('year') == 'desc' ? 'selected=selected' : '') }}>Low to high </option>
                                                <option value="?year=asc" {{ (request('year') == 'asc' ? 'selected=selected' : '') }}>high to low </option>                                          
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2 mr-4"> 
                                            <label for="inputEmail4">Capacity</label>                               
                                            <select class="form-control form-control-sm" onchange="location = this.value;">
                                                <option value="?capacity=desc" {{ (request('capacity') == 'desc' ? 'selected=selected' : '') }}>Low to high </option>
                                                <option value="?capacity=asc" {{ (request('capacity') == 'asc' ? 'selected=selected' : '') }}>high to low </option>                                          
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2 "> 
                                            <label for="inputEmail4">Doors</label>                               
                                            <select class="form-control form-control-sm" onchange="location = this.value;">
                                                <option value="?doors=desc" {{ (request('doors') == 'desc' ? 'selected=selected' : '') }}>Low to high </option>
                                                <option value="?doors=asc" {{ (request('doors') == 'asc' ? 'selected=selected' : '') }}>high to low </option>                                          
                                            </select>
                                        </div>
                                    </div>
                                </div>

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
                                    <a href="{{route('cars-show', $car->id)}}">
                                        <img src="{{ URL::asset("storage/$car->image") }}" style=" width: 180px; height: 140px;">
                                    </a>
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Brand :{{$car->brand}}</h5>
                                        <h5>Model :{{$car->model}}</h5>

                                        <p><small>Engine :{{$car->engine}}</small></p>
                                        <p><small>Gearbox :{{$car->gearbox}}</small></p>
                                        <p><small>Year :{{$car->year}}</small></p>
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
            <div class="m-auto"> {{ $cars->links() }} </div>                    
        </div>
       
    </div>
</section>


@endsection
