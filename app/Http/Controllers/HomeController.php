<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Transaction;

use Illuminate\Http\Request;

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
        $transaction = Transaction::OrderBy('id','ASC')->get();
        return view('home',['transaction'=>$transaction]);
    }

    public function topten(){
        $topten = Transaction::select(DB::raw('nama_user,COUNT(*) as jumlah_transaksi'))
        ->groupBy('nama_user')
        ->orderByRaw('jumlah_transaksi DESC')
        ->limit(10)
        ->get();
        return view('topten',['topten'=>$topten]);        
    }
    public function transaksi($nama_user)
    {   
        $transaksi = Transaction::where('nama_user',$nama_user)->get();
        return view('transaksi',['transaksi'=>$transaksi]);
    }
}
