<?php
    $servidor ="localhost";
    $usuario  ="root";
    $senha    ="";
    $banco    ="exemplo";

  $conexao = mysql_connect($servidor,$usuario,$senha);
   mysql_select_db($tabela, $conexao);

?>