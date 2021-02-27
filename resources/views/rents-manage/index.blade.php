@extends('layouts.dashboard')
@section('content-title')
    <h2>Rents Management </h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('rents-management.create') }}" style="float: right;"> <i class="fas fa-plus-circle">Create</i>
                    </a>
            </div>
            <div class="pull-right">                
               
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
            <td> <input type="checkbox" id="checkAll" onclick="toggle(this);" > </td>
            <td>#</td>
            <th>name</th>
            <th>email</th>
            <th>username</th>
            <th>role</th>


        </tr>
        <form method="POST" name="delete-all" action="{{url('multiple/rent/delete')}}" >
            {{-- @method('DELETE') --}}
            @csrf
         <button type="submit" for="delete-all" class="btn btn-danger">  <i class="fas fa-plus-circle">Delete </i> </button>

        @foreach ($users as $user)
            <tr>
                <td><input name='id[]' type="checkbox" class="delete-checkbox" value="{{ $user->id }}"></td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->role }}</td>


                <td>                 

                        <a class="btn btn-primary" href="{{ route('rents-management.show', $user->id) }}" title="show">
                           Details
                        </a>

                        <a class="btn btn-success" href="{{ route('rents-management.edit', $user->id) }}">
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
    <div class=" m-auto"> {!! $users->links() !!} </div>
    

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
