@extends('keranjang.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2>BARANG</h2></br>
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
            <th>Harga Barang</th>
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
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->kd_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->mereks->merek }}</td>
            <td>{{ $barang->distributor }}</td>
            <td>{{ $barang->tanggal_masuk }}</td>
            <td>{{ $barang->harga_barang }}</td>
            <td>{{ $barang->stok_barang }}</td>
            <td>{{ $barang->keterangan }}</td>
            <td>
                <a href="{{ route('keranjang.edit',$barang->id) }}" class="btn btn-info">pilih</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    <div class="pull-left">
        <a class="btn btn-dark" href="{{ route('home') }}"> Back</a>
    </div>
    {!! $barangs->links() !!}    <hr>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               <br><h2>KERANJANG</h2></br>
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
            <th>Kode Keranjang</th>
            <th>Kode Barang</th>
            <th>Kode User</th>
            <th>Jumlah Beli</th>
            <th>Total Harga</th>
            <th>Tanggal Beli</th>
            <th>Nama Distributor</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tfoot>
        </tfoot>

        <tbody>
        @foreach($keranjangs as $keranjang)
        <tr>
            <td>1</td>
            <td>{{ $keranjang->kd_keranjang }}</td>
            <td>{{ $keranjang->kd_barang }}</td>
            <td>{{ $keranjang->kd_user }}</td>
            <td>{{ $keranjang->jumlah_beli }}</td>
            <td>{{ $keranjang->total_harga }}</td>
            <td>{{ $keranjang->tanggal_beli }}</td>
            <td>{{ $keranjang->nama_distributor }}</td>
            <td>
                <form action="{{ route('keranjang.destroy',$keranjang->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$keranjang->kd_barang}}">
                    <input type="hidden" name="stok" value="{{$keranjang->jumlah_beli}}">
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
    {!! $keranjangs->links() !!}
@endsection