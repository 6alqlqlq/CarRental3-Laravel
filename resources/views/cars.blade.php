@extends('layouts.layout')

@section ('Body')
<!--filter section-->
<section class="sticky-top">
    <div class="container">
        <div class="row "style="margin-top: 120px;">
            <div class="col-md-12">
                <div class="bg-secondary">
                    <div class="card-body">
                        <div class="row">
                    	    <div class="col-md-3">
                    	        <form>
                    	        <div class="form-group">
                                  <select id="inputState" class="form-control">
                                    <option selected>... Select Make...</option>
                                    <option>BMW</option>
                                    <option>Audi</option>
                                    <option>Maruti</option>
                                    <option>Tesla</option>
                                  </select>
                                </div>
                    	    </form>
                    	    </div>
                    	    <div class="col-md-3">
                    	        <form>
                    	        <div class="form-group">
                                  <select id="inputState" class="form-control">
                                    <option selected>... Select Model...</option>
                                    <option>BMW</option>
                                    <option>Audi</option>
                                    <option>Maruti</option>
                                    <option>Tesla</option>
                                  </select>
                                </div>
                    	    </form>
                    	    </div>
                    	    <div class="col-md-3 ">
                    	        <form>
                    	        <div class="form-group">
                                  <select id="inputState" class="form-control">
                                    <option selected>... Select Version...</option>
                                    <option>BMW</option>
                                    <option>Audi</option>
                                    <option>Maruti</option>
                                    <option>Tesla</option>
                                  </select>
                                </div>
                    	    </form>
                    	    </div>
                    	    <div class="col-md-3">
                    	        <button type="button" class="btn btn-primary">Compare Now</button>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main content section-->
<section class="mb-5">
    <div class="container">
    <div class="row title py-3">
        <div class="col-md-12">
            <h5><strong>Filter Search Result</strong></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="row mb-3">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <strong><p>Engline</p></strong>
                          <ul class="list-unstyled">
                             <a href="#"> <li>Gasoline</li></a>
                             <a href="#"> <li>Disel </li></a>
                             <a href="#"> <li>Electric</li></a>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <strong><p>Capacity</p></strong>
                          <ul class="list-unstyled">
                             <a href="#"> <li>Something</li></a>
                             <a href="#"> <li>Something</li></a>
                             <a href="#"> <li>Something</li></a>
                             <a href="#"> <li>Something</li></a>
							 <a href="#"> <li>Something</li></a>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <strong><p>Doors</p></strong>
                          <ul class="list-unstyled">
                             <a href="#"> <li>2door</li></a>
                             <a href="#"> <li>4door</li></a>
                             <a href="#"> <li>6doors</li></a>
                             <a href="#"> <li>Limo</li></a>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <button type="button" class="btn btn-primary">Contat Now</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <button type="button" class="btn btn-primary">Contat Now</button>
                      </div>
                  </div>
              </div>
          </div>
        </div>
		<!---- Start of list x1----->
        <div class="col-md-9">

		@foreach ($cars as $cars)
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
							<div class="col-md-3">
                                  <a href="{{route('cars-show', $cars->id)}}"><img src="img/rentals/{{$cars ->image}}" style=" width: 180px; height: 140px;"></a>
                                </div>
                                <div class="col-md-7">
                                    <h5>Brand :{{$cars->Car_brand}}</h5>
									<h5>Model :{{$cars->model}}</h5>

									<p><small>Engine :{{$cars->Engine}}</small></p>
                                    <p><small>Gearbox :{{$cars->Gearbox}}</small></p>
									<p><small>Year :{{$cars->YearOfManufacturing}}</small></p>
									<p><small>Capacity :{{$cars->capacity}}</small></p>
									<p><small>Doors :{{$cars->doors}}</small></p>
									<p><small>Status :{{$cars->status}}</small></p>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary">Book now </button>
									<a href="{{route('cars-show', $cars->id)}}"><button type="button" class="btn btn-primary"style="margin-top: 10px;padding-right: 32px;">Details </button></a>
                                    <small>Published {{$cars->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div><!--- End Of List x1---->
    </div><!--- row for category - listing cars ----->
</div><!--- container---->
</section>


@endsection
