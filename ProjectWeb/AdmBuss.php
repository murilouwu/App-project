<?php
    include('assets/php/PhpMain.php');
    $html = new HtmlBased();
    $html->HeaderEcho(
        'Administrar', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, 'assets/css/ADM.css'],
            [2, 'assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        'assets/imgs/Logo.png'
    );
?>
<body>
    <div class="TopBoard">
        <img class="logo" src="assets/imgs/Logo2.png">
        <h1 class="Title">CRONOMETRAIS</h1>
    </div>
    <div class="leftBoard">
        <div class="perfil">
            <img class="perflImg" src="assets/imgs/luca.png">
            <h3 class="nameUser">Nome</h3>
        </div>
        <hr class="boardDiv">
        <div class="btnList">
            <div class="btnUl"><i class="fa-solid fa-bus"></i><button class="btn" onclick="iframeAlter(0, '.iframe')">Veiculos</button></div>
            <div class="btnUl"><i class="fa-solid fa-map"></i><button class="btn" onclick="iframeAlter(1, '.iframe')">Mapa</button></div>
            <div class="btnUl"><i class="fa-solid fa-sack-dollar"></i><button class="btn" onclick="iframeAlter(2, '.iframe')">Financeiro</button></div>
            <div class="btnUl"><i class="fa-solid fa-eye"></i><button class="btn" onclick="iframeAlter(3, '.iframe')">Visualização</button></div>
            <div class="btnUl"><i class="fa-solid fa-plus"></i><button class="btn" onclick="iframeAlter(4, '.iframe')">Adicionar</button></div>
            <div class="btnUl"><i class="fa-solid fa-hourglass-half"></i><button class="btn" onclick="iframeAlter(5, '.iframe')">Cronograma</button></div>
            <div class="btnUl">
                <hr>
            </div>
            <div class="btnUl"><i class="fa-solid fa-user"></i><button class="btn" onclick="iframeAlter(6, '.iframe')">Perfil</button></div>
            <div class="btnUl"><i class="fa-solid fa-gear"></i><button class="btn" onclick="iframeAlter(7, '.iframe')">Configuração</button></div>
            
            <div class="btnUl sair"><i class="fa-solid fa-door-open"></i><button class="btn" onclick="redirect('index.php')">Sair</button></div>
        </div>
    </div>
    <iframe src="DashboardAssets/main.php" frameborder="0" class="iframe"></iframe>
</body>
<script>
    const Linksforiframe = [
        "DashboardAssets/buss.php",
        "DashboardAssets/map.php",
        "DashboardAssets/money.php",
        "DashboardAssets/view.php",
        "DashboardAssets/add.php",
        "DashboardAssets/cron.php",
        "DashboardAssets/user.php",
        "DashboardAssets/confgs.php"
    ];
    function iframeAlter(page, ifrm){
        let iframeS = document.querySelector(ifrm);
        iframeS.setAttribute('src', Linksforiframe[page]);
    }
</script>
<?php 
    $html->foot();
?>