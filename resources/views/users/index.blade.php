@extends('layouts.dashboard')
@section('content-title')
    <h2>Users Management </h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               
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
            <th>First name</th>
            <th>Last name</th>
            <th>email</th>            
            <th>role</th>


        </tr>
        <form method="POST" name="delete-all" action="{{url('admin/multiple/users/delete')}}" >
            {{-- @method('DELETE') --}}
            @csrf
         <button type="submit" for="delete-all" class="btn btn-danger">  <i class="fas fa-plus-circle">Delete </i> </button>
         <a class="btn btn-success" href="{{ route('users-management.create') }}" style="float: right;"> <i class="fas fa-plus-circle">Create</i>
         </a>
        @foreach ($users as $user)
            <tr>
                <td><input name='id[]' type="checkbox" class="delete-checkbox" value="{{ $user->id }}"></td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>             

                {{-- <td>{{ $user->username }}</td> --}}
                @if ($user->role == 1)
                <td>Admin</td>
                @elseif ($user->role ==2)
                <td>Manager</td>
                @else
                <td>User</td>
                @endif
                
                <td style="justify-content: space-evenly;display: flex;" >  
                    <a class="btn btn-primary" href="{{ route('users-management.show', $user->id) }}" title="show">
                        Details
                    </a>

                    <a class="btn btn-success" href="{{ route('users-management.edit', $user->id) }}">
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
<div class="d-flex justify-content-center"> {!! $users->links() !!} </div>
    

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
