<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: index_vote.php");
    exit;
}
?>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Vote Na Sua Banda Favorita!</title>
    <link href="css/css_loja.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div id="Principal">

        <section id="cabecalho">
            <?php include_once("cabecalho.php"); ?>
        </section>

        <section class="vitrine_voto">

            <h1>Vote na sua banda preferida e concorra a premios irados da nossa loja!</h1>
            <br />

            <p>
                Funciona assim: Você clica na banda que vc mais gosta, no ultimo dia de cada mês a gente seleciona a banda
                com mais votos e sorteamos um brinde de nossa loja entre todos que votaram na banda vencedora!!
            </p>
            <br />

            <h2>Vote quantas vezes você quiser!!!!</h2>


            <ul>
                <li>
                    <figure>
                        <img src="img/acdc.png" class="click-trigger" data-click-id="click-001" alt="foto da banda AC/DC" height="120px;" width="120px;">
                    </figure>
                    <span id="click-001">AC /DC</span>
                </li>

                <li>
                    <figure>
                        <img src="img/aerosmith.png" class="click-trigger" data-click-id="click-002" alt="foto da banda Aerosmith" height="120px;" width="120px;">
                    </figure>
                    <span id="click-002">Aerosmith</span>
                </li>

                <li>
                    <figure>
                        <img src="img/angra.jpg" class="click-trigger" data-click-id="click-003" alt="foto da banda Angra" height="120px;" width="120px;">
                    </figure>
                    <span id="click-003">Angra</span>
                </li>

                <li>
                    <figure>
                        <img src="img/black_sabbath.jpg" class="click-trigger" data-click-id="click-004" alt="foto da banda Black Sabbath" height="120px;" width="120px;">
                    </figure>
                    <span id="click-004">Black Sabbath</span>
                </li>

                <li>
                    <figure>
                        <img src="img/bon_jovi.jpg" class="click-trigger" data-click-id="click-005" alt="foto da banda Bon Jovi" height="120px;" width="120px;">
                    </figure>
                    <span id="click-005">Bon Jovi</span>
                </li>

                <li>
                    <figure>
                        <img src="img/barao.jpg" class="click-trigger" data-click-id="click-006" alt="foto da banda Barão Vermelho" height="120px;" width="120px;">
                    </figure>
                    <span id="click-006">Barão Vermelho</span>
                </li>

                <li>
                    <figure>
                        <img src="img/capital_inicial.jpg" class="click-trigger" data-click-id="click-007" alt="foto da banda Capital Inicial" height="120px;" width="120px;">
                    </figure>
                    <span id="click-007">Capital Inicial</span>
                </li>

                <li>
                    <figure>
                        <img src="img/deep_purple.jpg" class="click-trigger" data-click-id="click-008" alt="foto da banda Deep Purple" height="120px;" width="120px;">
                    </figure>
                    <span id="click-008">Deep Purple</span>
                </li>

                <li>
                    <figure>
                        <img src="img/eagles.jpg" class="click-trigger" data-click-id="click-009" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-009">Eagles</span>
                </li>

                <li>
                    <figure>
                        <img src="img/Engenheiros_do_Hawaii.jpg" class="click-trigger" data-click-id="click-010" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-010">Engenheiros Do Hawai</span>
                </li>

                <li>
                    <figure>
                        <img src="img/foo_fighters.jpg" class="click-trigger" data-click-id="click-011" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-011">Foo Fighters</span>
                </li>

                <li>
                    <figure>
                        <img src="img/green_day.jpg" class="click-trigger" data-click-id="click-012" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-012">Green Day</span>
                </li>

                <li>
                    <figure>
                        <img src="img/gnr.jpg" class="click-trigger" data-click-id="click-013" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-013">Guns N' Roses</span>
                </li>

                <li>
                    <figure>
                        <img src="img/ironmaiden.jpg" class="click-trigger" data-click-id="click-014" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-014">Iron Maiden</span>
                </li>

                <li>
                    <figure>
                        <img src="img/judaspriest.jpg" class="click-trigger" data-click-id="click-015" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-015">Judas Priest</span>
                </li>

                <li>
                    <figure>
                        <img src="img/kiss.jpg" class="click-trigger" data-click-id="click-016" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-016">Kiss</span>
                </li>

                <li>
                    <figure>
                        <img src="img/ledzeppelin.jpg" class="click-trigger" data-click-id="click-017" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-017">Led Zeppelin</span>
                </li>

                <li>
                    <figure>
                        <img src="img/legiao.jpg" class="click-trigger" data-click-id="click-018" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-018">Legiao Urbana</span>
                </li>

                <li>
                    <figure>
                        <img src="img/linkinpark.jpg" class="click-trigger" data-click-id="click-019" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-019">Linkin Park</span>
                </li>

                <li>
                    <figure>
                        <img src="img/metallica.jpg" class="click-trigger" data-click-id="click-020" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-020">Metallica</span>
                </li>

                <li>
                    <figure>
                        <img src="img/motorhead.jpg" class="click-trigger" data-click-id="click-021" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-021">Motorhead</span>
                </li>

                <li>
                    <figure>
                        <img src="img/nirvana.jpg" class="click-trigger" data-click-id="click-022" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-022">Nirvana</span>
                </li>

                <li>
                    <figure>
                        <img src="img/Os_Paralamas_do_Sucesso.jpg" class="click-trigger" data-click-id="click-023" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-023">Os Paralamas Do Sucesso</span>
                </li>

                <li>
                    <figure>
                        <img src="img/pinkfloyd.jpg" class="click-trigger" data-click-id="click-024" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-024">Pinkfloyd</span>
                </li>

                <li>
                    <figure>
                        <img src="img/queen.jpg" class="click-trigger" data-click-id="click-025" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-025">queen</span>
                </li>

                <li>
                    <figure>
                        <img src="img/ramones.jpg" class="click-trigger" data-click-id="click-026" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-026">Ramones</span>
                </li>

                <li>
                    <figure>
                        <img src="img/raulseixas.jpg" class="click-trigger" data-click-id="click-027" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-027">Raul Seixas</span>
                </li>

                <li>
                    <figure>
                        <img src="img/rhcp.png" class="click-trigger" data-click-id="click-028" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-028">Red Hot Chili Peppers</span>
                </li>

                <li>
                    <figure>
                        <img src="img/Sepultura.jpg" class="click-trigger" data-click-id="click-029" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-029">Sepultura</span>
                </li>

                <li>
                    <figure>
                        <img src="img/scorpions.jpg" class="click-trigger" data-click-id="click-030" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-030">Scorpions</span>
                </li>

                <li>
                    <figure>
                        <img src="img/Skank.jpg" class="click-trigger" data-click-id="click-031" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-031">Skank</span>
                </li>

                <li>
                    <figure>
                        <img src="img/slayer.jpg" class="click-trigger" data-click-id="click-032" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-032">slayer</span>
                </li>

                <li>
                    <figure>
                        <img src="img/slipknot.jpg" class="click-trigger" data-click-id="click-033" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-033">Slipknot</span>
                </li>

                <li>
                    <figure>
                        <img src="img/soad.jpg" class="click-trigger" data-click-id="click-034" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-034">System Of A Down</span>
                </li>

                <li>
                    <figure>
                        <img src="img/Titãs.jpg" class="click-trigger" data-click-id="click-035" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-035">Titãs</span>
                </li>

                <li>
                    <figure>
                        <img src="img/beetles.jpg" class="click-trigger" data-click-id="click-036" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-036">The Beatles</span>
                </li>

                <li>
                    <figure>
                        <img src="img/dors.jpg" class="click-trigger" data-click-id="click-037" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-037">The Doors</span>
                </li>

                <li>
                    <figure>
                        <img src="img/police.jpg" class="click-trigger" data-click-id="click-038" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-038">The Police</span>
                </li>

                <li>
                    <figure>
                        <img src="img/the_rolling_stone.jpg" class="click-trigger" data-click-id="click-039" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-039">The Rolling Stone</span>
                </li>

                <li>
                    <figure>
                        <img src="img/the_who.jpg" class="click-trigger" data-click-id="click-040" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-040">The Who</span>
                </li>

                <li>
                    <figure>
                        <img src="img/u2.jpg" class="click-trigger" data-click-id="click-041" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-041">U2</span>
                </li>

                <li>
                    <figure>
                        <img src="img/zz_top.jpg" class="click-trigger" data-click-id="click-042" alt="" height="120px;" width="120px;">
                    </figure>
                    <span id="click-042">ZZ Top</span>
                </li>

            </ul>

        </section>

        <footer id="rodape">
            <?php include_once("rodape.php"); ?>
        </footer>

    </div>

    <script>
        var clicks = document.querySelectorAll('.click-trigger'); // IE8
        for (var i = 0; i < clicks.length; i++) {
            clicks[i].onclick = function() {
                var id = this.getAttribute('data-click-id');
                var post = 'id=' + id; // post string
                var req = new XMLHttpRequest();
                req.open('POST', 'contador.php', true);
                req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                req.onreadystatechange = function() {
                    if (req.readyState != 4 || req.status != 200) return;
                    document.getElementById(id).innerHTML = req.responseText;
                };
                req.send(post);
            }
        }
    </script>

</body>

</html>