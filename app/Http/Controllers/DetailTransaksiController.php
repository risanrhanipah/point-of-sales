<?php

namespace App\Http\Controllers;

use App\DetailTransaksi;
use Illuminate\Http\Request;
use App\TransaksiJadi;
use Carbon\Carbon;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_transaksis = DetailTransaksi::latest()->paginate(5);
  
        return view('detail_transaksis.index',compact('detail_transaksis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detail_transaksis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'total_harga' => 'required',
            'change' => 'required',
            'tanggal' => 'required',
        ]);

        DetailTransaksi::create($request->all());
   
        return redirect()->route('detail_transaksis.index')
                        ->with('success',' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailTransaksi  $detailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(DetailTransaksi $detailTransaksi)
    {
        return view('detail_transaksis.show',compact('detail_transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailTransaksi  $detailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailTransaksi $detailTransaksi)
    {
        return view('detail_transaksis.edit',compact('detail_transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailTransaksi  $detailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailTransaksi $detailTransaksi)
    {
        $request -> validate([
            'status' => 'required',
            'total_harga' => 'required',
            'change' => 'required',
            'tanggal' => 'required',
        ]);

        $detailTransaksi->update($request->all());
  
        return redirect()->route('detail_transaksis.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailTransaksi  $detailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailTransaksi $detailTransaksi)
    {
        $detailTransaksi->delete();
  
        return redirect()->route('detail_transaksis.index')
                        ->with('success','deleted successfully');
    }

    public function bayar($id_detail)
    {
        $transaksis = TransaksiJadi::where('kd_detail', $id_detail)->get();
        $totalharga = TransaksiJadi::where('kd_detail', $id_detail)->sum('total_harga');

        return view('transaksi.bayar', compact('transaksis', 'totalharga', 'id_detail'));
    }

    public function setor(Request $request, $id_detail)
    {
        $uang = $request->uang;
        $totalharga = $request->totalharga;

        $a = DetailTransaksi::find($id_detail);
        $a->update([
            'status' => '1',
            'total_harga' => $totalharga,
            'change' => $uang - $totalharga,
            'tanggal' => Carbon::now()
        ]);

        return redirect('transaksis')->with('success', 'Kembalian = '.($uang - $totalharga));
    }
}
