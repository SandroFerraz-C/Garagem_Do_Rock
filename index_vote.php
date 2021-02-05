<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Login Garagem Do Rock</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="POST">
            <input type="email" name="email" placeholder="usuario">
            <input type="password" name="senha" placeholder="senha">
            <input type="submit" value="ACESSAR">
            <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se!</strong>
        </form>
    </div>

    <?php

    if (isset($_POST['email'])) {

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        //verificar se esta tudo preenchido

        if (!empty($email) && !empty($senha)) {
            $u->conectar("projeto_login", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($u->logar($email, $senha)) {

                    header("location: vote.php");
                } else {
                    echo "Email e/ou senha estão incorretos";
                }
            } else {
                echo "Erro: " . $u->msgErro;
            }
        } else {

            echo "Preencha todos os campos!";
        }
    }
    ?>

</body>

</html>