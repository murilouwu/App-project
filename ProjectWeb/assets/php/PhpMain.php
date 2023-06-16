<?php
function HeaderEcho($Title, $assets){
    $res = '
        <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <script src="https://kit.fontawesome.com/39cab4bf95.js" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
                <link rel="stylesheet" type="text/css" href="'.$assets[0].'">
                <script src="'.$assets[1].'"></script>
                <link rel="shortcut icon" href="'.$assets[2].'">
                <title>'.$Title.'</title>
            </head>
    ';
    echo($res);
}

function mensage($txt){
    echo '<script>alert("'.$txt.'");</script>';
}

function upFileinPage($Files, $PastSaves){
    for($i=0; $i<count($PastSaves); $i++){
        $directory = dirname(__DIR__) . '/'.$PastSaves[$i];
        if(!is_dir($directory)){
            mkdir($directory, 0777, true);
        }
    }
}

function footEcho(){
    $res = '
        </html>
    ';
    echo($res);
}
?>