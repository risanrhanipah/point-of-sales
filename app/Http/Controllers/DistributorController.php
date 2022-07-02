<?php
  
namespace App\Http\Controllers;
  
use App\Distributor;
use Illuminate\Http\Request;
  
class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributors = Distributor::latest()->paginate(5);
  
        return view('distributor.index',compact('distributors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
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
            'kd_distributor' => 'required',
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
  
        Distributor::create($request->all());
   
        return redirect()->route('distributors.index')
                        ->with('success','Distributor created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function show(Distributor $distributor)
    {
        return view('distributor.show',compact('distributor'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function edit(Distributor $distributor)
    {
        return view('distributor.edit',compact('distributor'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distributor $distributor)
    {
        $request->validate([
            'kd_distributor' => 'required',
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
  
        $distributor->update($request->all());
  
        return redirect()->route('distributors.index')
                        ->with('success','Distributor updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distributor $distributor)
    {
        $distributor->delete();
  
        return redirect()->route('distributors.index')
                        ->with('success','Distributor deleted successfully');
    }
}