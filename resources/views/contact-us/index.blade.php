@extends('layouts.dashboard')
@section('content-title')
    <h2>Contact us form  Management </h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            
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
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>            
          


        </tr>
        <form method="POST" name="delete-all" action="{{url('admin/multiple/contact-us/delete')}}" >
            {{-- @method('DELETE') --}}
            @csrf
         <button type="submit" for="delete-all" class="btn btn-danger">  <i class="fas fa-plus-circle">Delete </i> </button>

        @foreach ($msges as $msge)
            <tr>
                <td><input name='id[]' type="checkbox" class="delete-checkbox" value="{{ $msge->id }}"></td>
                <td>{{ $msge->id }}</td>
                <td>{{ $msge->name }}</td>
                <td>{{ $msge->email }}</td>
                <td>{{ $msge->message }}</td>             

                
                
                <td style="justify-content: space-evenly;display: flex;">  
                    <a class="btn btn-primary" href="{{ route('contact-us-management.show', $msge->id) }}" title="show">
                        Details
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</form>
<div class="d-flex justify-content-center"> {!! $msges->links() !!} </div>
    

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
