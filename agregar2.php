<?php
include("conex.php");
if (isset($_POST['agregar'])) {
    # code...

if(isset($_POST['Nombre']) && $_POST['Nombre'] != null && isset($_POST['Marca']) && $_POST['Marca'] != null  && isset($_POST['via']) && $_POST['via'] != null && isset($_POST['Precio']) && $_POST['Cantidad'] != null  && isset($_POST['Cantidad']) && $_POST['Cantidad'] != null ){
    
    $name = trim($_POST['Nombre']);
    $marca = trim($_POST['Marca']);
    $precio = $_POST['Precio'];
    $via = $_POST['via'];
    $cantidad = $_POST['Cantidad'];

    $consulta = "INSERT INTO `inventario2021`(  `Marca`,`Nombre`, `Via`, `Precio`, `Cantidad` ) VALUES ('$marca', '$name', '$via', '$precio', '$cantidad')";
    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
        ?>
         <h3 class="ok"> Producto agregado correctamente </h3>
         <?php
         
    }else {
        ?>
        <h3 class="bad">Ups a ocurrido un error<h3>
            
            <?php
    }
}else {
    ?>
    <h3 class="bad">Por favor complete los campos</h3>

    <?php
}
}
?>