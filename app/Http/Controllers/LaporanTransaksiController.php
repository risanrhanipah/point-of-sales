<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanTransaksi;
use App\Barang;
use App\Transaksi;
use App\TransaksiJadi;

class LaporanTransaksiController extends Controller
{
    public function index()
    {
        $laporan_transaksi = TransaksiJadi::all();
        // $laporan_transaksi->load('barangs', 'transaksis');
  
        return view('laporan_transaksi.index',compact('laporan_transaksi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}