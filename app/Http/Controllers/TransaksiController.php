<?php
  
namespace App\Http\Controllers;
  
use App\Transaksi;
use App\Barang;
use App\User;
use App\LaporanTransaksi;
use Carbon\Carbon;
use App\Distributor;
use App\TransaksiJadi;
use App\DetailTransaksi;
use Auth;
use Illuminate\Http\Request;
  
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        $detail = DetailTransaksi::where('status', '0')->first();

        if (!$detail) {
            DetailTransaksi::create([
                'status' => '0',
                'total_harga' => 0,
                'change' => 0,
                'tanggal' => Carbon::now()
            ]);

            $detail = DetailTransaksi::where('status', '0')->first();
        }

        $kd_detail = $detail->id;
        $transaksis = TransaksiJadi::where('kd_detail', $detail->id)->get();
        $totalharga = TransaksiJadi::where('kd_detail', $detail->id)->sum('total_harga');

        return view('transaksi.index',compact('transaksis','barangs', 'detail', 'totalharga', 'kd_detail'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->name;
        $barang = Barang::all();
        $distributor = Distributor::all();
        $detail = DetailTransaksi::where('status', '0')->first();
        // dd($user);
        return view('transaksi.create', compact('user','barang','distributor', 'detail'));
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
            'kd_barang' => 'required',
            'kd_user' => 'required',
            'kd_detail' => 'required',
            'jumlah_beli' => 'required'
        ]);

        $barang = Barang::where('kd_barang', $request->kd_barang)->first();

        $sisa_stok = $barang->stok_barang - $request->jumlah_beli;
        
        $barang->update([
            'stok_barang' => $sisa_stok
        ]);

        $barang_harga = Barang::where('kd_barang', $request->kd_barang)->first();

        Transaksi::create([
            'kd_distributor' => $barang->kd_distributor,
            'kd_barang' => $request->kd_barang,
            'kd_user' => $request->kd_user,
            'kd_detail' => $request->kd_detail,
            'jumlah_beli' => $request->jumlah_beli,
            'total_harga' => $barang_harga->harga_barang * $request->jumlah_beli,
        ]);

        return redirect()->route('transaksis.index')
                        ->with('success','Transaksi created successfully.');

    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('transaksi.show',compact('transaksi'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($transaksi, $detail)
    {
        $transaksi = Transaksi::where('id', $transaksi)->where('kd_detail', $detail)->first();

        return view('transaksi.edit',compact('transaksi'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $barang = Barang::where('kd_barang', $request->kd_barang)->first();
  
        $transaksi->update([
            'jumlah_beli' => $request->jumlah_beli,
            'total_harga' => $barang->harga_barang * $request->jumlah_beli,
        ]);
  
        return redirect()->route('transaksis.index')
                        ->with('success','Transaksi updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
  
        return redirect()->route('transaksis.index')
                        ->with('success','Transaksi deleted successfully');
    }
}