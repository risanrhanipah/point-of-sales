<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\LaporanExport;
use App\Imports\LaporanImport;
use Maatwebsite\Excel\Facades\Excel;
  
class LBController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportt() 
    {
        return Excel::download(new LaporanExport, 'Laporan Barang.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importt() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return back();
    }
}