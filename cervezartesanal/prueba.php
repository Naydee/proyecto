


<?php
if(isset($_REQUEST['email'])){
	$email_from = $_REQUEST['email'];
	$asunto = $_REQUEST['asunto'];
        $mensaje = $_REQUEST['mensaje'];

    $email_from = $_REQUEST['email'];
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_from, $asunto, $mensaje, $headers);
    echo @mail($email_from, $asunto, $mensaje, $headers)."yo";
} else {
    $tabla = '<htm><body><form action="prueba.php" method="POST">';
    $tabla = $tabla . '<div id="dp01"><span>Contactanos</span></div>';
    $tabla = $tabla . '<div style="background:#04B431">';
    $tabla = $tabla . '<div>De: <input type="text" width="100%" name="email"/></div>';
    $tabla = $tabla . '<div>Asunto: <input type="text" width="100%" name="asunto"/></div>';
    $tabla = $tabla . '<div><textarea rows="4" cols="40" width="100%" name="mensaje"></textarea></div>';
    $tabla = $tabla . '</div>';
    $tabla = $tabla . '<div id="dp05"><span><input type="submit" id="dp18"/></span></div>';
    $tabla = $tabla . '</form><body>';
    echo $tabla;    
}
?>



