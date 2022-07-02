@extends('distributor.layout')
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="{!! asset('../assets/css/login.css') !!}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="./css/menu.css" />
    <title>distributor</title>
</head>
<style>
html,
body {
    position: relative;
    /* text-align: center; */
    /* display: flex; */
    justify-content: center;
    align-items: center;
    /* min-height: 100%; */
    background: url(../assets/css/dist.png) no-repeat;
    background-size: 100%;
}
</style>

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Edit Distributor</h2></br>
        </div>
        <div class="pull-right">
            <br> <a class="btn btn-primary" href="{{ route('distributors.index') }}"> Back</a></br>
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

<form action="{{ route('distributors.update',$distributor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Kode Distributor :</strong>
                <input type="text" name="kd_distributor" value="{{ $distributor->kd_distributor }}" class="form-control"
                    placeholder="Kode Distributor" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nama Distributor :</strong>
                <input type="text" name="nama_distributor" value="{{ $distributor->nama_distributor }}"
                    class="form-control" placeholder="Nama Distributor" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Alamat :</strong>
                <input type="text" name="alamat" value="{{ $distributor->alamat }}" class="form-control"
                    placeholder="Alamat" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>No Telp :</strong>
                <input type="number" name="no_telp" value="{{ $distributor->no_telp }}" class="form-control"
                    placeholder="No Telp" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection