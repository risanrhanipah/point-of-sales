@extends('userss.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('userss.create') }}"> Create New User</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode User</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($userss as $userr)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $userr->kd_user }}</td>
            <td>{{ $userr->username }}</td>
            <td>{{ $userr->password }}</td>
            <td>{{ $userr->level }}</td>
            <td>
                <form action="{{ route('userss.destroy',$userr->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('userss.show',$userr->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('userss.edit',$userr->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $userss->links() !!}
      
@endsection