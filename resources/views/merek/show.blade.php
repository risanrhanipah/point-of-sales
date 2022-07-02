@extends('merek.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2> Show Merek</h2></br>
        </div>
        <div class="pull-right">
            <br><a class="btn btn-primary" href="{{ route('mereks.index') }}"> Back</a></br>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Kode Merek:</strong>
            {{ $merek->kd_merek }}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Merek:</strong>
            {{ $merek->merek }}
        </div>
    </div>
</div>
@endsection