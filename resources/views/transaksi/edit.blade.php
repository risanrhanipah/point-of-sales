@extends('transaksi.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2>Edit Jumlah beli</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a></br>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('transaksis.update',$transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Beli :</strong>
                <input type="number" name="jumlah_beli" class="form-control" placeholder="Jumlah Beli" value="{{$transaksi->jumlah_beli}}">
                <input type="hidden" name="kd_barang" value="{{$transaksi->kd_barang}}">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection