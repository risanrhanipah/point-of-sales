<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanBarang;
use App\Merek;
use App\Distributor;

class LaporanBarangController extends Controller
{
    public function index()
    {
        $laporan_barang = LaporanBarang::all();
        // dd($laporan_barang);
        return view('laporan_barang.index',compact('laporan_barang'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
