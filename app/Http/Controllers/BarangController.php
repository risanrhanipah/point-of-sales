<?php
  
namespace App\Http\Controllers;
  
use App\Barang;
use App\BarangJadi;
use App\Merek;
use App\Distributor;
use Carbon\Carbon;

use Illuminate\Http\Request;
  
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = BarangJadi::latest()->paginate(5);
  
        return view('barang.index',compact('barangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $barang = Barang::all();
        $merek = Merek::all();
        $distributor = Distributor::all();
        
        return view('barang.create', compact('merek', 'distributor'));

    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang;
        $barang->kd_barang = $request->kd_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->kd_merek = $request->kd_merek;
        $barang->kd_distributor = $request->kd_distributor;
        $barang->tanggal_masuk = $request->tanggal_masuk;
        $barang->harga_barang = $request->harga_barang;
        $barang->stok_barang = $request->stok_barang;
        $barang->keterangan = $request->keterangan;
        $barang->harga_jual = $request->harga_jual;
        $barang->save();

        return redirect()->route('barangs.index')
                        ->with('success','Barang created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barang.show',compact('barang'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit',compact('barang'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kd_barang' => 'required',
            'nama_barang' => 'required',
            'kd_merek' => 'required',
            'kd_distributor' => 'required',
            'tanggal_masuk' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'keterangan' => 'required',
        ]);
  
        $barang->update($request->all());
  
        return redirect()->route('barangs.index')
                        ->with('success','Barang updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
  
        return redirect()->route('barangs.index')
                        ->with('success','Barang deleted successfully');
    }
}