<?php
    include "conexion.php";

    $sql = "SELECT CANCION.NOMBRE 'NOMBRE',
    CANCION.AUTOR 'AUTOR',
    GENERO.DESCRIPCION 'GENERO', GENERO.ID 'ID'
    FROM CANCION JOIN GENERO ON
    CANCION.GENERO_ID = GENERO.ID";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    $resultado = $conexion->query($sql);
?>
<h3>Lista de canciones</h3>
<table class="table table-striped">
    <?php
        if($resultado->num_rows > 0){
            while($fila = $resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$fila["NOMBRE"]."</td>";
                echo "<td>".$fila["AUTOR"]."</td>";
                echo "<tr>";

            }
        }else{
            echo "No tienes canciones aún :(";
        }
    ?>
</table>


<form method="post" action="controladorcancion.php">
            <input type="text" name="NOMBRE" placeholder="Nombre de la canción" REQUIRED> 
            <input type="text" name="AUTOR" placeholder="Autor" REQUIRED >
            <select name="GENERO_ID" REQUIRED>
                <?php
                    $sql_genero = "SELECT * FROM genero;";
                    $res = $conexion->query($sql_genero);
                    while($f = $res->fetch_assoc()){
                        echo "<option value='".$f['ID']."'>".$f['DESCRIPCION']."</opcion>";
                    }
                ?>
            </select>
            <button type = "submit">GUARDAR</button>
</form>