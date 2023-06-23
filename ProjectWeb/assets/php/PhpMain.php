<?php
function HeaderEcho($Title, $assets, $itemPlus) {
    $res = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    ';
    if (isset($assets[0]) && is_array($assets[0])) {
        foreach ($assets[0] as $cssLink) {
            $res .= '<link rel="stylesheet" type="text/css" href="' . $cssLink . '"';
            if (isset($itemPlus[0]) && is_array($itemPlus[0]) && $itemPlus[0][0] == 0) {
                $res .= ' ' . $itemPlus[0][2];
            }
            $res .= '>';
        }
    }
    if (isset($assets[1]) && is_array($assets[1])) {
        foreach ($assets[1] as $jsLink) {
            $res .= '<script src="' . $jsLink . '"';
            if (isset($itemPlus[1]) && is_array($itemPlus[1]) && $itemPlus[1][0] == 0) {
                $res .= ' ' . $itemPlus[1][2];
            }
            $res .= '></script>';
        }
    }

    $res .= '
            <link rel="shortcut icon" href="'.$assets[2].'">
            <title>'.$Title.'</title>
        </head>
    ';
    echo($res);
}


function mensage($txt){
    echo '<script>alert("'.$txt.'");</script>';
}

function upFileinPage($Files, $PastSaves) {
    $Ret = array();
    
    for ($i = 0; $i < count($PastSaves); $i++) {
        $directory = dirname(__DIR__) . '/' . $PastSaves[$i];
        
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
        
        $file = $Files[$i];
        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileDate = date('YmdHis');
        
        $newFileName = $fileName . $fileSize . $fileDate;
        $destination = $directory . '/' . $newFileName;
        
        move_uploaded_file($file['tmp_name'], $destination);
        
        $Ret[] = $destination;
    }
    
    return $Ret;
}



function footEcho(){
    $res = '
        </html>
    ';
    echo($res);
}
?>