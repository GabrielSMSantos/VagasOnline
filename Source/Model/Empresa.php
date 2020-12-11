<?php

function getEmpresa($id)
{
    include "banco.php";

    $dataNomeEmpresa = $conn->query("SELECT * FROM empresa WHERE id_empresa =".$id);
    $dataNomeEmpresa->execute();
    
    return $dataNomeEmpresa->fetch();
}

function BuscarEmpresas()
{
    include "banco.php";

    $dataBuscarEmpresas = $conn->query("SELECT * FROM empresa");
    $dataBuscarEmpresas->execute();

    return $dataBuscarEmpresas->fetchAll();
}

