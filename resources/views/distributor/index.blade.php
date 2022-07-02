@extends('distributor.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2>DISTRIBUTOR</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-success" href="{{ route('distributors.create') }}"> Create New Distributor</a></br>
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
            <th>Kode Distributor</th>
            <th>Nama Distributor</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
        @foreach ($distributors as $distributor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $distributor->kd_distributor }}</td>
            <td>{{ $distributor->nama_distributor }}</td>
            <td>{{ $distributor->alamat }}</td>
            <td>{{ $distributor->no_telp }}</td>
            <td>
                <form action="{{ route('distributors.destroy',$distributor->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('distributors.show',$distributor->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('distributors.edit',$distributor->id) }}">Edit</a>
   
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
  
    {!! $distributors->links() !!}
      
@endsection