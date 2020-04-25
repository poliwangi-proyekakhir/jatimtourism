@extends('layouts')
@section('content')
<br />
 @if(session('sukses'))
   <div class="alert alert-success" role="alert">
  <b>Data Berhasil Disimpan !!!,</b> Anda Dapat Login Sekarang Klik <b>Menu Login.</b>
</div>
@endif
<form action="/pengguna/daftarnya" method="POST">
{{csrf_field()}}

<div id="app">
   <div class="container">
  
 <br /> <center> <h3>Formulir Tambah Pengguna</h3> </center><br />
        <table   align="center" class="table" style="width:70%">
          <tr>
            <td width="157">Nama Lengkap </td>
            <td width="11"><div align="center"><strong>:</strong></div></td>
            <td width="255"><input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" />
            <input name="id" type="hidden" placeholder="ID User" readonly /></td>
          </tr>
          <tr>
            <td>Jenis Kelamin </td>
            <td><div align="center"><strong>:</strong></div></td>
            <td>  <input type="radio" name="jenis_kelamin" value="Laki - Laki" checked> Laki - Laki
			<input  type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan  </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input name="alamat" type="text" class="form-control" placeholder="Alamat" /></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input name="phone" type="text" class="form-control" placeholder="Nomor Handphone" /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><div align="center"><strong>:</strong></div></td>
            <td>   <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input type="password" name="password" class="form-control"   placeholder="Enter Password" /></td>
          </tr>
          <tr>
            <td> <button type="submit" class="btn btn-primary">Submit</button></td>
            <td>&nbsp;</td>
            <td> </td>
          </tr>
        </table>
    </div>
   <br>
</div>
 </form>
 
@endsection


