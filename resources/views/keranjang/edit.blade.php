@extends('barang.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Checkout</h2></br>
        </div>
        <div class="pull-right">
            <br><a class="btn btn-primary" href="{{ route('keranjang.index') }}"> Back</a></br>
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

<form action="{{ route('keranjang.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Kode Keranjang :</strong>
                <input type="text" name="kd_keranjang" value="{{ rand()  }}" class="form-control" placeholder="Kode Barang">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
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
                <input type="text" name="tanggal_masuk" readonly class="form-control" value="{{ $barang->tanggal_masuk }}" placeholder="Tanggal Masuk">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Merek :</strong>
                <input type="text" name="kd_merek" readonly value="{{ $barang->kd_merek }}" class="form-control" placeholder="Kode Merek">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Distributor :</strong>
                <input type="text" name="kd_distributor" readonly value="{{ $barang->kd_distributor }}" class="form-control" placeholder="Kode Distributor">
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Masuk :</strong>
                    <input type="date" name="tanggal_masuk" value="{{ $barang->tanggal_masuk }}" class="form-control" placeholder="Tanggal Masuk">
    </div>
    </div> --}}
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Harga Barang :</strong>
            <input type="number" name="harga_barang" id="price" readonly value="{{ $barang->harga_barang }}" class="form-control" placeholder="Harga Barang">
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Stok Barang : </strong>

            <input type="hidden" name="stok_barang" id="stock_hidden" readonly value="{{ $barang->stok_barang }}" class="form-control" placeholder="Stok Barang">
            <input type="number" name="stok_barang" id="stock" readonly value="{{ $barang->stok_barang }}" class="form-control" placeholder="Stok Barang">
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Input Barang : </strong>
            <input type="number" name="input" id="input" oninput="sum()" value="0" class="form-control" placeholder="Stok Barang">
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Total Barang : </strong>
            <input type="number" name="total" readonly id="total" value="0" class="form-control" placeholder="Harga Barang">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Keterangan</strong>
            <input type="text" name="keterangan" value="{{ $barang->keterangan }}" class="form-control" placeholder="Keterangan">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary" id="button">Submit</button>
    </div>
    </div>

</form>

<script>
    window.onload = function() {
        document.getElementById('button').disabled = true
    }



    function sum() {
        let stock = document.getElementById('stock_hidden').value
        let input = document.getElementById('input').value
        let price = document.getElementById('price').value
        total = parseInt(stock) - parseInt(input)
        result = parseInt(price) * parseInt(input)
        if (!isNaN(total)) {
            if (total < 0 || input < 0) {
                document.getElementById('total').value = '0'
                document.getElementById('stock').value = '0'
            } else {
                document.getElementById('stock').value = total
                document.getElementById('total').value = result
            }
        }
    }

    document.addEventListener('input', function() {
        let total = document.getElementById('total').value
        let input = document.getElementById('input').value;
        if (parseInt(total) <= 0 || parseInt(input) < 0) {
            document.getElementById('button').disabled = true
        } else {

            document.getElementById('button').disabled = false
        }
    })

    function rupiah() {
        angka = document.getElementById('price').value
        let reverse = angka.toString().split('').reverse().join('')
        ribuan = reverse.match(/\d{1,3}/g)
        ribuan = ribuan.join(',').split('').reverse().join('')
        return ribuan
    }
</script>
@endsection