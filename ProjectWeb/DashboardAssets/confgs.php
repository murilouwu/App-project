<?php
    include('../assets/php/PhpMain.php');
    $html = new HtmlBased();
    $html->HeaderEcho(
        'Configuração', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, '../assets/css/ADM.css'],
            [2, '../assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        '../assets/imgs/Logo.png'
    );
?>

<?php
    $name = "<h4>Em Breve</h4>";
    echo $name;
?>

<?php 
    $html->foot();
?>