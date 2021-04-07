<?php
include_once("header.php");
?>

<body>
    <main>
        <section class="content-section">

            <h1>Eletricidade (1991)</h1>

            <p>
                - Eletricidade é o quinto álbum do Capital Inicial, lançado em 1991.
            </p>

            <p>
                O disco traz uma versão para "The Passenger", de Iggy Pop, batizada como "O Passageiro". Esse é o último álbum com o tecladista
                Bozo Barretti, bem como o último com Dinho Ouro Preto que saira em 1993, mais tarde retornaria ao Capital em 1998.
            </p>
            <br />

            <p>Duração do álbum: 45 min. 54 seg.</p>
            <p>Gravadora(s): BMG.</p>
            <p>Produção: Reinaldo Barriga.</p>
            <br />

            <section class="disco">
                <table id="demo-table">
                    <iframe src="https://open.spotify.com/embed/playlist/1CHVqPG12wGbAvmsnFJ2qi" width="100%" height="790" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                </table>
            </section>

            <section>
                <div id="divDINHO_OURO_PRETO" name="nm_divDINHO_OURO_PRETO">
                    <p>
                        <img class="css" src="img/capital inicial/dop.jpg" width="150px;" height="130px;">
                        Fernando de Ouro Preto, mais conhecido como Dinho Ouro Preto (Curitiba, 27 de abril de 1963), é um músico e
                        compositor brasileiro. É vocalista da banda brasileira Capital Inicial, além de irmão do músico brasileiro Ico
                        Ouro Preto e meio irmão do também músico Dado Villa-Lobos.
                </div>

                <div id="divLORO_JONES" name="nm_divLORO_JONES">
                    <p>
                        <img class="css" src="img/capital inicial/lj.jpg" width="150px;" height="130px;">
                        Antônio Marcos Lopes de Souza (Rio de Janeiro, 19 de outubro de 1961), mais conhecido pelo nome artístico de Loro
                        Jones, é um músico, compositor e produtor musical brasileiro. Alcançou projeção nacional como guitarrista da
                        banda de rock Capital Inicial, que fundou ao lado dos irmãos Fê Lemos e Flávio Lemos em 1982.
                    </p>
                </div>

                <div id="divFLAVIO_LEMOS" name="nm_divFLAVIO_LEMOS">
                    <p>
                        <img class="css" src="img/capital inicial/fl.jpg" width="150px;" height="130px;">
                        Flávio Miguel Villar de Lemos, mais conhecido como Flávio Lemos (Rio de Janeiro, 29 de outubro de 1963), é um músico brasileiro,
                        baixista da banda brasileira Capital Inicial, da qual foi fundador junto de seu irmão, o baterista Fê Lemos. Também tocou na banda
                        Aborto Elétrico. Ele foi interpretado por Daniel Passi na cinebiografia Somos Tão Jovens, de 2013.
                    </p>
                </div>

                <div id="divFE_LEMOS" name="nm_divFE_LEMOS">
                    <p>
                        <img class="css" src="img/capital inicial/felemos.jpg" width="150px;" height="130px;">
                        Antônio Felipe Villar de Lemos, mais conhecido como Fê Lemos (Rio de Janeiro, 18 de junho de 1962), é o baterista e
                        fundador da banda Capital Inicial. Também tocou na banda Aborto Elétrico, ambas ao lado de seu irmão, o baixista Flávio
                        Lemos. Ele foi interpretado por Bruno Torres na cinebiografia Somos Tão Jovens, de 2013.
                    </p>
                </div>

                <div id="divBOZZO_BARRETI" name="nm_divBOZZO_BARRETI">
                    <p>
                        <img class="css" src="img/capital inicial/bb.jpg" width="150px;" height="130px;">
                        Em 1978, Fê Lemos, voltou de uma estadia na Inglaterra para Brasília, onde seu pai dava aulas na Universidade de Brasília (UnB).
                        Ele se juntou a um grupo de jovens fãs de punk rock do conjunto de quatro prédios, apelidado "Turma da Colina", que incluía Renato
                        Russo.
                    </p>
                </div>
            </section>

            <nav>
                <h3>Créditos</h3>
                <ul>
                    <li><a href="#" onMouseOver="mostraLayer('divDINHO_OURO_PRETO');" onMouseOut="escondeLayer('divDINHO_OURO_PRETO');">Dinho Ouro Preto</a> – Voz.</li>
                    <li><a href="#" onMouseOver="mostraLayer('divLORO_JONES');" onMouseOut="escondeLayer('divLORO_JONES');">Loro Jones</a> – Guitarra.</li>
                    <li><a href="#" onMouseOver="mostraLayer('divFLAVIO_LEMOS');" onMouseOut="escondeLayer('divFLAVIO_LEMOS');">Flávio Lemos</a> – Baixo.</li>
                    <li><a href="#" onMouseOver="mostraLayer('divFE_LEMOS');" onMouseOut="escondeLayer('divFE_LEMOS');">Fê Lemos</a> – Bateria.</li>
                    <li><a href="#" onMouseOver="mostraLayer('divBOZZO_BARRETI');" onMouseOut="escondeLayer('divBOZZO_BARRETI');">Bozzo Barretti</a> – Teclados.</li>
                </ul>
            </nav>

            <footer>
                <a href="capital_inicial.php"><button>Voltar para os álbuns do Capital Inicial</button></a>
                <a href="index.php"><button>Home</button></a>
            </footer>

        </section>

    </main>

    <script type="text/javascript" src="js/Country.js"></script>

</body>

</html>