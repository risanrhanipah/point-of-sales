@extends('transaksi.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br><h2>Add New Transaksi</h2></br>
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
   
<form action="{{ route('transaksis.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Barang :</strong>
                <select class="form-control" name="kd_barang" value='Nama Barang' id="nama_barang">
                    <option value disable>Nama Barang :</option>
                    @foreach($barang as $id => $barang)
                    <option value="{{ $barang->kd_barang }}" data-harga="{{$barang->harga_barang}}" data-stok="{{$barang->stok_barang}}">{{ $barang->nama_barang }} - {{ $barang->harga_barang }}</option>
                    @endforeach
                </select>
            </div>
        </div>
                <input type="hidden" value="{{ $user }}" name="kd_user" class="form-control" readonly>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Beli :</strong>
                <input type="number" name="jumlah_beli" class="form-control" placeholder="Jumlah Beli">
                <input type="hidden" name="kd_detail" value="{{$detail->id}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection