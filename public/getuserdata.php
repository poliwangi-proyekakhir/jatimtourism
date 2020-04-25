<?php
$con = mysqli_connect("localhost","root","","jatimtourism");
$query = mysqli_query($con, "select * from users where id='".$_GET['q']."'");

 while($data=mysqli_fetch_array($query, MYSQLI_ASSOC)){

  echo $data['id'];
  echo "=";
  echo $data['name'];
   echo "=";
  echo $data['email'];
   echo "=";
  echo $data['password'];
  echo "=";
  echo $data['level'];
  }
 
?>