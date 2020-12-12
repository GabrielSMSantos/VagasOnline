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


function VagasCriadas($idEmpresa)
{
    include "banco.php";

    $dataEmpresa = $conn->query("SELECT * FROM vaga WHERE id_empresa =".$idEmpresa);
    $dataEmpresa->execute();

    return $dataEmpresa->fetchAll();
}


function CandidatosIncritosNaVaga($idVaga)
{
    include "banco.php";

    $dataCandidatosInscritos = $conn->query("SELECT * FROM inscritos_vaga WHERE id_vaga =".$idVaga);
    $dataCandidatosInscritos->execute();

    return $dataCandidatosInscritos->fetchAll();    
}