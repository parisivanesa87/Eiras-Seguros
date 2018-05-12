<?php
	$to = "info@eirasseguros.com.ar";
	$subject = "Consulta";
	$txt = $_POST["comment"];
	$headers = $_POST["email"];

	mail($to,$subject,$txt,$headers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eiras Seguros</title>
</head>
<body>
	<h1>El mensaje fue enviado</h1>
</body>
</html>