<?php
    session_start();
	include('assets/php/Config.php');
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
                    <div class="ul">Sobre</div>
                    <div class="ul" id="ulSubA" onclick="drop(this, '#blockExtern', 0, '#ulSubA', ['Entrar <','Entrar >'])">Entrar ></div>
                    <div class="blockExtern" id="blockExtern">
                        <div class="ul" onclick="redirect('login.php')">Entrar</div>
                        <div class="ul" onclick="redirect('login.php')">Cadastrar</div>
                    </div>
                </div>
            </div>
            <div class="TitleName">
                <label class="name">CRONOMETRAIS</label>
            </div>
            <div class="seep">
                <div class="search">
                    <i class="icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="pesquisa" class="pes">
                </div>
            </div>
        </header>
        <main class="meio">
            
        </main>
        <footer class="pe">
            <div class="etec" onclick="redirect('//etecperuibe.com.br/')">
                <img src="assets/imgs/mapa.png" class="logoEtec">
            </div>
            <div class="div">
                <label><i class="icon fa-solid fa-face-grimace"></i>Murilo Gimenez</label>
                <label><i class="icon fa-solid fa-face-grimace"></i>Rafael Rudink</label>
                <label><i class="icon fa-solid fa-face-grimace"></i>Ema</label>
                <label><i class="icon fa-solid fa-face-grimace"></i>Lary</label>
                <label><i class="icon fa-solid fa-face-grimace"></i>Bia</label>
                <label><i class="icon fa-solid fa-face-grimace"></i>Yasmin</label>
            </div>
            <div class="div2">
                <i class="tel fa-solid fa-phone"></i>
                <div class="boxText">Contato com o grupo:<br>...</div>
            </div>
        </footer>
    </body>
<?php 
    footEcho();
?>