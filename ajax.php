<?php
include("conexion.php");
$consulta = mysql_query("select id,estado from estados where relacion=".$_GET['id']." order by estado ASC");
echo "<select name='pais' id='pais'>";
while ($fila = mysql_fetch_array($consulta)) {
    echo "<option value='" . $fila[0] . "'>" . utf8_encode($fila[1]) . "</option>";
}
echo "</select>";
?>