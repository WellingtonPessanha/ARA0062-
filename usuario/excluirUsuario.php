<?php
include_once ("../servico/Bd.php");

$bd = new Bd();

$id = $_GET["id"];

$sql = "delete from usuario_3002 where id = '$id'";

$contador = $bd->exec($sql);

echo "<h1> Foi removido $contador registro</h1>";
echo '<a href="consultaUsuario.php">Voltar</a>';

?>