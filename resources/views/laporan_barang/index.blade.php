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
        <title>laporan_barang</title>
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
                <br><h2>Laporan Barang</h2></br>
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
            <th>Merek</th>
            <th>Distributor</th>
            <th>Tanggal Masuk</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Keterangan</th>
        </tr>
    </thead>
<tbody>

        @foreach ($laporan_barang as $laporan_barangs)
        <tr>
        
            <td>{{ ++$i }}</td>
            <td>{{ $laporan_barangs->kd_barang }}</td>
            <td>{{ $laporan_barangs->nama_barang }}</td>
            <td>{{ $laporan_barangs->merek }}</td>
            <td>{{ $laporan_barangs->nama_distributor }}</td>
            <td>{{ $laporan_barangs->tanggal_masuk }}</td>
            <td>{{ $laporan_barangs->harga_barang }}</td>
            <td>{{ $laporan_barangs->stok_barang }}</td>
            <td>{{ $laporan_barangs->keterangan }}</td>
            
        </tr>
        @endforeach
     
        <div class="form-group text-right">
            <button class="btn btn-dark" onclick="ayFunction()" id="button" style="margin-left: 38%">Print</button>
            <a class="btn btn-warning" href="{{ route('exportt') }}">Export Barang Data</a>
           </div>
        </tbody>
            <script>
                function ayFunction(){
                    var x = document.getElementById("button");
                    if(x.style.display == "none"){
                        x.style.display="block";
                    }else{
                        x.style.display="none";
                    }
                    window.print();
                    x.style.display="block";
                    x.style.float="right";
                    x.style.marginBottom="10px";
                }
            </script>
    </table>
        <div class="pull-left">
            <a class="btn btn-dark" href="{{ route('home') }}"> Back</a>
        </div>     
        
@endsection
