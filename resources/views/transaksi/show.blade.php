@extends('transaksi.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2> Show Transaksi</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a></br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Transaksi :</strong>
                {{ $transaksi->kd_transaksi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Barang :</strong>
                {{ $transaksi->kd_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode User :</strong>
                {{ $transaksi->kd_user }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Beli :</strong>
                {{ $transaksi->jumlah_beli }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Harga :</strong>
                {{ $transaksi->total_harga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Beli :</strong>
                {{ $transaksi->tanggal_beli }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Distributor :</strong>
                {{ $transaksi->kd_distributor }}
            </div>
        </div>
    </div>
@endsection