<?php

  if (isset($_GET['nombre']) && isset($_GET['email']) && isset($_GET['mensaje'])) {   
   
  $nombre = $_GET['nombre'];
  $email = $_GET['email'];
  $mensaje = $_GET['mensaje'];

  $servername = "localhost";
    $username = "bauldeco_naydeev";
    $password = "9hJ@zy!Km4Nm";
    $dbname = "bauldeco_naydeevalenzuela";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error){
    die ("connection failed" . $conn->connect_error);
  }

  $sql = "INSERT INTO formulario (nombre, email, mensaje) 
  VALUES ('$nombre', '$email', '$mensaje')";

  if($conn->query($sql) === TRUE){
    echo "Tu mensaje fue enviado, Gracias.";
  } else {
    //echo "error" . $sql . "br" . $conn->error; 
    echo "No podemos enviar tu mensaje, intenta otra vez.";
  }
  $conn->close();
 ?>

<html>
<head>
	<title>Encuentranos</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<style type="text/css">
  .container { margin-left: 450px; color: blue; padding-top: 100px;}
  body {background-color: #333333; color: blue;
  }
  h1 {
    text-align: center;
    color: white;
    }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    }
  li {
    float: left; padding-left: 80px;
    }
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
    }
    label {display: block; color: blue;}
    input { width: 400px; }
    textarea { width: 400px;}
    button { display: block; margin-top: 30px; color: blue;}
    p{
    color: white;
    font-size: 15px;
  }
    #map {width: 600px; height: 400px; padding: 200px; margin: 100px;}

  </style>
<body>

<h1>Artesanía mexicana: Cervezas</h1>

  <ul>
  <li><a class="active" href="index1.html">Home</a></li>
  <li><a href="lachingoneria.php">La Chingonería</a></li>
  <li><a href="cucapa.php">Cucapà</a></li>
  <li><a href="sietebarrios.php">Siete Barrios</a></li>
  <li><a href="ramuri.php">Ramuri</a></li>
  <li><a href="blackpenguin.php">Black Penguin</a></li>
  <li><a href="encuentranos.html">Encuentranos</a></li>
  </ul>

 <form id="form1" name="form1" method="post" action="prueba.php"> 
 <div class="container">
 <div class="caja1"> 
  <form action="encuentranos.php" method="GET">
    <label>Nombre:</label>
    <input type='tex'name="nombre">Nombre:</input>   
    <label>Email:</label>
    <input type='tex' name='email'>Email:</input>
    <label>Mensaje:</label>
    <textarea name='mensaje'>Mensaje:</textarea>
    <br>
    <input type="submit"></input>
  </form>
</div>
</div>

<center><div id="map"></div></center>
    <script>
    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: 19.4161356, lng: -99.1618396}
    });
    var beachMarker = new google.maps.Marker({
    position: {lat: 19.4149546, lng: -99.1613531},
    map: map
    });
    var beachMarker = new google.maps.Marker({
    position: {lat: 19.4109624, lng: -99.1681688},
    map: map
    });var beachMarker = new google.maps.Marker({
    position: {lat: 19.4110425, lng: -99.2020114},
    map: map
    });
    }
    </script>
 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj5O4YVyjtsP_VjLn6ELfLwSRt-gQCSfs&signed_in=true&callback=initMap"></script>

<footer>
<div class="final">
<center><p>¡HEY! No lo olvides TODO CON MEDIDA, los excesos son malos ¡CUIDATE!</p></center>
</div>
</footer>

</body>
</html>

