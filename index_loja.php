<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Loja da Garagem</title>
    <link href="css/css_loja.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/abas.js"></script>

</head>

<body>
    <div id="Principal">
        <!-- inicio principal -->

        <section id="cabecalho">
            <!-- inico topo-->
            <?php include_once("cabecalho.php"); ?>
        </section><!-- fim topo -->

        <section id="corpo">
            <!-- inicio corpo-->
            <?php include_once("detalhe.php") ?>
        </section><!-- fim corpo -->

        <footer id="rodape">
            <!-- inicio roape-->
            <?php include_once("rodape.php"); ?>

        </footer><!-- fim rodape-->
    </div><!-- principal -->
</body>

</html>