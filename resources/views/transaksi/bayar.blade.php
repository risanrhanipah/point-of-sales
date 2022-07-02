@extends('transaksi.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2> Bayar transaksi</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a></br>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Barang:</strong><br>
                @foreach($transaksis as $a)
                {{ $a->nama_barang }} ===> {{$a->jumlah_beli}} <br>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Total:</strong>
                {{ $totalharga }}
            </div>
        </div>
    <form action="{{ route('bayar', $id_detail) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah uang</strong>
                <input type="number" name="uang" class="form-control" placeholder="Jumlah Uang">
                <input type="hidden" value="{{$totalharga}}" name="totalharga">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Bayar</button>
        
    </form>
    </div>
    
@endsection