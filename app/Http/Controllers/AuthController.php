<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pengguna;
use App\User;

class AuthController extends Controller
{
    //
	public function login(){
	return view('auth.login');
	}
	public function postlogin(Request $request){
	if(Auth::attempt($request->only('email','password'))){
	if(auth()->user()->level == "pengguna"){
	return redirect('/dashboardpengguna');
	}
	else {
	return redirect('/dashboardadmin');
	}
	}
	return redirect('/home');
	
	}
	public function logout(){
	Auth::logout();
	return redirect('/home');
	}
	
	public function dashboardpengguna(){
	$data = Pengguna::where('nama',auth()->user()->name)->get();
	return view('auth.dashboardpengguna', compact('data'));
	}
	public function dashboardadmin(){
	$data = Pengguna::where('nama',auth()->user()->name)->get();
	return view('auth.dashboardadmin', compact('data'));
	}
	
	public function index(){
    $data = User::get();
    return view('auth.index', compact('data'));
    }
	
	public function destroy($id){
	$data = \App\User::findOrFail($id);
    $data->delete();
	return redirect('/auth')->with('hapus','Data Berhasil Dihapus.');
	}

	public function edit(Request $request, $id){
	$penggunax =  \App\User::find($id);
	$penggunax->name = $request->name;
	$penggunax->email = $request->email;
	$penggunax->password = $request->password;
	$penggunax->level = $request->level;
	
	$pengguna_pengguna =  \App\Pengguna::find($id);
	$pengguna_pengguna->nama = $request->name;
	$pengguna_pengguna->email = $request->email;
	
	$penggunax->update();
	$pengguna_pengguna->update();
	
	return redirect('/auth')->with('ubah','Data Berhasil Dirubah.');
	}

}
