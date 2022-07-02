@extends('merek.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Edit Merek</h2></br>
        </div>
        <div class="pull-right">
            <br><a class="btn btn-primary" href="{{ route('mereks.index') }}"> Back</a></br>
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

<form action="{{ route('mereks.update',$merek->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Kode Merek</strong>
                <input type="text" name="kd_merek" value="{{ $merek->kd_merek }}" class="form-control"
                    placeholder="Kode Merek" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Merek</strong>
                <input type="text" name="merek" value="{{ $merek->merek }}" class="form-control" placeholder="Merek"
                    required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection