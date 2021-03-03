@extends('layouts.dashboard')
@section('content-title')
    <h2>Car Management </h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('cars-multi-delete') }}" > <i class="fas fa-plus-circle">Delete </i>
                </a>
            </div> --}}
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <form method="POST" name="delete-all" action="{{url('admin/multiple/cars/delete')}}" >
        {{-- @method('DELETE') --}}
        @csrf
        
    <button type="submit" for="delete-all" class="btn btn-danger">  <i class="fas fa-plus-circle">Delete </i> </button>
    <a class="btn btn-success" href="{{ route('cars-management.create') }}" style="float: right;"> <i class="fas fa-plus-circle">Create</i>
    </a>
      
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th> <input type="checkbox" id="checkAll" onclick="toggle(this);" > </th>
            <th>#</th>
            <th>image</th>
            <th>brand</th>
            <th>model</th>
            {{-- <th>image</th>
            <th>year</th>
            <th>capacity</th>
            <th>doors</th>
            <th>engine</th>
            <th>gearbox</th> --}}
            <th>status</th>
            <th>hire_cost</th>

        </tr>
        @foreach ($cars as $car)
            <tr>
                <td><input name='id[]' type="checkbox" class="delete-checkbox" value="{{ $car->id }}"></td>
                <td>{{ $car->id }}</td>
                <td style="    width: 40px;">
                <img src="{{ URL::asset("storage/$car->image") }}" alt="{{ $car->brand }} {{ $car->model }}" width="80" height="40" > 
                </td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                {{-- <td>{{ $car->image }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->capacity }}</td>
                <td>{{ $car->doors }}</td>
                <td>{{ $car->engine }}</td>
                <td>{{ $car->gearbox }}</td> --}}
                <td>{{ $car->status }}</td>
                <td>{{ $car->hire_cost }}</td>

                <td style="justify-content: space-evenly;display: flex;">
                  

                        <a class="btn btn-primary" href="{{ route('cars-management.show', $car) }}" title="show">
                           Details
                        </a>

                        <a class="btn btn-success" href="{{ route('cars-management.edit', $car) }}">
                           Edit
                        </a>
                        {{-- <form action="{{ route('cars-management.destroy', $car) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit" title="delete" >
                          Delete
                        </button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </table>
</form>
    <div class="d-flex justify-content-center"> {!! $cars->links() !!} </div>


    <script >    
        function toggle(source) {
        var checkboxes = document.querySelectorAll('.delete-checkbox');       
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source)
                checkboxes[i].checked = source.checked;
            }
        }
    </script>   
@endsection
