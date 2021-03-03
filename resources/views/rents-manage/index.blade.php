@extends('layouts.dashboard')
@section('content-title')
    <h2>Rents Management </h2>
@endsection

@section('content') 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <td> <input type="checkbox" id="checkAll" onclick="toggle(this);" > </td>
            <td>#</td>
            <th>User name</th>
            <th>Car </th>
            <th>From date</th>
            <th>To Date</th>


        </tr>
        <form method="POST" name="delete-all" action="{{url('multiple/rent/delete')}}" >
            {{-- @method('DELETE') --}}
            @csrf
            <button type="submit" for="delete-all" class="btn btn-danger">  <i class="fas fa-plus-circle">Delete </i> </button>
            <a class="btn btn-success" href="{{ route('rents-management.create') }}" style="float: right;"> <i class="fas fa-plus-circle">Create</i>
            </a>
        @foreach ($rents as $rent)
            <tr>
               
                <td><input name='id[]' type="checkbox" class="delete-checkbox" value="{{ $rent->id }}"></td>
                <td>{{ $rent->id }}</td>
                <td> {{ $rent->user->first_name }} {{ $rent->user->last_name }}</td>
                <td>{{ $rent->car->brand }} {{ $rent->car->model }}</td>
                <td>{{ $rent->from_date }}</td>
                <td>{{ $rent->to_date }}</td>


                <td>                 

                        <a class="btn btn-primary" href="{{ route('rents-management.show', $rent->id) }}" title="show">
                           Details
                        </a>

                        <a class="btn btn-success" href="{{ route('rents-management.edit', $rent->id) }}">
                           Edit
                        </a>


                        {{-- <form action="{{ route('users-management.destroy', $user->id) }}" name="single-delete" method="POST">
                             @csrf
                            @method('DELETE') 
                    
                            <button class="btn btn-danger" type="submit" title="delete" for="single-delete" >
                            Delete
                            </button> --}}
                    </form> 
                </td>
            </tr>
        @endforeach
    </table>
</form>
<div class="d-flex justify-content-center">{!! $rents->links() !!} </div>
    

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
