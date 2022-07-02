@extends('userss.layout')
@section('content')
    <div class="row">
        <div class="pull-right">
            <a class="btn btn-light" href="{{ route('userss.index') }}"> Back</a>
        </div>
        
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="btn btn-dark">
                <h2> Show User</h2>
            </div>
            
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="list-group-item list-group-item-action">
                <strong>Kode User:</strong>
                {{ $user->kd_user }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="list-group-item list-group-item-action">
                <strong>Username:</strong>
                {{ $user->username }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="list-group-item list-group-item-action">
                <strong>Password:</strong>
                {{ $user->password }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="list-group-item list-group-item-action">
                <strong>Level:</strong>
                {{ $user->level }}
            </div>
        </div>
    </div>
@endsection