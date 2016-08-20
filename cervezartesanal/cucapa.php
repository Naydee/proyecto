<?php
    $servername = "localhost";
    $username = "bauldeco_naydeev";
    $password = "9hJ@zy!Km4Nm";
    $dbname = "bauldeco_naydeevalenzuela";
 
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
 
    $sql = "SELECT * FROM cupaca";
    $result = $conn->query($sql);

    $conn->close();
?>


<html>
<head>
	<title>Cucapà</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<style type="text/css">
body {background-color: #333333;}
 h1, h2 {
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
    table {color: white;}
 .carousel-control.right, .carousel-control.left{
    background-image: none !important;
    background-color: #000;
  }
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
      background: #00ff00;
  }
  .leftcarousel-control{
      background: #ff0000;
      border: 10px;
  }

  span{
    font-size: 35px;
    margin: 10em 10px 20px 10px;
    color: #0000ff;
  }

 table td{ padding: 20px;  border-collapse: collapse; border-color: white; border: 1px solid white; }
  th, td {
    text-align: center;}

  img{ width: 100px; }
  p{

    color: white;
    font-size: 15px;
  }

  
</style>

<body>

<h1>Artesanía mexicana: Cervezas</h1>
  
  <div class="contenedor">
  <ul>
  <li><a class="active" href="index1.html">Home</a></li>
  <li><a href="lachingoneria.php">La Chingonería</a></li>
  <li><a href="cucapa.php">Cucapà</a></li>
  <li><a href="sietebarrios.php">Siete Barrios</a></li>
  <li><a href="ramuri.php">Ramuri</a></li>
  <li><a href="blackpenguin.php">Black Penguin</a></li>
  <li><a href="encuentranos.php">Encuentranos</a></li>
  </ul>
  </div>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="cupak1.jpg" alt="cupak1" width="auto" height="auto">
      </div>

      <div class="item">
        <img src="cupak2.jpg" alt="cupak2" width="auto" height="auto">
      </div>
    
      <div class="item">
        <img src="cupak3.jpg" alt="cupak3" width="460" height="345">
      </div>

      <div class="item">
        <img src="cupak4.jpg" alt="cupak3" width="460" height="345">
      </div>

       <div class="item">
        <img src="cupak5.jpg" alt="cupak5" width="460" height="345">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span aria-hidden="true"></span>
      <span class="icon-backward2"></span>
    </a>
    
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span aria-hidden="true"></span>
      <span class="icon-forward3"></span>
    </a>
  </div>
</div>

 <br>
    <br>
    <h2>PRODUCTOS</h2>
    <br>
    <br>
   <center><table border="1">
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
        <td><?php echo utf8_encode ($row['Nombre']); ?></td>
        <td><?php echo utf8_encode ($row['Descripcion']); ?></td>
        <td><img src="<?php echo $row['Cerveza']; ?>"></td>
        <td><?php echo $row['Precio']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table></center>

<br>
<br>
<footer>
<div class="final">
<center><p>¡HEY! No lo olvides TODO CON MEDIDA, los excesos son malos ¡CUIDATE!</p></center>
</div>
</footer>

</body>
</html>