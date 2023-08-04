<?php
    session_start();
	include('assets/php/Config.php');
    $checkPreset = array(1, 1);
	HeaderEcho(
        'Home', 
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
?>
    <body class="RaibowBg-1">
        <button onclick="subir()" class="irTop" id="irTop"></button>
        <header class="cabe">
            <div class="drop">
                <div class="btnDrop" onclick="drop(this, '#blockDrop', 0, '#textDrop', ['Menu v','Menu ᴧ'])">
                    <div class="logo"></div>
                    <label class="title" id="textDrop">Menu ᴧ</label>
                </div>
                <div class="block" id="blockDrop">
                    <div class="ul">Item A</div>
                    <div class="ul" id="ulSubA" onclick="drop(this, '#blockExtern', 0, '#ulSubA', ['Sub Menu <','Sub Menu >'])">Sub Menu ></div>
                    <div class="blockExtern" id="blockExtern">
                        <div class="ul">Sub item A</div>
                    </div>
                </div>
            </div>
            <div class="TitleName">
                <label class="name">Cronometrais</label>
            </div>
            <div class="seep">
                <div class="search">
                    <i class="icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="pesquisa" class="pes">
                </div>
            </div>
        </header>
        <main class="meio">
            <div class="linha">
                <div class="text">
                    <h1 class="title">ETEC SPORT</h1>
                    <div class="textAdd">
                        <img src="assets/img/<?php echo $_SESSION['esport'][$_SESSION['balls'][0]]?>ball.png" class="item">
                        <fieldset class="bolckTextAdd">
                            <legend class="legenda"><?php echo $_SESSION['esport'][$_SESSION['balls'][0]]?></legend>
                            <p class="palgrayAdd"><?php echo $_SESSION['adds'][$_SESSION['balls'][0]]?></p>
                        </fieldset>
                    </div>
                    <div class="textAdd addBlock2">
                        <img src="assets/img/<?php echo $_SESSION['esport'][$_SESSION['balls'][1]]?>ball.png" class="item">
                        <fieldset class="bolckTextAdd">
                            <legend class="legenda"><?php echo $_SESSION['esport'][$_SESSION['balls'][1]]?></legend>
                            <p class="palgrayAdd"><?php echo $_SESSION['adds'][$_SESSION['balls'][1]]?></p>
                        </fieldset>
                    </div>
                </div>
                <div class="imageAdd">
                    <div class="gradient"></div>
                </div>
                <div class="rede"></div>
            </div>
            
            <div class="linhaB">
                <div class="mostCard">
                    <div class="TipeCompeticion">
                        <div class="divssoria">
                            <div class="texts">
                                <div class="title">Interclasse</div>
                                <div class="text">
                                    Os Jogos Interclasse são torneios de diversas modalidades esportivas entre as salas da própria escola, em prol da integração dos alunos de uma forma divertida e descontraída.
                                </div>
                            </div>
                            <img src="assets/img/run.png" class="jogador" id="jogador1">
                        </div>
                        <div class="dateDoJogo">
                            Próximo jogo 12/05/2023
                        </div>
                    </div>
                    <div class="TipeCompeticion" style="border: none; transform: scaleX(-1);">
                        <div class="divssoria">
                            <div class="texts" style="transform: scaleX(-1);">
                                <div class="title">JEESP</div>
                                <div class="text">
                                    Os Jogos Escolares do Estado de São Paulo (JEESP) são um evento organizado pela Secretaria de Esportes do Estado de São Paulo, onde escolas de uma mesma região competem em torneios de várias modalidades esportivas.
                                </div>
                            </div>
                            <img src="assets/img/voleimanII.png" class="jogador" style="transform: scaleX(-1); animation: 10s nave2 linear infinite alternate-reverse backwards;">
                        </div>
                        <div class="dateDoJogo" style="transform: scaleX(-1);">
                            Próximo jogo 02/04/2023
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="linha">
                <div class="text Lin3prop2">
                    <h1 class="title">SKY DEVS</h1>
                    <div class="textAdd">
                        <img src="assets/img/<?php echo $_SESSION['esport'][$_SESSION['balls'][0]]?>ball.png" class="item">
                        <fieldset class="bolckTextAdd">
                            <legend class="legenda">Nossa Meta</legend>
                            <p class="palgrayAdd">O site foi realizado com o intuito de informar sobre o funcionamento dos eventos esportivos na ETEC de Peruíbe.</p>
                        </fieldset>
                    </div>
                    <div class="textAdd addBlock2">
                        <img src="assets/img/<?php echo $_SESSION['esport'][$_SESSION['balls'][1]]?>ball.png" class="item">
                        <fieldset class="bolckTextAdd">
                            <legend class="legenda">Run</legend>
                            <p class="palgrayAdd">O jogo criado pela Sky Devs, com objetivo de divulgar nosso projeto, um atleta que salta sobre barreiras, retratando uma modalidade do atletismo.</p>
                        </fieldset>
                    </div>
                </div>
                <div class="text Lin3prop2">
                    <div class="textAdd">
                        <img src="assets/img/<?php echo $_SESSION['esport'][$_SESSION['balls'][0]]?>ball.png" class="item">
                        <fieldset class="bolckTextAdd">
                            <legend class="legenda">Informações</legend>
                            <p class="palgrayAdd">Contamos com a descrição de nossos times representantes, em conjunto de um PDF detalhando as regras e normas de cada modalidade.</p>
                        </fieldset>
                    </div>
                    <div class="textAdd addBlock2">
                        <img src="assets/img/<?php echo $_SESSION['esport'][$_SESSION['balls'][1]]?>ball.png" class="item">
                        <fieldset class="bolckTextAdd">
                            <legend class="legenda">Os Eventos de Esporte</legend>
                            <p class="palgrayAdd"> Temos informações sobre o estado do chaveamento das competições.</p>
                        </fieldset>
                    </div>
                </div>
                <div class="rede"></div>
            </div>
            
            <div class="linhaB">
                <div class="Biglogo"></div>
                <fieldset class="text">
                    <legend class="leng">Quem nós somos:</legend>
                    A "Sky Dev's" foi criada com o propósito de solucionar o problema proposto no Hackathon 2023. Somos uma equipe composta por 9 membros, das turmas do 1°, 2° e 3° DES em harmonia com o 3° JODI. Nossa equipe planeja aderir uma iniciativa para a inclusão de PCDs em jogos escolares, assim daremos início na iniciativa por meio de um “Forms”, com o intuito de colher dados de pessoas que desejariam participar. Nós promovemos a prática de atividades físicas, devido ao seu grande impacto positivo na saúde física, mental e social do aluno, estimulando o aperfeiçoamento de suas habilidades motoras, cognitivas e afetivas. A prática de esportes desenvolve no aluno pontos importantes, como a cooperação, disciplina e principalmente trabalho em equipe.<br>
                    <b style="font-size: 3vh;">O céu é o limite!</b>
                </fieldset>
            </div>
        </main>
        <footer class="pe">
            <div class="etec" onclick="red('//etecperuibe.com.br/')">
                <img src="assets/img/etecLogo.png" class="logoEtec">
            </div>
            <div class="div">
                <label><i class="icon fa-solid fa-face-grin-tongue-squint"></i>Ana Beatriz Sodré</label>
                <label><i class="icon fa-solid fa-face-grin-stars"></i>Anna Beatriz</label> 
                <label><i class="icon fa-solid fa-face-tired"></i>Geovanna Maria</label>
                <label><i class="icon fa-solid fa-face-angry"></i>Leandro Gilioli</label>
                <label><i class="icon fa-regular fa-face-surprise"></i>Lucas Máximo</label>
                <label><i class="icon fa-regular fa-face-tired"></i>Luiz Pedro Sesti</label>
                <label><i class="icon fa-solid fa-face-sad-cry"></i>Matheus Pereira</label>
                <label><i class="icon fa-solid fa-face-grimace"></i>Murilo Gimenez</label>
                <label><i class="icon fa-solid fa-face-flushed"></i>Pedro Henrique Ferrari</label>
            </div>
            <div class="div2">
                <i class="tel fa-solid fa-phone"></i>
                <div class="boxText">Contato com o grupo:<br>skydevs2023@outlook.com</div>
            </div>
        </footer>
    </body>
<?php 
    footEcho();
?>