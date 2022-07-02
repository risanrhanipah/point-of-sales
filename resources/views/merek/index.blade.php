@extends('merek.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2>MEREK</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-success" href="{{ route('mereks.create') }}"> Create New Merek</a></br>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table id="table-data" class="table table-striped table-bordered" style="width:100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Merek</th>
            <th>Merek</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
        @foreach ($mereks as $merek)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $merek->kd_merek }}</td>
            <td>{{ $merek->merek }}</td>
            <td>
                <form action="{{ route('mereks.destroy',$merek->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('mereks.show',$merek->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('mereks.edit',$merek->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-left">
        <a class="btn btn-dark" href="{{ route('home') }}"> Back</a>
    </div>
  
    {!! $mereks->links() !!}
      
@endsection