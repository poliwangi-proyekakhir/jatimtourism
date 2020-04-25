<html>
<head>
<style type="text/css">
<!--
.style3 {font-weight: bold}
.style4 {font-weight: bold}
.style5 {font-weight: bold}
.style6 {font-weight: bold}
.style7 {font-weight: bold}
.style8 {font-weight: bold}
.style9 {font-weight: bold}
-->
</style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<style type="text/css">
<!--
.style1 {font-size: 11px}
-->
</style>
@extends('layouts')
@section('content')
<body>
<div id="app">
   <div class="container">
   <br />
   @if(session('sukses'))
   <div class="alert alert-success" role="alert">
  Data Berhasil Disimpan !!!
</div>
@endif
 @if(session('ubah'))
   <div class="alert alert-info" role="alert">
  Data Berhasil Dirubah !!!
</div>
@endif
 @if(session('hapus'))
   <div class="alert alert-danger" role="alert">
  Data Berhasil Dihapus. !!!
</div>
@endif
        <h5 class="page-header" align="center">Manajemen User Login <hr></h5>
         <table class="table table-hover" style="margin-left:auto; margin-right:auto; width:90%; border-bottom-width:3px; border-bottom-style:dotted; border-bottom-color:#B4D13A;">
          <tr>
            <td width="82" bgcolor="#B4D13A" class="style3"><div align="center">ID </div></td>
            <td width="178" bgcolor="#B4D13A" class="style4"><div align="center">Nama Lengkap </div></td>
            <td width="165" bgcolor="#B4D13A" class="style5"><div align="center">Email </div></td>
            <td width="114" bgcolor="#B4D13A" class="style9"><div align="center">level</div></td>
            <td width="213" bgcolor="#B4D13A" class="style9"><div align="center">created_at</div></td>
            <td width="191" bgcolor="#B4D13A" class="style9"><div align="center">updated_at</div></td>
            <td width="78" bgcolor="#B4D13A" class="style9"><div align="center">Panel</div></td>
           </tr>
		   @foreach($data as $key => $d)
          <tr >
            <td  ><div align="center">{{ $d->id }}</div></td>
            <td>{{ $d->name }}			</td>
           <td><div align="">{{ $d->email }}</div></td>
           <td><div align="center">{{ $d->level }}</div></td>
           <td><div align="center">{{ $d->created_at }}</div></td>
           <td><div align="center">{{ $d->updated_at }}</div></td>
           <td>
		     <div align="center"><span class="style1">
 <button type="button" class="btn btn-primary btn-sm" onClick="coba({{$d->id}})"  data-toggle="modal" data-target="#exampleModal"> Edit  </button>      | 

<!--
<a href="/auth/{{$d->id }}"><button type="button" class="btn btn-secondary btn-sm"  >Hapus  </button></a> -->
	        </span></div></td>
           </tr>
		  @endforeach
    </table>
    <p>&nbsp;</p>
  </div><br>
</div>


<!-- Modal -->
<div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" >
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel"><center>Formulir Edit Pengguna </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" > 
      
	  
	  <form  id="rubah_form"  action="" method="POST" >
{{csrf_field()}}

<div id="app">
   <div class="container" >
  <input type="hidden" name="id_pengguna_nama" id="id_pengguna_nama">
        <table   align="center" class="table" style="width:100%">
          <tr>
            <td width="157">Nama Lengkap </td>
            <td width="11"><div align="center"><strong>:</strong></div></td>
            <td width="255"><input name="name" type="text" id="nama" class="form-control" placeholder="Nama Lengkap" /></td>
          </tr>
          <tr>
            <td>Email </td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input name="email" type="text" id="email" class="form-control" placeholder="Email" /> </td>
          </tr>
          <tr>
            <td>password</td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input name="password" type="text" class="form-control" id="password" placeholder="Password" /></td>
          </tr>
          <tr>
            <td>level</td>
            <td><div align="center"><strong>:</strong></div></td>
            <td><input name="level" id="level" type="text" class="form-control" placeholder="Level" /></td>
          </tr>
                </tr>
        </table>
    </div>
</div>

	  
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 </form>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Button trigger modal -->
<script>
function coba(str){

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
			var hasil_split =  this.responseText.split("=");
			document.getElementById("nama").value = hasil_split[1];
            document.getElementById("email").value = hasil_split[2];
			document.getElementById("password").value = hasil_split[3];
			document.getElementById("level").value = hasil_split[4];
			document.getElementById("id_pengguna_nama").value = hasil_split[1];
			document.getElementById("rubah_form").action = "/auth/"+str+"/edit";
            }
        };
        xmlhttp.open("GET","getuserdata.php?q="+str,true);
        xmlhttp.send();
		
    }

}
</script>

</body>
@endsection
</html>

