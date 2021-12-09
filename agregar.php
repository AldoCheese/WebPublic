<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilillo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar productos</title>
</head>
<body>
    
        <a href="index.php"><input type="button" value="INICIO" id="VD"></a>
    
<!-- Se crea un formulario en el que se ingresaran los datos de producto ha agregar -->
<form  method="post" id="form1">
    <h2>AGREGAR</h2>
    <h5>Ingresa los siguientes datos</h5>
    <input type="text" name="Nombre" id="" placeholder="Nombre del producto">
   <input type="text" name="Marca" id="" placeholder="Marca del producto">
    <select name="via" id="">
        <option selected value="">Via de administraci&oacute;n</option>
        <option value="Oral">Oral</option>
        <option value="Sublingual">Sublingual</option>
        <option value="Topica">Topica</option>
        <option value="Transdermica">Transdermica</option>
        <option value="Oftalmica">Oftalmica</option>
        <option value="Parental">Parental</option>
    </select>

    <input type="float" name="Precio" id="precio" placeholder="Precio">
     <input type="number" name="Cantidad" id="cantidad" placeholder="Cantidad">
     <input id="AG" type="submit" value="Agregar" value="agregar" name="agregar">
</form>

<?php
 include("view.php");
 ?>

    <?php
    include("agregar2.php");
    ?>

    <form method="post">
    <input type="submit" value="Ver datos" name="dtaos" class="VD" id="VD">
    </form>
</body>
</html>