<?php
$fecha="";
if( preg_match('/^([1]{1})-([9]{1})-([2-9]{1})-([0-8]{1})', $fecha ) ){
    echo "Es valida";
	}else{
    echo "No es valida";
	}
?>

<html>

<head>
	<title></title>
</head>
<body>
<h3>¡Bienvenido, ingresa tu año de nacimeinto!</h3>
<form name="formulario" action="validacion.php" method="POST">

Año:<br><input type="number" name="points"> - <input type="number" name="points"> - <input type="number" name="points"> - <input type="number" name="points"> -

<input type="submit" value="Enviar" name="Enviar"/>
</form>







</body>
</html>

