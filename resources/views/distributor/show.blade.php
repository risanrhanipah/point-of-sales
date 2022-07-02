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

@extends('distributor.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2> Show Distributor</h2><br>
        </div>
        <div class="pull-right">
            <br><a class="btn btn-primary" href="{{ route('distributors.index') }}"> Back</a></br>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="list-group-item list-group-item-action">
            <strong>Kode Distributor :</strong>
            {{ $distributor->kd_distributor }}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="list-group-item list-group-item-action">
            <strong>Nama Distributor :</strong>
            {{ $distributor->nama_distributor }}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="list-group-item list-group-item-action">
            <strong>Alamat :</strong>
            {{ $distributor->alamat }}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="list-group-item list-group-item-action">
            <strong>No Telp :</strong>
            {{ $distributor->no_telp }}
        </div>
    </div>
</div>
@endsection