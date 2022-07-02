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
    background-size: 100%;
}
</style>

@extends('barang.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br><h2>Add New Barang</h2></br>
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
   
<form action="{{ route('barangs.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Barang :</strong>
                <input type="text" name="kd_barang" class="form-control" placeholder="Kode Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Merek :</strong>
                <select class="form-control" name="kd_merek" value='Nama Merek' id="kd_merek">
                    <option value disable>Nama Merek</option>
                    @foreach($merek as $id => $merek)
                    <option value="{{ $merek->kd_merek }}">{{ $merek->merek }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Distributor :</strong>
                <select class="form-control" name="kd_distributor" value='Nama Distributor' id="kd_distributor">
                    <option value disable>Nama Distributor</option>
                    @foreach($distributor as $id => $distributor)
                    <option value="{{ $distributor->kd_distributor }}">{{ $distributor->nama_distributor }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal Masuk :</strong>
                <input type="datetime-local" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Beli</strong>
                <input type="number" name="harga_barang" class="form-control" placeholder="Harga Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Jual</strong>
                <input type="number" name="harga_jual" class="form-control" placeholder="Harga Jual">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok Barang</strong>
                <input type="number" name="stok_barang" class="form-control" placeholder="Stok Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>  
</form>
@endsection