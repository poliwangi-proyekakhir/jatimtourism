@extends('layouts')


    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	
	
 @section('content')
      <br>
 <center> <h3>Selamat Datang di jawatimurtourism.com</h3>
 <input type="text" class="form-control" placeholder="Masukkan Tujuan / Kabupaten Pilihan !!!" style="width:40%; float:left; margin-left:300px;">
  <button type="submit" class="btn btn-primary mb-2" style="margin-left:-280px;">Submit</button>
 </center>
    <!-- elemen untuk menampilkan peta -->
    <div id="map"></div>

<div class="container" style=" border-style:; width:80%; height:200%"><br />
  <strong>Objek Wisata di Jawa Timur : </strong>
  <hr />
@foreach($data as $datax)
<div class="wisatax" style="background-image:{{$datax->gbr}}; width:25%; background-repeat:no-repeat;background-size:cover; height:10%; float:left;  margin-right:20px; margin-left:45px; margin-top:20px; margin-bottom:80px;"><div style="margin-top:130px;background-color:white" >
<font-size:14pt>
<div class="nama_wisata"><b>
<?php
if(strlen($datax->nama)>=25){
echo substr("$datax->nama",0,25)."..";
} else {
echo $datax->nama;
}
?>
</b></div>
<div class="ulasan" >
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
- {{$datax->viewers}} Ulasan</div>
<div class="alamat">
<?php
if(strlen($datax->alamat)>=25){
echo substr("$datax->alamat",0,25)."..";
} else {
echo $datax->alamat;
}
?>
</div>
</font>

</div></div>

@endforeach
</div>




	
    
    <script>
      function initMap() {
        
        // membuat objek untuk titik koordinat
        var jatim = {lat: -7.2754438, lng: 112.6426425};
        var bwi = {lat: -8.2168385, lng: 114.331131};
        var jbr = "Jl. Pantai Blimbingsari, Blimbingsari, Kec. Rogojampi, Kabupaten Banyuwangi, Jawa Timur";
        // membuat objek peta
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: jatim
        });

        // mebuat konten untuk info window
        var contentString = '<h2>Hello Dunia!</h2>';

        // membuat objek info window
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          position: jatim
        });
        
        // membuat marker
        var marker = new google.maps.Marker({
          position: jatim,
          map: map,
          title: 'Pulau Jawa'
        });
          // membuat marker
        var marker = new google.maps.Marker({
          position: bwi,
          map: map,
          title: 'Pulau Jawa',
        });
		var marker = new google.maps.Marker({
          position: jbr,
          map: map,
          title: 'Pulau Jawa',
        });
        
        // event saat marker diklik
        marker.addListener('click', function() {
          // tampilkan info window di atas marker
          infowindow.open(map, marker);
        });
        
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?callback=initMap">
    </script>


    @endsection
	 
	 
	 
