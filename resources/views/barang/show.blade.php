<!DOCTYPE html>
    <html lang="en">
        <link rel="stylesheet" type="text/css" href="{!! asset('../assets/css/login.css') !!}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
        <title>@yield('title')</title>
            <link rel="stylesheet" type="text/css" href="./css/menu.css" />
        <title>barang</title>
  </head>
<style>
    html, body {
    position: relative;
    /* text-align: center; */
    /* display: flex; */
    justify-content: center;
    align-items: center; 
    /* min-height: 100%; */
    background:url(../assets/css/dist.png) no-repeat;
    background-size: 100%;
}
</style>

@extends('barang.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2> Show Barang</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a></br>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Barang :</strong>
                {{ $barang->kd_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                {{ $barang->nama_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Merek :</strong>
                {{ $barang->kd_merek }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Distributor :</strong>
                {{ $barang->kd_distributor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Masuk :</strong>
                {{ $barang->tanggal_masuk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Barang :</strong>
                {{ $barang->harga_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok Barang :</strong>
                {{ $barang->stok_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                {{ $barang->keterangan }}
            </div>
        </div>
    </table>
    </div>
@endsection