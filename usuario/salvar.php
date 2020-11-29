<?php

include_once ("../servico/Bd.php");

$login = $_GET["login"];
$senha = $_GET["senha"];

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "update usuario_3002 set login='$login',  senha='$senha' where id='$id' ";
}else {
    $sql = "INSERT INTO `usuario_3002` (`id`, `login`, `senha`) VALUES (NULL, '$login', '$senha')";    
}


$bd = new Bd();
$contador = $bd->exec($sql); // insert, update e delete

echo "<h1> Foi incluído/atualizado $contador registro </h1>";

echo "<a href='consultaUsuario.php'>Voltar </a>";

?>