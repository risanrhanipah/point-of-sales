@extends('transaksi.layout')
 
@section('content')
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <br><h2>Laporan Transaksi</h2></br>
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
                <th>Kode Transaksi</th>
                <th>Nama Barang</th>
                <th>Jumlah Beli</th>
                <th>Total Harga</th>
                <th>Tanggal Beli</th>
            </tr>
          </thead>
        <tbody>
    @foreach ($laporan_transaksi as $laporan_transaksi)
          <tr>
        
              <td>{{ $laporan_transaksi->id }}</td>
              <td>{{ $laporan_transaksi->nama_barang }}</td>
              <td>{{ $laporan_transaksi->jumlah_beli }}</td>
              <td>{{ $laporan_transaksi->total_harga }}</td>
              <td>{{ $laporan_transaksi->created_at }}</td>
          </tr>
    @endforeach
          <div class="form-group text-right">
              <button class="btn btn-dark" onclick="ayFunction()" id="button" style="margin-left: 38%">Print</button>
              <a class="btn btn-warning" href="{{ url('export') }}">Export Transaksi Data</a>
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