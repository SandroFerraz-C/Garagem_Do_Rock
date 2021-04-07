<?php
include_once("header.php");
?>

<body>

    <main>
        <section class="content-section">

            <h1>Uma Outra Estação (1997)</h1>

            <p>
                - Uma Outra Estação é o oitavo e último álbum de estúdio da Legião Urbana, lançado em julho de 1997.
            </p>

            <p>
                O álbum foi lançado nove meses após a morte de seu líder, Renato Russo, e o fim das atividades do grupo. Foi o segundo álbum
                de menor vendagem do grupo perdendo apenas para - V (1991), mas mesmo assim foi certificado com Disco de Platina duplo pela ABPD,
                por conta de suas vendas significativas de mais de 750 mil cópias.
            </p>

            <p>
                Em 22 de outubro de 1996, 11 dias após a morte do vocalista Renato Russo, o guitarrista Dado Villa-Lobos, o baterista Marcelo Bonfá
                e o diretor artístio da EMI Music, João Augusto, anunciaram o fim das atividades do grupo que, por contrato, ainda devia três títulos
                à gravadora.
                <br /><br />
                Em março do ano seguinte, Dado decidiu trabalhar nas canções que sobraram das sessões para o disco anterior, - A Tempestade.
                Um total de 28 faixas foram gravadas, mas apenas 15 constaram no disco final. O guitarrista assinou a produção com Tom Capone,
                que já havia auxiliado a banda na gravação do disco anterior, quando era diretor do AR Estúdios, embora não constasse nos
                créditos.
            </p>

            <p>
                A capa de - Uma Outra Estação traz uma ilustração de Marcelo inspirada por Brasília, a cidade natal da banda.
                <br />
                A primeira página do encarte trazia a frase: "Ouça este disco da primeira à última faixa. Esta é a história de nossas vidas". A penúltima
                tinha uma lista de instituições e a mensagem: "Sinta-se bem contribuindo com as seguintes instituições que precisam da sua ajuda".
                O encarte marca também a volta da frase Urbana Legio Omnia Vincii ("Legião Urbana vence tudo", em latim), que figurou em todos os discos do
                grupo exceto - A Tempestade.
            </p>
            <br />

            <p>Duração do álbum: 60 min. 22 seg.</p>
            <p>Gravadora(s): EMI-Odeon.</p>
            <p>Produção: Dado Villa-Lobos e Tom Capone.</p>
            <br />

            <p>O álbum atingil certificação:</p>

            <div class="tabela">
                <table border="1px" width="45%">

                    <tr>
                        <td width="15%" height="10%">Nivel</td>
                        <td width="15%">Álbuns Vendidos</td>
                    </tr>

                    <tr>
                        <td width="15%"> Platina </td>
                        <td> + 300.000 (Brasil)</td>
                    </tr>

                </table>
            </div>
            <br />

            <section class="disco">
                <table id="demo-table">
                    <iframe src="https://open.spotify.com/embed/playlist/0I5Ok6mBtGfCaqMcQQlYQJ" width="100%" height="850" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                </table>
            </section>

            <section>
                <div id="divRENATO_RUSSO" name="nm_divRENATO_RUSSO">
                    <p>
                        <img class="css" src="img/legiao urbana/rr.jpg" width="150px;" height="130px;">
                        Renato Manfredini Júnior, "Renato Russo", ( 27 de março de 1960, 11 de outubro de 1996), foi um cantor, compositor,
                        produtor e multi-instrumentista brasileiro, célebre por ter sido líder, vocalista e fundador da banda de rock Legião Urbana.
                        <br />
                        Em outubro de 2008, a revista Rolling Stone promoveu a Lista dos #100 Maiores Artistas da Música Brasileira,
                        em que Renato Russo ocupa o #25° lugar.
                    </p>
                </div>

                <div id="divDADO_VILLA-LOBOS" name="nm_divDADO_VILLA-LOBOS">
                    <p>
                        <img class="css" src="img/legiao urbana/dvl.jpg" width="150px;" height="130px;">
                        Eduardo Dutra Villa-Lobos, "Dado Villa-Lobos", é um músico brasileiro nascido na Bélgica, mais conhecido por seu
                        trabalho como guitarrista na banda de rock brasiliense Legião Urbana, e também por ser sobrinho-neto do compositor
                        clássico Heitor Villa-Lobos.
                    </p>
                </div>

                <div id="divMARCELO_BONFA" name="nm_divMARCELO_BONFA">
                    <p>
                        <img class="css" src="img/legiao urbana/mb.jpg" width="150px;" height="130px;">
                        Marcelo Augusto Bonfá é um baterista brasileiro, célebre como membro fundador da banda de rock alternativo Legião
                        Urbana.
                        <br />
                        No ano de 2000 Marcelo Bonfá lançou seu primeiro trabalho solo, - O Barco Além do Sol, pela gravadora Trama,
                        tendo vendagem superior a 30 mil cópias.
                    </p>
                </div>
            </section>

            <nav>
                <h3>Crédito:</h3>
                <ul>
                    <li><a href="#" onMouseOver="mostraLayer('divRENATO_RUSSO');" onMouseOut="escondeLayer('divRENATO_RUSSO');"> Renato Russo</a> – Voz.</li>
                    <li><a href="#" onMouseOver="mostraLayer('divDADO_VILLA-LOBOS');" onMouseOut="escondeLayer('divDADO_VILLA-LOBOS');"> Dado Villa-Lobos</a> – Guitarra.</li>
                    <li><a href="#" onMouseOver="mostraLayer('divMARCELO_BONFA');" onMouseOut="escondeLayer('divMARCELO_BONFA');"> Marcelo Bonfá</a> – Bateria.</li>
                </ul>
            </nav>

            <footer>
                <a href="legiao_urbana.php"><button>Voltar para os álbuns do Legião Urbana</button></a>
                <a href="index.php"><button>Home</button></a>
            </footer>

        </section>

    </main>

    <script type="text/javascript" src="js/Country.js"></script>

</body>

</html>