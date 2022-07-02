<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaksi;
use App\Barang;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
    $user = User::find(Auth::User()->level);
    // $transaksis = Transaksi::all();
    
    //     $a = $transaksis->count();
       

        // if(Auth::user()->id_level == 3){
        //     return view('details.index', compact('transaksis', 'a'));
           
        // }
        return view('home', compact('user'));

        
     }
}



