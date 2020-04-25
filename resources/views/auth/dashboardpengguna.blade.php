@extends('layouts')
@section('content')
<style>
input:focus{

border:none;


}
</style>
<br />

@if(session('ubah'))
   <div class="alert alert-info" role="alert">
  Data Berhasil Dirubah !!!
</div>
@endif
<h1><center>
  Dashboard Pengguna 
</center></h1><hr />
<b>INFORMASI ACCOUNT : </b>
@foreach($data as $key => $data)
<form method="post" action="/pengguna/{{$data->id}}/edit">
{{csrf_field()}}
<table width="50%" border="0">
  <tr>
    <td>ID User </td>
    <td><input name="nama" type="text" class="form-control" value="{{$data->id}}" disabled="disabled"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input name="nama" type="text" class="form-control" value="{{auth()->user()->name}}"  /></td>
  </tr>
  <tr>
    <td>Jenis Kelamin </td>
    <td>
	<?php
	if($data->jenis_kelamin == "Laki - Laki"){
	echo '<input type="radio"  name="jenis_kelamin" value="Laki - Laki" checked> Laki - Laki
			<input  type="radio" name="jenis_kelamin" value="Perempuan" > Perempuan ';
	} else {
	echo '<input type="radio"  name="jenis_kelamin" value="Laki - Laki" > Laki - Laki
			<input  type="radio" name="jenis_kelamin" value="Perempuan" checked > Perempuan ';
	}
	?> </td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><input name="alamat" type="text" class="form-control"   value="{{$data->alamat}}"  /></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><input name="phone" type="text" class="form-control"  value="{{$data->phone}}"  /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="email" type="text" class="form-control" value="{{$data->email}}" />
	<input type="hidden" name="level" value="{{$data->level}}" />
	</td>
  </tr>
  <tr>
    <td><button class="btn btn-primary btn-sm" style="background-color:#FF6600">Edit Data Pengguna</button></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<br />
@endforeach
@endsection