<?php

namespace App\Http\Controllers\Admin\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Validator;
use Illuminate\Support\Collection;
//Enables us to output flash messaging
use Session;

class ProfilController extends Controller
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
        $getuser['profil'] = User::where('id', Auth::user()->id)->first();
        return view('admin.profil.index',$getuser);
    }

    public function update_profil(Request $request, $id){
        $user = User::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name'=>'required|max:120'
        ]);
        if ($validator->passes()) {
            if($request['password'] == ""){
                $input = $request->only(['name']);
                $user->fill($input)->save();
            }else{
                $validator = Validator::make($request->all(), [
                    'password'=>'required|min:6|confirmed'
                ]);
                if ($validator->passes()) {
					$user->password = bcrypt($request->input('password'));
                    $user->name = $request->input('name');
					$user->save();
                    
                    return redirect('/profil');
                }
            }
        }
        return redirect('/profil');
    }
}
