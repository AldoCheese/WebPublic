<html>
    <head>
    <link rel="stylesheet" type="text/css" href="estil3.css">

    </head>
    <body>
<a href="index.php"><input type="button" value="INICIO"></a>


<form action="" method="post">
        <div id="Did">
            <?php
            include("editar3.php");
            ?>
        <h1>Ingrese el ID del producto <h1>
         <input type="number" name="idN" id="" required > </input> 
         </div>
         
         <h2>Ingresa los nuevos datos</h2>    
        <label for="Nombre"> Nombre: <br></label><input type="text" name="NombreN" id="" placeholder="Nombre" value=""></input><br>
        
        <label >Marca; <br></label><input type="text" name="marcaN" id="marcaN" placeholder="Marca" value=""></input><br>
        
    <select name="viaN" id="">
        <option name="visN" value="">Via de administraci&oacute;n</option>
        <option name="viaN" value="Oral">Oral</option>
        <option name="viaN" value="Sublingual">Sublingual</option>
        <option name="viaN" value="Topica">Topica</option>
        <option name="viaN" value="Transdermica">Transdermica</option>
        <option name="viaN" value="Oftalmica">Oftalmica</option>
        <option name="viaN" value="Parental">Parental</option>
    </select><br>

    Precio: <br><input type="float" name="precioN" id="precioN" placeholder="Precio" value=""></input><br>
     Cantidad: <br><input type="number" name="cantidadN" id="cantidadN" placeholder="Cantidad" value=""></input><br>
      <br><input type="submit" value="E D I T A R" name="Editar" id="BE">
    </form>
    <?php
         include ("editar2.php");
         ?>
<h1>TABLA DE LOS PRODUCTOS</h1>

</body>
<?php

include ("view2.php");
?>
