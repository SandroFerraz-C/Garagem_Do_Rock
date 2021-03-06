<?php
include_once("header.php");
?>

<body>

    <main>
        <section class="content-section">

            <h1>¡Tchau Radar! (1999)</h1>

            <p>
                - ¡Tchau Radar! é o décimo álbum dos Engenheiros do Hawaii, produzido e lançado em 1999.
            </p>

            <p>
                O disco marca a entrada da banda na gravadora Universal Music Group, um ano após a rescisão de contrato com a BMG e o lançamento
                do Box "Infinita Highway", com os dez álbuns que a banda lançou até então. Entre seus principais sucessos, estão as canções
                "Eu Que Não Amo Você", "Negro Amor" (versão de It's All Over Now, Baby Blue, de Bob Dylan), "3x4" (canção de Humberto Gessinger
                dedicada a Adriane Sesti, sua esposa) e "Cruzada", regravação da composição de Márcio Borges e Tavinho Moura.
            </p>
            <br />

            <p>Duração do álbum: 46 min. 34 seg.</p>
            <p>Gravadora(s): Universal Music.</p>
            <p>Produção: Alexandre Agra.</p>
            <br />

            <section class="disco">
                <table id="demo-table">
                    <iframe src="https://open.spotify.com/embed/playlist/6bJxkwW0wt93BQJycZnlRg" width="100%" height="700" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                </table>
            </section>

            <section>
                <div id="divHUMBERTO_GESSINGER" name="nm_divHUMBERTO_GESSINGER">
                    <p>
                        <img class="css" src="img/engenheiros do hawaii/hg.jpg" width="150px;" height="130px;">
                        Humberto Gessinger (Porto Alegre, 24 de dezembro de 1963) é um vocalista, baixista, pianista, gaitista, violonista,
                        acordeonista e escritor brasileiro. Era o vocalista e líder da banda Engenheiros do Hawaii, fez turnê ao lado do
                        violonista Duca Leindecker no projeto Pouca Vogal. Seu estilo musical é predominantemente o Rock, mas possui
                        referencias musicais gaúchas.
                    </p>
                </div>

                <div id="divLUCIANO_GRANJA" name="nm_divLUCIANO_GRANJA">
                    <p>
                        <img class="css" src="img/engenheiros do hawaii/lg.jpg" width="150px;" height="130px;">
                        Luciano Granja, 49 anos, é um dos grandes guitarristas gaúchos. Passou a ser conhecido no cenário do rock no Brasil
                        em 1996 quando foi convidado a integrar a banda Engenheiros do Hawaii, juntamente com o baterista Adal Fonseca.
                        Com a necessidade de experimentar coisas novas, Luciano saí dos engenheiros e monta a banda Massa Crítica.
                    </p>
                </div>

                <div id="divADAL_FONSECA" name="nm_divADAL_FONSECA">
                    <p>
                        <img class="css" src="img/engenheiros do hawaii/af.png" width="150px;" height="130px;">
                        Adalberto da Costa Fonseca Filho, mais conhecido como Adal Fonseca ( 26 de outubro de 1972) é um baterista brasileiro.
                        <br />
                        "Comecei a tocar aos 13 anos, até tarde para quem desde guri assistia os irmãos mais velhos ensaiarem quase todo dia na minha mãe".
                        <br />
                        Foi integrante dos Engenheiros do Hawaii de 1996 até 2001 e em 2011 na volta da banda Kid Abelha passou a integrá-la.
                    </p>
                </div>
            </section>

            <nav>
                <h3>Créditos</h3>
                <ul>
                    <li><a href="#" onMouseOver="mostraLayer('divHUMBERTO_GESSINGER');" onMouseOut="escondeLayer('divHUMBERTO_GESSINGER');"> Humberto Gessinger</a> – Vocal.</li>
                    <li><a href="#" onMouseOver="mostraLayer('divLUCIANO_GRANJA');" onMouseOut="escondeLayer('divLUCIANO_GRANJA');"> Luciano Granja</a> – Guitarra.</li>
                    <li><a href="#"> Lucio Dorfman</a> – Teclado.</li>
                    <li><a href="#" onMouseOver="mostraLayer('divADAL_FONSECA');" onMouseOut="escondeLayer('divADAL_FONSECA');"> Adal Fonseca</a> – Bateria.</li>
                </ul>
            </nav>

            <footer>
                <a href="engenheiros_do_hawaii.php"><button>Voltar para os álbuns dos Engenheiros do Hawaii</button></a>
                <a href="index.php"><button>Home</button></a>
            </footer>

        </section>

    </main>

    <script type="text/javascript" src="js/Country.js"></script>

</body>

</html>