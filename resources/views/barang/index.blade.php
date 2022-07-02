{{-- <!DOCTYPE html>
    <html lang="en">
        <link rel="stylesheet" type="text/css" href="{!! asset('../assets/css/login.css') !!}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    /> --}}
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
                <br><h2>BARANG</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-success" href="{{ route('barangs.create') }}"> Create New Barang</a></br>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table id="table-data" class="table table-striped table-bordered" style="width:100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kode Merek</th>
            <th>Kode Distributor</th>
            <th>Tanggal Masuk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok Barang</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tfoot>
            </tfoot>

            <tbody>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $barang->kd_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->merek }}</td>
            <td>{{ $barang->nama_distributor }}</td>
            <td>{{ $barang->tanggal_masuk }}</td>
            <td>{{ $barang->harga_barang }}</td>
            <td>{{ $barang->harga_jual }}</td>
            <td>{{ $barang->stok_barang }}</td>
            <td>{{ $barang->keterangan }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$barang->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('barangs.show',$barang->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    <div class="pull-left">
        <a class="btn btn-dark" href="{{ route('home') }}"> Back</a>
    </div>
    {!! $barangs->links() !!}
@endsection