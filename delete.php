<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estil2.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<a href="index.php"><input type="button" value="INICIO"></a>

<form  method="post" id="formD">
    <h2>
    Ingresa el ID del producto a eliminar:
    </h2>
    <input type="number" name="id" id="BE">
<br>
<br>

    <input type="submit" value="Eliminar" id="IE">
</form>

<form action="delete.php" method="post">
    <input id="RE" type="submit" value="Recargar tabla">
</form>
<br>
<?php include ("view2.php"); ?>
<?php
include("delete2.php");
?>
</body>
</html>