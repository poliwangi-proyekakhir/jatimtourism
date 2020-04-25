@extends('layouts')
@section('content')
<style>
input:focus{

border:none;


}
</style>
<br />
<h1><center>Dashboard Admin</center></h1><hr />
<b>INFORMASI ACCOUNT : </b>
@foreach($data as $key => $data)
<table width="50%" border="0">
  <tr>
    <td>Nama</td>
    <td><input name="nama" type="text" class="form-control" value="{{auth()->user()->name}}"  /></td>
  </tr>
  <tr>
    <td>Jenis Kelamin </td>
    <td><input name="nama2" type="text" class="form-control"  value="{{$data->jenis_kelamin}}"  /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><input name="nama3" type="text" class="form-control"   value="{{$data->alamat}}"  /></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><input name="nama4" type="text" class="form-control"  value="{{$data->phone}}"  /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="nama5" type="text" class="form-control" value="{{$data->email}}" /></td>
  </tr>
</table><br />
@endforeach
@endsection