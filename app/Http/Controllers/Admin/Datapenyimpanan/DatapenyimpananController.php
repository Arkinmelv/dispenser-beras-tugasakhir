<?php

namespace App\Http\Controllers\Admin\Datapenyimpanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

//Enables us to output flash messaging
use Session;

class DatapenyimpananController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['auth']); 
    }

    public function index()
    {
        $getuser['profil'] = User::where('id', Auth::user()->id)->first();
        return view('admin.datapenyimpanan.index', $getuser);
    }
}
