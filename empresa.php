<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Enviar datos por url</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

<h2></h2>
<?php

$es =<<<ES
	<h3>Coca-Cola</h3>
	<p>Por una vez me voy a permitir el lujo de empezar por lo importante y no por lo urgente. Coca-Cola desmonta su planta de Fuenlabrada mientras la Policía carga contra sus trabajadores</p>
ES;
$en =<<<EN
	<h3>Coca-Cola</h3>
	<p>For once I'm going to afford to start so important and not so urgent. Coca-Cola dismantles its plant in Fuenlabrada as police charge against its workers</p>
EN;
$fr =<<<FR
	<h3>Coca-Cola</h3>
	<p>Pour une fois je vais permettre de commencer si important et pas si urgent. Coca-Cola démantèle son usine de Fuenlabrada que la charge de la police contre ses travailleurs</p>
FR;
$gr =<<<GR
	<h3>Coca-Cola</h3>
	<p>Diesmal werde ich leisten so wichtig ist und nicht so dringend zu starten. Coca-Cola demontiert sein Werk in Fuenlabrada, als die Polizei Anklage gegen seine Arbeiter</p>
GR;


$id=$_GET['idioma'];
switch($id){
	case "espanol": echo $es;
	break;
	case "ingles": echo $en;
	break;
	case "frances": echo $fr;
	break;
	case "aleman": echo $gr;
	break;
}
var_dump($id);	

?>
</div>
</body>
</html>
