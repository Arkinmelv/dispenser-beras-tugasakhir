<?php

namespace App\Http\Controllers\Admin\Kasir;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pembelian;
use App\Laporan_pembelian;

use Auth;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Collection;

class KasirController extends Controller
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
        return view('admin.kasir.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listantrian()
    {
        $getpembeli = Pembelian::where('status','PENDING')->orderBy('id','ASC')->get();
        $list_data = new Collection;
        $i = 1;
        foreach($getpembeli as $data){
            $list_data->push([
                'id' => $i,
                'tanggal' => date('d/m/Y H:i', strtotime($data->created_at)),
                'harga' => $data->harga,
                'berat' => $data->berat,
                'nominal' => $data->nominal,
                'action' => '<button type="button" class="action btn btn-primary me-1 mb-1 button-table" data-id="'.$data->id.'" data-action="edit"  data-toggle="tooltip" title="Ubah"><i class="fa fa-pencil"></i> Bayar Sekarang</button>',
            ]);
            $i++;
        }
        return Datatables::of($list_data)->make(true);
    } 

    public function create()
    {
        return view('admin.kasir.create');
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
        $pembelian = Pembelian::findOrFail($id);
        echo json_encode($pembelian);
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
        $pembelian = Pembelian::find($id);
        $pembelian->status = "SUCCESS";
        $pembelian->createdBy = Auth::user()->id;
            
        if($pembelian->save()){
            $laporan_pembelian = new Laporan_pembelian;
            $laporan_pembelian->id_pembelian = $pembelian->id;
            $laporan_pembelian->total = $pembelian->nominal;
            $laporan_pembelian->save();

            return response()->json(['success'=>'Pembelian berhasil dilakukan.']);
        }else{
            return response()->json(['error'=>'Pembelian gagal dilakukan.']);
        }
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
