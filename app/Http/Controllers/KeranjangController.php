<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        return view('keranjang.index',[
            'keranjangs' => Keranjang::paginate(10),
            'barangs' => Barang::paginate(10)
        ]);
    }
    public function edit($id)
    {
        return view('keranjang.edit',[
            'barang' => Barang::find($id)]
        );
    }
    public function store(Request $request)
    {
        Barang::where('kd_barang',$request->kd_barang)->update([
            'stok_barang' => $request->stok_barang
        ]);
        Keranjang::create([
            'kd_keranjang' => $request->kd_keranjang,
            'kd_barang' => $request->kd_barang,
            'kd_user' => 'kasir',
            'jumlah_beli' => $request->input,
            'total_harga' => $request->total,
            'tanggal_beli' => now(),
            'kd_distributor' => $request->kd_distributor
        ]);
        return redirect()->back();
    }
    public function destroy($id,Request $request)
    {
        $barangs = Barang::where('kd_barang',$request->id);
        $barang = $barangs->first();
        $stok = $barang->stok_barang;
       
        $barang->update([
            'stok_barang' => $stok + $request->stok
        ]);
        
        $keranjang = Keranjang::findOrFail($id);

        $keranjang->delete();
        return back();
    }
}
