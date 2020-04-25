<?php
$con = mysqli_connect("localhost","root","","jatimtourism");
$query = mysqli_query($con, "select * from pengguna where id='".$_GET['q']."'");

  while($data=mysqli_fetch_array($query, MYSQLI_ASSOC)){
  echo $data['id'];
  echo "=";
  echo $data['nama'];
   echo "=";
  echo $data['jenis_kelamin'];
   echo "=";
  echo $data['alamat'];
   echo "=";
  echo $data['phone'];
   echo "=";
  echo $data['email'];
  echo "=";
  echo $data['level'];
  }
?>