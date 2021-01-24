@extends('layouts.dashboard')
@section('content-title')
    <h2>Car Management </h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cars-management.create') }}" title="Create a product"> <i class="fas fa-plus-circle">Create</i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <td>#</td>
            <th>brand</th>
            <th>model</th>
            <th>image</th>
            <th>year</th>
            <th>capacity</th>
            <th>doors</th>
            <th>engine</th>
            <th>gearbox</th>
            <th>status</th>
            <th>hire_cost</th>

        </tr>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->image }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->capacity }}</td>
                <td>{{ $car->doors }}</td>
                <td>{{ $car->engine }}</td>
                <td>{{ $car->gearbox }}</td>
                <td>{{ $car->status }}</td>
                <td>{{ $car->hire_cost }}</td>

                <td>
                    <form action="{{ route('cars-management.destroy', $car) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('cars-management.show', $car) }}" title="show">
                           Details
                        </a>

                        <a class="btn btn-success" href="{{ route('cars-management.edit', $car) }}">
                           Edit
                        </a>

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit" title="delete" >
                          Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class=" m-auto"> {!! $cars->links() !!} </div>

@endsection
