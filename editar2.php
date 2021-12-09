
<?php
include ("conex.php");
$id=0;
if (isset($_POST['Editar'])) {
    
    if (isset($_POST['idN'])) {
        $id=$_POST['idN'];
    

    if (isset($_POST['NombreN']) && $_POST['NombreN'] != "") {
        
        $nombreN=$_POST['NombreN'];
        $sql= "UPDATE `inventario2021` SET `Nombre`='$nombreN' WHERE Id=$id;";
        $resultado = mysqli_query($conex, $sql);
    }

    if(isset($_POST['marcaN']) && $_POST['marcaN'] != ""){
        $marcaN=$_POST['marcaN'];
        $sql="UPDATE `inventario2021` SET `Marca`='$marcaN' WHERE Id=$id";
        $resultado = mysqli_query($conex, $sql);
    }
    if(isset($_POST['viaN']) && $_POST['viaN'] != ""){
        $viaN=$_POST['viaN'];
        $sql="UPDATE `inventario2021` SET `Via`='$viaN' WHERE Id=$id";
        $resultado = mysqli_query($conex, $sql);
    }

    if(isset($_POST['precioN']) && $_POST['precioN'] != ""){
        $precioN=$_POST['precioN'];
        $sql="UPDATE `inventario2021` SET `Precio`='$precioN' WHERE Id=$id";
        $resultado = mysqli_query($conex, $sql);
    }

    if(isset($_POST['cantidadN']) && $_POST['cantidadN'] != ""){
        $cantidadN=$_POST['cantidadN'];
        $sql="UPDATE `inventario2021` SET `Cantidad`='$cantidadN' WHERE Id=$id";
        $resultado = mysqli_query($conex, $sql);
    }
}
}





?>

