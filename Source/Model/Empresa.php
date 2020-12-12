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



function AlterarDadosPerfilEmpresa($nome, $cnpj, $endereco, $sobre, $login, $idEmpresa)
{
    include "banco.php";

    $dataAlterarDados = $conn->prepare("UPDATE empresa SET nome_empresa = :nome, cnpj_empresa = :cnpj,
                                        endereco_empresa = :endereco, sobre_empresa = :sobre, login_empresa = :loginEmpresa
                                        WHERE id_empresa = :idEmpresa");
    
    return $dataAlterarDados->execute(array(
        ":nome" => $nome,
        ":cnpj" => $cnpj,
        ":endereco" => $endereco,
        ":sobre" => $sobre,
        ":loginEmpresa" => $login,
        ":idEmpresa" => $idEmpresa
    ));
}