<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Laporan_pembelian;
use App\User;
use Auth;

use Kreait\Firebase;  
use Kreait\Firebase\Factory;  
use Kreait\Firebase\ServiceAccount;  
use Kreait\Firebase\Database; 
//Enables us to output flash messaging
use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() 
    {
        $this->middleware(['auth']); 
    }

    public function index()
    {
        $data['profil'] = User::where('id', Auth::user()->id)->first();
        //Data penyimpanan Chart
        
        //End data penyimpanan

        //Pemasukan Chart
        $data['bulan'] = date('M Y');
        $data['tahun_lalu'] = date('M Y', strtotime('-12 months'));

        $monthnow = date('Y-m-d', strtotime('+1 day'));
        $now = date('Y-m-d', strtotime('-12 months'));  
        
        $data['total_pemasukan_tahun'] = Laporan_pembelian::whereBetween('created_at', [$now, $monthnow])->sum('total');
        
        $bulan = array();
        $jumlah = array();
        for($i=1;$i <= 12;$i++){
            $bulan[] = '"'.date("M y", strtotime(date("Y-m-d", strtotime($now)) . " + ".$i." month")).'"';
            $bulannow = date("Y-m-d", strtotime(date("Y-m-d", strtotime($now)) . " + ".$i." month"));
            $buls = date("m", strtotime(date("Y-m-d", strtotime($now)) . " + ".$i." month"));
            $tahun = date("Y", strtotime(date("Y-m-d", strtotime($now)) . " + ".$i." month"));
            $pembayaran = Laporan_pembelian::whereYear('created_at', '=', $tahun)->whereMonth('created_at', '=', $buls)->sum('total');

            $jumlah[] = $pembayaran;
        }
        //dd($bulan);
        $bulans = implode(',', $bulan);
        $jumlahs = implode(',', $jumlah);
        $data['bulans'] = $bulans;
        $data['jum'] = $jumlahs;
        //End Pemasukan
        return view('admin.dashboard.index', $data);
    }
}
