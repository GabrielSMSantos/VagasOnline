<?php

function logarCandidato($login, $senha) 
{
    require_once "banco.php";

    $dataCandidato = $conn->query("SELECT id_candidato, nome_candidato, login_candidato, senha_candidato FROM candidato WHERE login_candidato = '$login' AND senha_candidato = '$senha'");
    
    return $dataCandidato->fetch();
}

function logarEmpresa($login, $senha)
{
    require_once "banco.php";

    $dataEmpresa = $conn->query("SELECT login_empresa, senha_empresa FROM empresa WHERE login_empresa = '$login' AND senha_empresa = '$senha'");
    
    return $dataEmpresa->execute();
}