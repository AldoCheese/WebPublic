<?php
include ("conex.php");

if (isset($_POST['idN'])>0) {
    $id=$_POST['idN'];

?>

<table>
<link rel="stylesheet" type="text/css" href="estil3.css">

        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Marca</td>
                <td>Via de administraci&oacute;</td>
                <td>Precio</td>
                <td>Cantidad</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM inventario2021  WHERE Id=$id";
                $resul= mysqli_query($conex, $sql);

            while ($fila=@mysqli_fetch_assoc($resul)) {
                
            
            ?>
                <tr>
                <td><?php echo $fila['Id'] ?></td>
                <td><?php echo $fila['Nombre'] ?></td>
                <td><?php echo $fila['Marca'] ?></td>
                <td><?php echo $fila['Via'] ?></td>
                <td><?php echo $fila['Precio'] ?></td>
                <td><?php echo $fila['Cantidad'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
}
?>