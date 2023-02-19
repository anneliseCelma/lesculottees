<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>Réception de données de formulaires</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="niv0" style="width:400px;height:500px;">
<div class="niv1">Variables reçues par la méthode POST</div>
<?php
	foreach ($_POST as $key => $value) {
		print("<div class='niv2'>$key</div>");
		print("<div class='niv3'>$value</div>");
	}


   
?>


</body>
</html>
