<?php  
$a = year("Y");

if ($a > "1998") {
    echo "Chido!";
} else {
    echo "No tan chido!";
} 

?> 


//if($enviar){ 
//if($_POST['edad'] > 1998){ 
//echo "edad correcta"; 
//}else{ 
//echo "Edad incorrecta"; 
//}




<?php
if(isset($_POST['img'])){
	$img=$_POST['img'];
}else{
	$img="null";
}
?>
<HTML>
<BODY>
	<style type="text/css">
	body{
		font-family: helvetica;
		background-color: #000;
		color: #fff;
	}
	.button{
	 background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	}
	.button:hover {
    background-color: #4CAF50;
    color: white;
}
	</style>
<CENTER>
<img src="img/logoBlanco.png">
<?php
if($img=="null"){
?>	
<form action="imagen.php" method="POST" >	
<table>
<caption>Edad:<caption>


<td>
	
    <select name="img">
	<option value="1">Mayor de 18</option>
	<option value="2">Menor de 18</option>
</select>
</td>
<td><button type="submit" value="Entrar" >Entrar</button></td>
</table>
</form>
<?php
}else{
	switch($img){
		case 1:
			echo "<img src='img/auto.jpg'  width='30'/>";
			break;
		case 2:
			echo '<script language="javascript">alert("Lo siento, no puedes ingresar");</script>'; 
			break;
	}
}
?>

</CENTER>
</BODY>
</HTML>








<?php
echo "¡BIENVENIDO! Por favor ingresa tu año de nacimiento";

$fecha1="24-03-99";

echo "Compruebo mi fecha: $fecha1<br/>";
if (ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $fecha1)) {
    echo "Es valida";
} else {
    echo "No es valida";
}
?>
