@extends('barang.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2>Edit Barang</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a></br>
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
  
    <form action="{{ route('barangs.update',$barang->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Barang :</strong>
                    <input type="text" name="kd_barang" value="{{ $barang->kd_barang }}" class="form-control" placeholder="Kode Barang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang :</strong>
                    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" placeholder="Nama Barang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal Masuk :</strong>
                <input type="datetime-local" name="tanggal_masuk" class="form-control" value="{{ $barang->tanggal_masuk }}" placeholder="Tanggal Masuk">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Merek :</strong>
                    <input type="text" name="kd_merek" value="{{ $barang->kd_merek }}" class="form-control" placeholder="Kode Merek">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Distributor :</strong>
                    <input type="text" name="kd_distributor" value="{{ $barang->kd_distributor }}" class="form-control" placeholder="Kode Distributor">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Masuk :</strong>
                    <input type="date" name="tanggal_masuk" value="{{ $barang->tanggal_masuk }}" class="form-control" placeholder="Tanggal Masuk">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Beli :</strong>
                    <input type="number" name="harga_barang" value="{{ $barang->harga_barang }}" class="form-control" placeholder="Harga Beli">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Jual :</strong>
                    <input type="number" name="harga_jual" value="{{ $barang->harga_jual }}" class="form-control" placeholder="Harga Jual">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stok Barang</strong>
                    <input type="number" name="stok_barang" value="{{ $barang->stok_barang }}" class="form-control" placeholder="Stok Barang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan</strong>
                    <input type="text" name="keterangan" value="{{ $barang->keterangan }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection