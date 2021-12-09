<?php
include ("conex.php");
if (isset($_POST['id'])) {
    $id= $_POST['id'];
    $sql = "DELETE FROM `inventario2021` WHERE Id=$id";
    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        ?>
        <h2 class="ok"><B>Producto ELIMINADO</B></h2>
        <?php
    }else {
        ?>
        <h2 class="bad"><B>Producto NO eliminado</B></h2>
        <?php
    }
}
?>