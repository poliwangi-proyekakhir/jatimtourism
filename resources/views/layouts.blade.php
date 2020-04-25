<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <!-- Styles -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>

button:hover {
  opacity: 0.8;
}

img.avatar {
  width: 30%;
  border-radius: 50%;
}

/* Add padding to containers */

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
/* The Modal (background) */

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 90%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
</style>
<body>
<nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">JAWA TIMUR TOURISM </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
	@if(empty(auth()->user()->name) || auth()->user()->level =="pengguna")
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8000/home">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/favorit">Wisata Favorit </a></li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/grafik">Grafik Rating Favorit </a>
		</li>
		@endif
		@if(empty(auth()->user()->name))
	  <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/daftar">Daftar</a>
      </li>
	  @endif
	    @if(!empty(auth()->user()->name) && auth()->user()->level =="admin" )
	   <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/dashboardadmin">My Account</a>
      </li>
	  @endif
	   @if(!empty(auth()->user()->name) && auth()->user()->level =="pengguna" )
	   <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/dashboardpengguna">My Account</a>
      </li>
	  @endif
	    @if(!empty(auth()->user()->name) && auth()->user()->level =="admin")
	   <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/pengguna">Manajemen Pengguna</a>
      </li>
	  @endif
	  @if(empty(auth()->user()->name))
	  <li class="nav-item">
        <a class="nav-link" onClick="document.getElementById('id01').style.display='block'">Login</a>
      </li>
	  @endif
	  @if(!empty(auth()->user()->name) && auth()->user()->level =="admin")
	  <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/auth">Manajemen Login</a>
      </li>
	  @endif	
	    @if(!empty(auth()->user()->name) && auth()->user()->level =="admin")
	  <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/scrapping">Scrapping TRIPADVISOR.COM</a>
      </li>
	  @endif	
	  @if(!empty(auth()->user()->name))
	   <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/logout">Logout ({{auth()->user()->name}})</a>
      </li>
	  @endif
    </ul>
    <span class="navbar-text">
  www.jawatimurtourism.com
    </span>
  </div>
</nav>






<!-- The Modal -->
<div id="id01" class="modal" style="display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;">
  <span onClick="document.getElementById('id01').style.display='none'"
class="close" style="
position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/postlogin" method="post" style="width:30%; border: 3px solid #f1f1f1;">
  {{csrf_field()}}
    <div class="imgcontainer" style="  text-align: center; 
  margin: 24px 0 12px 0;">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container" style=" padding: 16px;">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="email" style="width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" style="width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;" required>

      <button type="submit" style=" background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;" >Login</button>
        </div>

    <div class="container" style="background-color:#f1f1f1;  padding: 16px;">
      <button type="button" onClick="document.getElementById('id01').style.display='none'" style="width: auto;
  padding: 10px 18px;
  background-color:#333333; color:white; border-radius:10px;" class="cancelbtn">Cancel</button>
      <span class="psw">Lupa <a href="#">Password?</a></span>
    </div>
  </form>
</div>





<div class="container">
@yield('content')
</div>

<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Special Untuk Anda </h5>
    <p class="card-text">JatimTourism adalah Situs Rekomendasi Wisata Terbaik di Jawa TImur </p>
    <a href="http://localhost:8000/daftar" class="btn btn-primary" >Create Account Now </a>
  </div>
  <div class="card-footer text-muted">
    www.jatimtourism.com</div>
</div>

<!-- Scripts -->
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
