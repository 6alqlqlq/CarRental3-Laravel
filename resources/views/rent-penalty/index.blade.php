@extends('layouts.dashboard')
@section('content-title')
    <h2>Penalty Management </h2>
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
            <th>Rent id</th>
            <th>From date</th>
            <th>To Date</th>
            <th>Total</th>           

        </tr>
        <form method="POST" name="delete-all" action="{{url('multiple/rent-peanlty/delete')}}" >
            {{-- @method('DELETE') --}}
            @csrf
         <button type="submit" for="delete-all" class="btn btn-danger">  <i class="fas fa-plus-circle">Delete </i> </button>
         <a class="btn btn-success" href="{{ route('rent-penalty.create') }}" style="float: right;"> <i class="fas fa-plus-circle">Create</i>
         </a>
        @foreach ($penaltys as $penalty)
            <tr>
                <td><input name='id[]' type="checkbox" class="delete-checkbox" value="{{ $penalty->id }}"></td>
                <td>{{ $penalty->id }}</td>
                <td>{{ $penalty->rent_id }}</td>
                <td>{{ $penalty->from_date }}</td>
                <td>{{ $penalty->to_date }}</td>
                <td>{{ $penalty->total }}</td>             
                <td>                 

                        <a class="btn btn-primary" href="{{ route('rent-penalty.show', $penalty->id) }}" title="show">
                           Details
                        </a>

                        <a class="btn btn-success" href="{{ route('rent-penalty.edit', $penalty->id) }}">
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
    {{-- <div class=" m-auto"> {!! $penalty->links() !!} </div> --}}
    

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
