<?php
include('PhpMain.php'); //funcão amais como o Mensage

//configure o banco no http://localhost/phpmyadmin
$db = array(
    'host'=>'localhost',
    'user'=>'root',
    'pass'=> '',
    'nm'=>'CRONOMETRAIS'
);

$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['nm']) or die ('Sem Conecção ao database');

function InsertBd($Infs, $Dts, $Vls, $Vers, $Configs){
    $VersToText = '';
    foreach ($Vers as $key => $ver) {
        if ($key === 0) {
            $VersToText .= $Dts[$ver] . '= ' . $Vls[$ver];
        } else {
            $VersToText .= ' ' . $Configs[0][$key - 1] . ' ' . $Dts[$ver] . '= ' . $Vls[$ver];
        }
    }
    $query = 'SELECT * FROM ' . $Infs[0] . ' WHERE ' . $VersToText;
    $res = $GLOBALS['conn']->query($query);
    $rows = mysqli_num_rows($res);
    if($rows > 0){
        return $Configs['ERROR'][0];
    }else if($rows <= 0){
        $DtsToText = implode(', ', $Dts);
        $VlsToText = '';
        foreach ($Vls as $key => $vl) {
            if ($key === (count($Vls)- 1)) {
                $VlsToText .= $vl;
            } else {
                $VlsToText .= $vl.', ';
            }
        }

        $query = 'INSERT INTO ' . $Infs[0] . ' ( ' . $DtsToText . ' ) VALUES ( ' . $VlsToText . ' )';
        $res = $GLOBALS['conn']->query($query);
        
        if($res){
            $mensagem = 'Cadastro feito com sucesso!!!';
            return $mensagem;
        } else {
            return $Configs['ERROR'][1];
        }
    }
}

function GetBd($Infs, $Dts, $Vls) {
    $query = 'SELECT ';

    if (empty($Dts)) {
        $query .= '* ';
    } else {
        $query .= implode(', ', $Dts) . ' ';
    }

    $query .= 'FROM ' . $Infs[0] . ' WHERE ';
    
    $conditions = array();
    foreach ($Dts as $dt) {
        $conditions[] = $dt . " = '" . $Vls[$dt] . "'";
    }
    
    $query .= implode(' AND ', $conditions);
    $res = $GLOBALS['conn']->query($query);
    
    if($res){
        $result = array();

        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        
        return $result;
    }
}


?>
