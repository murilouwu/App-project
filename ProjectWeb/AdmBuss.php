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
        <div class="logo"></div>
        <h1 class="Title">CRONOMETRAIS</h1>
    </div>
    <div class="leftBoard">
        <div class="perfil">
            <div class="perflImg"></div>
            <h3 class="nameUser">Nome</h3>
        </div>
        <hr class="boardDiv">
        <div class="btnList">
            <div class="btnUl"><button class="btn">Buss</button></div>
            <div class="btnUl"><button class="btn">Map</button></div>
            <div class="btnUl"><button class="btn">Finances</button></div>
            <div class="btnUl"><button class="btn">Visualition</button></div>
            <div class="btnUl"><button class="btn">Adicionate</button></div>
            <div class="btnUl"><button class="btn">Cronograma</button></div>
            <div class="btnUl">
                <hr>
            </div>
            <div class="btnUl"><button class="btn">Perfil</button></div>
            <div class="btnUl"><button class="btn">Configuration</button></div>
        </div>
    </div>
    <!--<iframe src="DashboardAssets/buss.php" frameborder="2"></iframe>-->
</body>
<?php 
    $html->foot();
?>