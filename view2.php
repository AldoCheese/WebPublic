<head>
<link rel="stylesheet" type="text/css" href="estiloT.css">
</head>
<?php
include ("conex.php");


?>

    <table>
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Nombre
                </td>
                <td>
                    Marca
                </td>
                <td>
                    Via de administraci&oacute;n
                </td>
                <td>
                    Precio
                </td>
                <td>
                    Cantidad
                </td>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM inventario2021 ";
        $resultado= mysqli_query($conex, $sql);

        while ($filas=mysqli_fetch_assoc($resultado) ) {
            
            ?>
            <tr>
                <td><?php echo $filas['Id']; ?></td>
                <td><?php echo $filas['Nombre']; ?></td>
                <td><?php echo $filas['Marca']; ?></td>
                <td><?php echo $filas['Via']; ?></td>
                <td><?php echo $filas['Precio']; ?></td>
                <td><?php echo $filas['Cantidad']; ?></td>
            </tr>
        <?php
        }
    
        ?>
        </tbody>
    </table>
  
