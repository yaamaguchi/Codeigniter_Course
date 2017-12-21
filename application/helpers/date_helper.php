<?php

function dataPtBrParaMySQL($dataPtBr){
    $dataSplit = explode("/", $dataPtBr);
    //return $dataSplit[2]. "-" . $dataSplit[1]. "-" . $dataSplit[0];
    return "{$dataSplit[2]}-{$dataSplit[1]}-{$dataSplit[0]}";
}

function dataMySQLToBr($dataMySQL){
    $data = new DateTime($dataMySQL);
    return $data->format("d/m/Y");
}

?>