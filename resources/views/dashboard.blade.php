<style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
@extends('layouts.dashboard')

@section('content-title')
    <h2>Home </h2>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6 col-xl-6 text-center  ">
        <a class="nav-link " href="{{ route('users-management.index') }}">            
        <div class="card border-0 rounded shadow p-5" style="background-color: #f8fafc;">
            <span class=" f-w-600">Users</span>
            <h4> {{ \App\User::count() }}</h4>
            <div>
                <span class="f-left m-t-10 text-muted   text-center">
                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Last registered user : 
                    {{ \App\User::orderBy('created_at','DESC')->first()->first_name }} {{ \App\User::orderBy('created_at','DESC')->first()->last_name }}
                </span>
            </div>  
              
        </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-6 text-center">
        <a class="nav-link" href="{{ route('cars-management.index') }}">
            <div class="card border-0 rounded shadow p-5" style="background-color: #f8fafc;">
            <span class=" f-w-600">Cars</span>
            <h4> {{ \App\Cars::count() }}</h4>
            <div>
                <span class="f-left m-t-10 text-muted">
                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Last added car : {{ \App\Cars::orderBy('created_at','DESC')->first()->brand }}
                </span>
            </div>         
        </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-xl-6 text-center">
        <a class="nav-link" href="{{ route('rents-management.index') }}">
            <div class="card border-0 rounded shadow p-5" style="background-color: #f8fafc;">
            <span class=" f-w-600">Rents</span>
            <h4> {{ \App\Rent::count() }}</h4>
            <div>
                <span class="f-left m-t-10 text-muted">
                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>
                    Last rented car :
                     {{ \App\Rent::orderBy('created_at','DESC')->first()->car->brand }} {{ \App\Rent::orderBy('created_at','DESC')->first()->car->model }}
                </span>
            </div>         
        </div>
        </a>
    </div>


    <div class="col-md-12 col-xl-6 text-center">
        <a class="nav-link" href="{{ route('rent-penalty.index') }}">
            <div class="card border-0 rounded shadow p-5" style="background-color: #f8fafc;">
            <span class=" f-w-600">Pentalties</span>
            <h4> {{ \App\Penalty::count() }}</h4>
            <div>
                <span class="f-left m-t-10 text-muted">
                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Last added Penalty :
                    @if (\App\Penalty::first() === null) 
                     none
                    @else 
                    {{ \App\Penalty::orderBy('created_at','DESC')->first()->total }} $
                    @endif
                </span>
            </div>         
        </div>
        </a>
    </div>

    <div class="col-md-12 col-xl-12 text-center">
        <a class="nav-link" href="{{ route('users-management.index') }}">
            <div class="card border-0 rounded shadow p-5" style="background-color: #f8fafc;">
            <span class=" f-w-600">Contact us messages</span>
            <h4> {{ \App\ContactUS::count() }}</h4>
            <div>
                <span class="f-left m-t-10 text-muted">
                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Last user message : {{ \App\ContactUS::orderBy('created_at','DESC')->first()->name }}
                </span>
            </div>         
        </div>
        </a>
    </div>
</div>

@endsection
