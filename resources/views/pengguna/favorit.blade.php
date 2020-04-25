@extends('layouts')
@section('content')
<center>
<br>
<h3>WISATA FAVORIT </h3>Daftar Wisata Favorit  berdasarkan rating dan ulasan terbanyak <br> <br>
<table width="100%"   class="table table-hover">
 <thead class="thead-dark" style="background-color:#CCCCCC; color:black">
  <tr>
    <td><div align="center"><strong>No</strong></div></td>
    <td><div align="center"><strong>Nama Wisata </strong></div></td>
    <td><div align="center"><strong>Rating</strong></div></td>
    <td><div align="center"><strong>Reviews</strong></div></td>
    <td><div align="center"><strong>Alamat</strong></div></td>
  </tr>
    </thead>
  <tbody>
 <?php $no = 1; ?>
  @foreach($data as $datax)
  <tr>
    <td><div align="center">{{$no}}</div></td>
    <td>{{$datax->nama}}</td>
    <td><div align="center">
	<?php
if($datax->rating == "5"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
} else if($datax->rating == "4.5"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/setengah_star.png" width="15px">';
}  else if($datax->rating == "4"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
} else if($datax->rating == "3.5"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/setengah_star.png" width="15px">';
} else if($datax->rating == "3"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
}  else if($datax->rating == "2.5"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/setengah_star.png" width="15px">';
}  else if($datax->rating == "2"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/star.png" width="15px">';
}  else if($datax->rating == "1.5"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
echo '<img src="http://localhost:8000/setengah_star.png" width="15px">';
}  else if($datax->rating == "1"){
echo '<img src="http://localhost:8000/star.png" width="15px">';
}
?> 
</div></td>
    <td><div align="center">{{$datax->viewers}}</div></td>
    <td>{{$datax->alamat}}{{$no++}};</td>
  </tr>
  @endforeach
   </tbody>
</table>

<p>&nbsp;</p>
</center>





@endsection

