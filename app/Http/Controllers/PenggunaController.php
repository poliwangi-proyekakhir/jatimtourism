<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use App\User;
use App\Scrapping;

class PenggunaController extends Controller
{
   function index(){
        $data = Pengguna::get();
        return view('pengguna.index', compact('data'));
    }
	
	function home(){
	$data = Scrapping::get();
	return view('pengguna.home', compact('data'));
	}
 
 	function daftar(){
	return view('pengguna.daftar');
    }

    public function store(Request $request){
	echo $request->nama;
    \App\Pengguna::create($request->all());
	$user = new \App\User;
	$user->name = $request->nama;
	$user->email = $request->email;
	$user->password = bcrypt($request->password);
	$user->remember_token = "dfasfadfadfaf";
	$user->level = "pengguna";
	$user->save();
	return redirect('daftar')->with('sukses','Data Disimpan.');
    }
	
	public function edit(Request $request, $id){
	if(auth()->user()->level == 'pengguna'){	
	$penggunax_login =  \App\User::where('name',auth()->user()->name)->update(['name'=>$request->nama]);
	} else {
	$penggunax_login =  \App\User::where('name',$request->id_pengguna_nama)->update(['name'=>$request->nama]);
	}
	$penggunax =  \App\Pengguna::find($id);
	$penggunax->update($request->all());
	echo $request->level;
	if(auth()->user()->level=='pengguna'){
			return redirect('/dashboardpengguna')->with('ubah','Data Berhasil Dirubah.');
	} 
	if(auth()->user()->level=='admin'){
		return redirect('/pengguna')->with('ubah','Data Berhasil Dirubah.');
	}
	}
		
	public function destroy($id){
    $data = \App\Pengguna::findOrFail($id);
    $data->delete();
	$pengguna = \App\User::findOrFail($id);
	$pengguna->delete();
	return redirect('/pengguna')->with('hapus','Data Berhasil Dihapus.');
	}
	
	function favorit(){
        $data = Scrapping::get();
        return view('pengguna.favorit', compact('data'));
    }
	
	function grafik(){
        $data = Pengguna::get();
        return view('pengguna.grafik', compact('data'));
    }




}
