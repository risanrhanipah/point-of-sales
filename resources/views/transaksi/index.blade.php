@extends('transaksi.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               <br><h2>TRANSAKSI</h2></br>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-success" href="{{ route('transaksis.create') }}"> Tambah barang</a></br>
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
            <th>Jumlah Beli</th>
            <th>Total Harga</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tfoot>
        </tfoot>

        <tbody>
        @foreach ($transaksis as $transaksi)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $transaksi->nama_barang }}</td>
            <td>{{ $transaksi->jumlah_beli }}</td>
            <td>{{ $transaksi->total_harga }}</td>
            <td>
                <form action="{{ route('transaksis.destroy',$transaksi->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ url('transaksi/'.$transaksi->id.'/'. $transaksi->kd_detail.'/edit') }}">Edit</a>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td>Total Harga:</td>
            <td>{{$totalharga}}</td>
            <td></td>

        </tr>
        </tfoot>
    </table>
        <div class="pull-left">
            <a class="btn btn-dark" href="{{ route('home') }}"> Back</a>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('transaksi/pay/'.$kd_detail) }}"> Bayar</a>
        </div>
    
@endsection