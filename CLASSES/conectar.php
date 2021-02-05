<?php
include_once "conexaoMySQL.php";

$coon = new conexaoMySQL();

$coon-> $servidor ="localhost";
$coon-> $usuario  ="root";
$coon-> $senha    ="";
$coon-> $banco    ="exemplo";

$coon->conectar();
echo "conecxao realixada com sucesso"


?>