<!DOCTYPE html>
<!-- doctype informa ao agente de usuario a versao do tml que dee ser rederizada -->

<html lang="pt-br">

<head>

	<title>Garage Of Rock!!</title>

	<meta charset="utf-8">
	<meta name="Author" content="Sandro">
	<meta name="descrition" content="Lista de documentos">
	<meta name="keywords" content="html5, tecnologia">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style_index3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/layer_geral.css">

</head>

<body>

	<!-- https://github.com/SandroFerraz-C/Garagem-do-Rock.git -->
	<div id="principal">

		<header class="hero">

			<div class="img">

				<img class="foto" src="img/a.png" />
				<img class="foto" src="img/acdc_Highway_to_Hell.jpg" />
				<img class="foto" src="img/aerosmith_2.png" />
				<img class="foto" src="img/black_sabbath_2.jpg" />
				<img class="foto" src="img/bon_jovi_2.jpg" />
				<img class="foto" src="img/led.jpg" />
				<img class="foto" src="img/gunsnroses.jpg" />
				<i class="fad fa-biohazard"></i>
			</div>

			<main>
				<nav class="top-nav">

					<ul>
						<li><a class="vote" href="vote.php">Vote na Sua banda Favorita</a></li>
						<li><a class="loja" href="classic.php">TOP 100 CLASSICOS DO ROCK (Com legenda em PT-BR)</a></li>
						<a href="sair.php">Sair</a>
					</ul>

					</nave>
		</header>

		<section class="content-section">
			<article>
				<section class="historia">
					<header class="content-header">
						<h2 class="h2">Um pouco da história do Rock! <a href="tritono.php" target="blank"> <img class="tritono" src="img/tritono2.jpg" width="3%;"></a>
						</h2>
					</header>
					<br /><br />
					<section class="a">
						<p>
							O rock and roll, conhecido também como rock'n'roll, é um estilo musical que surgiu nos Estados Unidos
							no final da década de 40 e início da década de 50, com raízes nos estilos musicais norte-americanos, como:
							<a href="#" onMouseOver="mostraLayer('divCountry');" onMouseOut="escondeLayer('divCountry');">Country</a>,
							<a href="#" onMouseOver="mostraLayer('divBlues');" onmouseOut="escondeLayer('divBlues');">Blues</a>,
							<a href="#" onMouseOver="mostraLayer('divR_B');" onMouseOut="escondeLayer('divR_B');">R&B</a> e
							<a href="#" onMouseOver="mostraLayer('divGospel');" onMouseOut="escondeLayer('divGospel');">Gospel</a>,
							e que rapidamente se espalhou para o resto do mundo.
						</p>

						<div id="genero">
							<div id="divCountry" name="nm_divCountry">
								<p>
									Música country é um gênero de música popular dos Estados Unidos,
									originado no sul do País na década de 1920. O estilo tem suas raizes no sudeste dos Estados Unidos,
									como a música tradicional (especialmente a música do povo dos Apalaches) e blues.
								</p>
							</div>

							<div id="divBlues" name="nm_divBlues">
								<p>
									O blues é um gênero e forma musical originado por afro-americanos no extremo sul dos Estados Unidos
									em torno do fim do século XIX. O gênero se desenvolveu a partir de raízes das tradições musicais africanas,
									canções de trabalho afro-americanas, spirituals e música tradicional
								</p>
							</div>

							<div id="divR_B" name="nm_divR_B">
								<p>
									Rhythm and blues ou R&B é um termo comercial introduzido nos Estados Unidos no final da década de 1940
									pela revista Billboard. O termo foi usado originalmente para descrever gravações comercializadas predominantemente
									por artistas Afro-americanos, num momento em que um estilo baseado no jazz com uma batida pesada e insistente estava
									se tornando mais popular.
								</p>
							</div>

							<div id="divGospel" name="nm_divGospel">
								<p>
									Música gospel é um tipo de música composto para
									expressar a crença, individual ou comunitária, predominantemente cristã.
								</p>


								<p>
									A música gospel é escrita e executada por muitos motivos com motivo religioso ou até cerimonial,
									ou como um produto de entretenimento para o mercado comercial. No entanto, o tema obrigatoriamente
									abordado na música gospel é o louvor, adoração ou graças a Deus.
								</p>
							</div>
						</div>
						<br />

						<div id="instrumento" name="nm_divInstrumentos">

							<p>
								O instrumento mais comum neste estilo é a

								<a href="#" onMouseOver="mostraLayer('divGuitarra');" onMouseOut="escondeLayer('divGuitarra');">Guitarra</a>,
								sempre presente nas bandas, podendo possuir um único instrumentista, ou dois com funções diferenciadas,

								(<a href="#" onMouseOver="mostraLayer('divBase');" onMouseOut="escondeLayer('divBase');">Guitarrista Base</a> e
								<a href="#" onMouseOver="mostraLayer('divSolo');" onMouseOut="escondeLayer('divSolo');">Guitarra Solo</a>).
							</p>

							<p>
								Normalmente, as bandas, além do instrumento predominante, a guitarra, são formadas por um:

								<a href="#" onMouseOver="mostraLayer('divContra');" onMouseOut="escondeLayer('divContra');">Contrabaixo</a>
								(após 1950, um

								<a href="#" onMouseOver="mostraLayer('divEletrico');" onMouseOut="escondeLayer('divEletrico');">Baixo Elétrico</a>) e uma

								<a href="#" onMouseOver="mostraLayer('divBateria');" onMouseOut="escondeLayer('divBateria');">Bateria</a>.
								Nos primórdios do rock and roll, também se utilizava o

								<a href="#" onmouseover="mostraLayer('divPiano');" onmouseout="escondeLayer('divPiano');">Piano</a> e/ou o

								<a href="#" onmouseover="mostraLayer('divSax');" onmouseout="escondeLayer('divSax');">Saxofone</a>
								frequentemente como instrumentos bases, mas estes foram substituídos ou suplantados geralmente pela guitarra a
								partir da metade da decada de 50.
							</p>
							<br />

							<p>
								A batida é essencialmente um Blues com Country com

								<a href="#" onmouseover="mostraLayer('divTempo');" onmouseout="escondeLayer('divTempo');">contratempo</a>
								acentuado, este último quase fornecido por uma

								<a href="#" onmouseover="mostraLayer('divCaixa');" onmouseout="escondeLayer('divCaixa');">Caixa-Clara</a>.
								A enorme popularidade e eventual visão no mundo inteiro do rock and roll deu-lhe um impacto social único.
								Muito além de ser simplesmente um gênero musical, como visto nos filmes e na televisão e de acordo com a mídia
								que se desenvolvia na época, influenciou estilos de vida, moda, atitudes e linguagem.
							</p>

							<div id="divGuitarra" name="nm_divGuitarra">

								<p>
									<img class="css" src="img/guitarra.jpg" width="150px;" height="130px;">
									Refere-se a uma série de instrumentos de cordas dedilhada, que possuem geralmente de 6 a 12 cordas tensionadas
									ao longo do instrumento e possuem um corpo com formato aproximado de um 8
									(embora também existam em diversos outros formatos), além de um braço, sobre o qual as cordas passam,
									permitindo ao executante controlar a altura da nota produzida.
								</p>

							</div>

							<div id="divBase" name="nm_Base">

								<p>
									Guitarra Rítmica ou, como é mais conhecida, Guitarra Base, é a forma usualmente utilizada para referir o
									acompanhamento rítmico e harmônico de um vocalista, principalmente para outros instrumentos em um conjunto.
									Se a bateria fornece o esqueleto rítmico da música, a base oferece a estrutura harmônica da música.
									Tal elemento é extremamente essencial à composição.
								</p>
							</div>

							<div id="divSolo" name="nm_Solo">

								<p>
									Guitarra solo ou guitarra líder é a guitarra principal executada por um músico em uma banda,
									que costuma fazer a parte melódica da canção. Geralmente esta definição existe em contraponto a uma
									guitarra base; isto ocorre quando há mais de um guitarrista em uma mesma banda.
									Esta distinção é feita, mais comumente, em bandas de rock e metal, porém pode se aplicar à qualquer gênero
									musical que tenha guitarras.
								</p>

							</div>

							<div id="divContra" name="nm_divContra">

								<p>
									<img class="css" src="img/contrabaixo.jpg" width="150px;" height="130px;">
									O contrabaixo é um instrumento de cordas friccionadas por um arco, transpositor (soa uma oitava abaixo do que se lê na partitura),
									também tocado por pizzicato (beliscado em italiano), com os dedos.
									Dentre os instrumentos da família das cordas na orquestra é o registro mais grave e também o de maior tamanho.
									Usado em grandes orquestras em famílias de até 12 instrumentos e usado sozinho na música de câmara, jazz e música popular.
								</p>

							</div>

							<div id="divEletrico" name="nm_divEletrico">

								<p>
									<img class="css" src="img/baixo.jpg" width="150px;" height="130px;">
									O baixo elétrico tradicional e popular que a maioria das bandas de rock usa é muito similar a uma guitarra elétrica,
									mas com o corpo maior, um braço mais longo e uma escala mais extensa. Em geral,
									os baixos elétricos mais comuns possuem quatro cordas, e estas são afinadas, tradicionalmente,
									da mesma maneira que os contrabaixos de orquestra, sendo as mesmas notas que as quatro cordas grossas (graves)
									de uma guitarra (isto é, Mi, Lá, Ré, e Sol), mas cada uma destas cordas é afinada uma oitava mais grave, em tom,
									do que a guitarra.
								</p>

							</div>

							<div id="divBateria" name="nm_divBateria">

								<p>
									<img class="css" src="img/bateria.jpg" width="150px;" height="130px;">
									A bateria é um conjunto de tambores (de diversos tamanhos e timbres) e de pratos colocados de forma conveniente com a intenção
									de serem percutidos por um único músico, denominado baterista, geralmente, com o auxílio de um par de baquetas, vassourinhas
									ou bilros, embora, em alguns casos, certos executantes possam também usar as próprias mãos nuas para percutir o
									instrumento em questão.
								</p>

							</div>

							<div id="divPiano" name="nm_divPiano">

								<p>
									<img class="css" src="img/piano.jfif" width="150px;" height="130px;"> Piano, apócope derivado do italiano pianoforte,
									é um instrumento musical de cordas percussivas, segundo o sistema de classificação de Hornbostel-Sachs.
									<br><br>
									Para a produção do som, cada tecla (peça de madeira), ao ser percutida, aciona um único martelo
									(peça de madeira recoberta por material macio, geralmente o feltro) que, então, toca nas cordas esticadas e presas numa
									estrutura rígida de madeira ou de metal. As cordas percutidas vibram e produzem o som, que é amplificado pela grande caixa
									de ressonância.
								</p>

							</div>

							<div id="divSax" name="nm_divSax">

								<p>
									<img class="css" src="img/sax.jfif" width="150px;" height="130px;">
									Saxofone, também conhecido popularmente como sax, é um instrumento de sopro patenteado em 1846 pelo belga Adolphe Sax,
									um respeitado fabricante de instrumentos, que viveu na França no século XIX. Os saxofones são instrumentos transpositores, ou seja,
									a nota escrita não é a mesma nota que ouvimos (som real ou nota de efeito). A maior parte dos saxofones são em Si♭ (como o saxofone tenor)
									ou em Mi♭(como o saxofone alto e o barítono). O soprano é normalmente em Si♭.
								</p>
							</div>

							<div id="divTempo" name="nm_divTempo">

								<p>
									Na música, contratempo é um deslocamento do acento métrico natural do compasso.onde o acento que seria no tempo forte (naturalmente)
									acontece no tempo fraco através de um sinal de dinâmica como o sforzato. Outra maneira de caracterizar o contratempo é com o uso de
									ligaduras de portamento nos locais devidos que desloquem a métrica.
								</p>
							</div>

							<div id="divCaixa" name="nm_divCaixa">
								<p>
									<img class="css" src="img/CaixaClara.jfif" width="150px;" height="130px;">
									Caixa, tarola, tarol, caixeta clara ou, na designação original em inglês, snare drum é um tipo de tambor bimembranofone composto por um corpo
									cilíndrico de pequena seção, com duas peles fixadas e tensionadas por meio de aros metálicos, uma esteira de metal,
									constituída por pequenas molas de arame colocada em contato com a pele inferior, que vibra através da ressonância produzida sempre que a
									pele superior é percutida, produzindo um som repicado, característico das marchas militares.
								</p>

							</div>

						</div>
						<br /><br />

						<header class="content-header">
							<h2 class="h2">As Origens do Gênero.</h2>
						</header>
						<br /><br />

						<p> <img class="css" src="img/mae.jpg" width="150px; " alt="">

							O desenvolvimento do rock and roll foi um processo evolutivo, não há um registro único que pode ser identificado como
							inequivocamente "o primeiro" disco de rock and roll. Candidatos para o título de "primeiro disco de rock and roll"
							incluem "Strange Things Happening Everyday" de

							<a href="#" onmouseover="mostraLayer('divRosetta');" onmouseout="escondeLayer('divRosetta');">Sister Rosetta Tharpe</a> (1944);

							"Rock Awhile" de
							<a href="#" onmouseover="mostraLayer('divGoree');" onmouseout="escondeLayer('divGoree');">Goree Carter</a> (1949);

							"Rock the Joint" de
							<a href="#" onmouseover="mostraLayer('divJimy');" onmouseout="escondeLayer('divJimy');">Jimmy Preston</a> (1949),

							que mais tarde foi regravado por
							<a href="#" onmouseover="mostraLayer('divBill');" onmouseout="escondeLayer('divBill');">Bill Haley & His Comets</a>, em 1952;

							"Rocket 88" de
							<a href="#" onmouseover="mostraLayer('divJackie');" onmouseout="escondeLayer('divJackie');">Jackie Brenston</a>,
							gravada na Sun Records de Sam Phillips em março de 1951, em termos de sua grande impacto cultural em
							toda a sociedade americana e em outros lugares do mundo,

							"<a href="#" onmouseover="mostraLayer('divClock');" onmouseout="escondeLayer('divClock');">Rock Around the Clock</a>" de

							<a href="#" onmouseover="mostraLayer('divBillH');" onmouseout="escondeLayer('divBillH');">Bill Haley</a>, foi gravada
							em abril 1954, mas não foi um sucesso comercial até o ano seguinte, é geralmente reconhecido como um marco importante,
							mas foi precedida de muitas gravações das décadas anteriores em que os elementos do rock and roll pode ser claramente detectados.
							<img class="html" src="img/bill.jpg" width="150px; " alt="">
						</p>
						<br /><br /><br /><br />

						<header class="content-header">
							<h2 class="h2">Cultura adolescente.</h2>
						</header>
						<br />

						<p>
							Vários historiadores do rock afirmam que o rock and roll foi um dos primeiros gêneros musicais a definir uma faixa etária.
							Isso deu aos adolescentes uma sensação de pertencimento, mesmo quando estavam sozinhos. O rock and roll é frequentemente
							identificado com o surgimento da cultura adolescente entre a primeira geração baby boomer (Termo usado para pessoas nascidas entre 1946 e 1965; Anterior a Geração "X"),
							que tinha maior riqueza relativa e tempo de lazer e adotou o rock and roll como parte de uma subcultura distinta. Isso envolveu
							não apenas música, absorvida via rádio, compra de discos, jukeboxes e programas de TV como American Bandstand, mas também se
							estendeu a filmes, roupas, cabelos, carros e motos e linguagem distinta. A cultura jovem exemplificada pelo rock and roll foi
							uma fonte recorrente de preocupação para as gerações mais velhas, que se preocupavam com a delinquência juvenil e a rebelião
							social, principalmente porque em grande parte a cultura do rock and roll era compartilhada por diferentes grupos raciais e sociais.
						</p>
						<br />

						<div id="divRosetta" name="nm_Rosetta">

							<p>
								<img class="css" src="img/rosetta.jfif" width="150px;" height="130px;">
								Rosetta Tharpe (20 de março de 1915 – 9 de outubro de 1973) foi uma cantora, compositora e guitarrista de música gospel,
								teve grande popularidade na década de 1940, com uma mistura única de letras gospel e acompanhamento de início de blues e country music.
								Pioneira da música no século XX, Rosetta foi única ao misturar o gospel com o ritmo que seria futuramente conhecido como rock.
							</p>
						</div>

						<div id="divGoree" name="nm_divGoree">

							<p>
								<img class="css" src="img/Goree.png" width="150px;" height="130px;">
								Goree Carter, foi um cantor americano, guitarrista, baterista, compositor e soldado. Ele também foi creditado com os nomes artísticos
								Little T-Bone, Rocky Thompson e Gory Carter, e gravou música em gêneros de blues, como blues elétrico, jump blues e Texas blues,
								assim como rock and roll.
							</p>
							<p>
								Ele é mais conhecido por seu single de 1949, "Rock Awhile", que foi citado por várias fontes como o primeiro disco de rock and roll,
								apresentando um estilo de guitarra elétrica over-driven semelhante ao de Chuck Berry anos depois.
								Carter gravou "Rock Awhile" aos 18 anos, e sua redescoberta trouxe-lhe o reconhecimento postumamente como um antepassado do
								rock and roll.
							</p>

						</div>

						<div id="divJimy" name="nm_divJimy">

							<p>
								<img class="css" src="img/Jimy.jfif" width="150px;" height="130px;">
								James Alfred Smith Preston (18 de agosto de 1913 - 17 de dezembro de 1984), conhecido como Jimmy Preston,
								foi um líder de banda de R&B americano, saxofonista alto, baterista e cantor que deu uma contribuição importante
								para o rock and roll inicial.
							</p>

						</div>

						<div id="divBill" name="nm_divBill">

							<p>
								<img class="css" src="img/bill02.jpg" width="150px;" height="130px;">
								Bill Haley & His Comets foi uma banda americana de rock and roll, fundada em 1952 e continuou até a morte de Haley em 1981.
								A banda também era conhecida como Bill Haley and the Comets e Bill Haley's Comets (e variações dos mesmos). Do final de 1954 ao
								final de 1956, o grupo colocou nove singles no Top 20, um deles em primeiro lugar e mais três no Top Ten. O single
								"Rock Around the Clock" se tornou o single de rock and roll mais vendido da história do gênero e manteve essa posição por alguns anos.
							</p>

						</div>

						<div id="divJackie" name="divJackie">

							<p>
								<img class="css" src="img/jackie.jfif" width="150px;" height="130px;">
								Jackie Brenston (15 de agosto de 1930 - 15 de dezembro de 1979) foi um cantor e saxofonista norte-americano que gravou com a
								banda de Ike Turner a primeira versão da música proto-rock and roll "Rocket 88".
							</p>
							<p>
								Aprendeu a tocar saxofone tenor, se juntando a Ike Turner em 1950 como saxofonista e ocasionalmente como cantor.
								O sucesso local da banda de Ike, "Kings of Rhythm", levou B.B. King a recomendá-los à Sam Philips que era dono de um estúdio
								em Memphis, Tennessee, onde a banda acabou gravando algum material em março de 1951, incluindo a música "Rocket 88",
								esta sendo cantada por Brenston sendo também creditada em seu nome a letra.
							</p>

						</div>

						<div id="divClock" name="nm_divClock">

							<p>
								<img class="css" src="img/clock.jpg" width="150px;" height="130px;">
								"Rock Around the Clock" é uma canção de rock and roll no formato de blues 12-bar escrita por Max C. Freedman e James E. Myers
								(este último sob o pseudônimo "Jimmy De Knight") em 1952. A versão mais conhecida e mais bem-sucedida foi gravada por Bill Haley &
								His Comets em 1954 para a gravadora estadunidense Decca. Alcançou o topo das paradas nos Estados Unidos e no Reino Unido e entrou
								novamente na UK Singles Chart nos anos 1960 e 1970.
							</p>

						</div>

						<div id="divBillH" name="divBillH">

							<p>
								<img class="css" src="img/billH.jpg" width="150px;" height="130px;">
								Bill Haley ou Willian John Clifton (Highland Park, Michigan, 6 de julho de 1925 - 9 de fevereiro de 1981), foi um músico de
								rock and roll.
								<br>
								Ele é creditado por muitos o primeiro a popularizar este tipo de música no início dos anos 1950 com seu grupo
								Bill Haley & His Comets e a canção "Rock Around the Clock".
							</p>

						</div>

			</article>
		</section>
		<br /><br />

		<header class="content-header">
			<h2 class="h2">Albuns das Principais Bandas </h2>
		</header>

		<section class="content-section_album">


			<div class="img1 card01">

				<a href="acdc.php">
					<img class="ac_dc" src="img/acdc.png" height="250px;" width="210px;" alt="">
				</a>
			</div>
			<br />

			<div class="img1 card02">

				<a href="aerosmith.php">
					<img class="aerosmith" src="img/aerosmith.png" height="250px;" width="210px;" alt="">
				</a>
			</div>
			<br />

			<div class="img1 card03">

				<a href="angra.php">
					<img class="angra" src="img/angra.jpg" height="250px;" width="210px;" alt="">
				</a>
			</div>
			<br />

			<div class="img1 card04">

				<a href="black_sabbath.php">
					<img class="black_sabbath" src="img/black_sabbath.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card05">

				<a href="bon_jovi.php">
					<img class="bon_jovi" src="img/bon_jovi.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card06">

				<a href="barao_vermelho.php">
					<img class="barao_vermelho" src="img/barao.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card06">

				<a href="capital_inicial.php">
					<img class="capital_inicial" src="img/capital_inicial.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card07">

				<a href="deep_purple.php">
					<img class="deep_purple" src="img/deep_purple.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card08">

				<a href="eagles.php">
					<img class="eagles" src="img/eagles.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card06">

				<a href="engenheiros_do_hawaii.php">
					<img class="Engenheiros_do_Hawaii" src="img/engenheiros do hawaii/Engenheiros_do_Hawaii.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card09">

				<a href="foo_fighters.php">
					<img class="foo_fighters" src="img/foo_fighters.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card10">

				<a href="green_day.php">
					<img class="green_day" src="img/green_day.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card11">

				<a href="guns_n_roses.php">
					<img class="gnr" src="img/gnr.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card12">

				<a href="iron_maiden.php">
					<img class="iron_maden" src="img/ironmaiden.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card13">

				<a href="judas_priest.php">
					<img class="judas_priest" src="img/judaspriest.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card14">

				<a href="kiss.php">
					<img class="kiss" src="img/kiss.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card15">

				<a href="led_zeppelin.php">
					<img class="led_zeppelin" src="img/ledzeppelin.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card16">

				<a href="legiao_urbana.php">
					<img class="legiao" src="img/legiao.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card17">

				<a href="linkin_park.php">
					<img class="linkin_park" src="img/linkinpark.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card18">

				<a href="#">
					<img class="metallica" src="img/metallica.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card19">

				<a href="#">
					<img class="motorhead" src="img/motorhead.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card20">

				<a href="#">
					<img class="nirvana" src="img/nirvana.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card20">

				<a href="#">
					<img class="Os_Paralamas_do_Sucesso" src="img/Os_Paralamas_do_Sucesso.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card21">

				<a href="#">
					<img class="pink_floyd" src="img/pinkfloyd.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card22">

				<a href="#">
					<img class="queen" src="img/queen.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card23">

				<a href="#">
					<img class="ramones" src="img/ramones.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card24">

				<a href="#">
					<img class="raul_seixas" src="img/raulseixas.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card25">

				<a href="#">
					<img class="rhtp" src="img/rhcp.png" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card25">

				<a href="#">
					<img class="Sepultura" src="img/Sepultura.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card27">

				<a href="#">
					<img class="scorpions" src="img/scorpions.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card27">

				<a href="#">
					<img class="Skank" src="img/Skank.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card28">

				<a href="#">
					<img class="slayer" src="img/slayer.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card29">

				<a href="#">
					<img class="slipknot" src="img/slipknot.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card30">

				<a href="#">
					<img class="soad" src="img/soad.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card30">

				<a href="#">
					<img class="Titãs" src="img/Titãs.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card31">

				<a href="#">
					<img class="beetles" src="img/beetles.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card32">

				<a href="#">
					<img class="dors" src="img/dors.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card33">

				<a href="#">
					<img class="police" src="img/police.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card34">

				<a href="#">
					<img class="the_rolling_stone" src="img/the_rolling_stone.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card35">

				<a href="#">
					<img class="the_who" src="img/the_who.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card36">

				<a href="#">
					<img class="u2" src="img/u2.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />

			<div class="img1 card37">

				<a href="#">
					<img class="zz_top" src="img/zz_top.jpg" alt="" height="250px;" width="210px;">
				</a>
			</div>
			<br />
		</section>
		</section>
		</article>
		</main>

		<button class="btn23" data-toggle="collapse" data-target="#demo23" style="font-size: 09px;">Fontes de Pesquisa:</button>

		<div id="demo23" class="collapse">

			<ul>
				<li>
					- <a href="https://pt.wikipedia.org/wiki/Rock_and_roll" target="blank">
						wikipedia.com.br </a> ©2021
				</li>
		</div>

		<footer>
			<p class="rodape">Copyright &copy;2021</p>

		</footer>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<script src="http://code.jQuery.com/jQuery-latest.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/html5slider.js"></script>
	<script type="text/javascript" src="js/Country.js"></script>
</body>

</html>