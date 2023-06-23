<?php
	session_start();
	include('assets/php/Config.php');
    $checkPreset = array(1, 1);
	HeaderEcho(
        'Home', 
        [
            ['assets/css/index.css'], 
            ['assets/java/script.js','https://kit.fontawesome.com/39cab4bf95.js','https://code.jquery.com/jquery-3.2.1.slim.js'],
            'assets/imgs/Logo.png',
        ],
        [
            [1,1,'crossorigin="anonymous"'],
            [1,2,'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"']
        ]
    );
?>
    <body class="RaibowBg-1">
        
    </body>
<?php 
    footEcho();
?>