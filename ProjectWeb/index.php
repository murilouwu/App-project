<?php
	include('assets/php/PhpMain.php');
	$html = new HtmlBased();
    $html->HeaderEcho(
        'Inicial', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, 'assets/css/index.css'],
            [2, 'assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        'assets/imgs/Logo.png'
    );
	$_SESSION['user'] = array();
?>
    <body class="RaibowBg-1 flexDisplay">
		<button class="irTop" style="background-image: url('https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/nigger.png');"></button>
		<!--tolls-->
		<div class="Block-top flexDisplay">
			<div class="certerTop flexDisplay">
				<div class="logoTop"></div>
				<div class="FastAcess">
					<button class="topicOne bntScroll">O que é este Site</button>
					<button class="topicOne bntScroll">Diferencial</button>
					<button class="topicOne bntScroll">Entrar</button>
					<button class="topicOne bntScroll">Desenvolvedores</button>
				</div>
				<button class="MenuBar" onclick="menuTolls(this, 1, '.FastAcess')"><i class="fa-solid fa-bars"></i></button>
			</div>
		</div>
		<!--"sumário"-->
		<div class="Block-One flexDisplay">
			<div class="BigBlockOne flexDisplay">
				<div class="textOne flexDisplay">
					<button class="topicOne bntScroll">O que é este Site</button>
					<button class="topicOne bntScroll">Diferencial</button>
					<button class="topicOne bntScroll">Entrar</button>
					<button class="topicOne bntScroll">Desenvolvedores</button>
				</div>
				<div class="text2One flexDisplay">
					<button class="btnLinkApp" onclick="redirect('https:\\longdogechallenge.com/')">Baixe o App <i class="fa-solid fa-circle-arrow-right"></i></button>
				</div>
			</div>
			<div class="shortBlockOne flexDisplay">
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-book-open"></i>
					<p class="palagrafyOne">Melhor a acessibilidade em transportes públicos, uma maior agilidade na procura de rotas rodoviárias, pontos de embarque e desembarque, visualização em tempo real dos veículos.</p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-users"></i>
                    <p class="palagrafyOne">Transportes públicos com maior acessibilidade aos PCDs. Carteira Digital para PCDs, proporcionando aos passageiros uma locomoção mais segura.</p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-user-pen"></i>
                    <p class="palagrafyOne">Cadastro específico para contratação ou negociação de empresas interessadas em nossos serviços.</p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-sack-xmark"></i>
                    <p class="palagrafyOne">Seja Usuário Premium e tenha, por exemplo: encaminhamento de localização em tempo real, ou análise de trajeto do veículo sincronicamente. Entre outras funções.</p>
				</div>
			</div>
		</div>
		<div class="Block-Two flexDisplay">
			<div class="meioBlock2 flexDisplay">
				<div class="textBlock2 flexDisplay">
					<h2>O que é este Site?</h2>
					<p>O site do Cronometrais tem o objetivo de fornecer as empresas interessadas, em facilitar o uso de seus clientes por meio da nossa aplicação.</p>
				</div>
				<img src="https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/luca.png" class="imgReprBlock2">
			</div>
			<div class="meioBlock2 typeMain2-Block2 flexDisplay">
				<img src="https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/bitcoin.png" class="imgReprBlock2">
				<div class="textBlock2 flexDisplay">
					<div class="blockIconBlock2 flexDisplay">
						<i class="fa-solid fa-globe"></i>
						<h4>Web</h4>
					</div>
					<div class="blockIconBlock2 cor2-Block2 flexDisplay">
						<i class="fa-solid fa-book-open-reader"></i>
						<h4>App</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="Block-Tre flexDisplay">
			<div class="cardMost-tre flexDisplay">
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-star"></i>
			    <p class="cardTextTre flexDisplay"><label>Carteira Digital Para PCDs</label>Opção de criar uma carteira de identificação, substituindo o cordão de identificação para deficiências ocultas e autismo.</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-cube"></i>
			    <p class="cardTextTre flexDisplay"><label>Compartilhamento de rota</label>Encaminhamento por meio de um código da rota para compartilhar, por exemplo, via WhatsApp.</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-address-book"></i>
			    <p class="cardTextTre flexDisplay"><label>transparente</label>O sistema é transparente as empresas associadas, facilitando sua administração.</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-heart"></i>
			    <p class="cardTextTre flexDisplay"><label>Bem-vindo</label>Agora que sabe sobre nós, aproveite sua experiência No sistema CRONOMETRAIS.</p>
			  </div>
			</div>
		</div>
		<div class="Block-Two flexDisplay">
			<div class="meioBlock2 flexDisplay">
				<div class="textBlock2 flexDisplay">
					<h2>Entre e Partícipe!</h2>
					<p>Faça sua conta e administre os ônibus e Vans da sua empresa por aqui</p>
				</div>
				<img src="https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/joia.png" class="imgReprBlock2">
			</div>
			<div class="meioBlock2 typeMain2-Block2 flexDisplay">
				<div class="textBlock4 flexDisplay">
					<div class="blockIconBlock2 cor2-Block4 flexDisplay">
						<i class="fa-solid fa-person-walking-arrow-right"></i>
						<a class="BtnEntrarBlock4" href="login.php?log=0">Entrar</a>
					</div>
					<div class="blockIconBlock2 cor2-Block2 cor2-Block4 flexDisplay">
						<i class="fa-solid fa-user-plus"></i>
						<a class="BtnEntrarBlock4 cssBlock4" href="login.php?log=1">Cadastrar-se</a>
					</div>
				</div>
			</div>
		</div>
		<div class="Block-Five flexDisplay">
			<div class="centerBlock5 flexDisplay">
				<div class="TextBlock5 flexDisplay">
					<h3>Cronometrais</h3>
					<p>Essa é a equipe por trás do projeto! Somos:<br>Emanuelle a administradora;<br>Murilo e Rafael os programadores;<br>Ana Beatriz, Laryssa e Yasmin, as da documentação, entre outros.<br>Todos da ETEC de Peruíbe, unimos para criar este projeto!</p>
				</div>
				<div class="developerBlock5 flexDisplay">
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/91744500?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Murilo G. - Developers</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/92901966?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Rafael R. - Developers</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/91742929?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Laryssa P.- Scrum Master</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/92957326?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Emanuelle G. - Product Owner</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/106540506?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Ana Beatriz S. - Scrum Master</label>
                    </div>
                    <div class="membersUser">
                        <img src="https://avatars.githubusercontent.com/u/92801590?v=4" class="perfilBlock5">
					    <label class="lbBlock5">Yasmin C. - Scrum Master</label>
                    </div>
				</div>
			</div>
		</div>
        <script type="text/javascript">
            function Scroll0Display(item) {
                let fun = window.scrollY === 0 ? 0 : 1;
                ocultar(item, fun);
            }
			window.addEventListener("load", ()=>{ Scroll0Display('.irTop'); });
			window.addEventListener("scroll", ()=>{ Scroll0Display('.irTop'); });

			document.querySelector(".irTop").addEventListener("click", function() {
			    window.scrollTo({ top: 0, behavior: 'smooth' });
			});
			document.querySelector(".logoTop").addEventListener("click", function() {
			    window.scrollTo({ top: 0, behavior: 'smooth' });
			});

			let scrollsTops = [1000, 1750, 2500, 3300, 1000, 1750, 2500, 3300];

			const buttons = document.querySelectorAll('.bntScroll');

			buttons.forEach((button, index) => {
			    button.addEventListener('click', () => {
			        const scrollDistance = scrollsTops[index];
			        window.scrollTo({ top: scrollDistance, behavior: 'smooth' });
			    });
			});

			function menuTolls(btn, fun, div){
				ocultar(div, fun);

				let invertFun = fun==0? 1:0;
				let res = "menuTolls(this, "+invertFun+", '"+div+"')";
				btn.setAttribute('onclick', res);
				
				let icon = ['<i class="fa-solid fa-bars"></i>', '<i class="fa-solid fa-circle-xmark"></i>'];				
				btn.innerHTML = icon[fun];
			}
		</script>
    </body>
<?php 
    $html->foot();
?>