<?php

namespace App\Http\Controllers\Admin\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pembelian;
use App\Laporan_pembelian;

use Auth;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Collection;

class LaporanController extends Controller
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
        return view('admin.laporan.index');
    }

    public function listpembelian(){
        $getpembeli = Laporan_pembelian::select('laporan_pembelian.*','users.name','pembelian.berat')->join('pembelian','pembelian.id','=','laporan_pembelian.id_pembelian')->join('users','users.id','=','pembelian.createdBy')->where('status','SUCCESS')->orderBy('laporan_pembelian.id','DESC')->get();
        $list_data = new Collection;
        $i = 1;
        foreach($getpembeli as $data){
            $list_data->push([
                'id' => $i,
                'tanggal' => date('d/m/Y H:i', strtotime($data->created_at)),
                'berat' => $data->berat,
                'total' => $data->total,
                'kasir' => $data->name
            ]);
            $i++;
        }
        return Datatables::of($list_data)->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
