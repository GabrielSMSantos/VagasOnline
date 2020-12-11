<?php 

function CadastrarCandidato($cpf, $nome, $dataNascimento, $interesses, $login, $senha) 
{
    require_once "banco.php";
    
    $dataCandidato = $conn->prepare("INSERT INTO candidato VALUES(:cpf , :nome, :dataNascimento, :interesses, :loginCandidato, :senha)"); 

    $dataCandidato->execute(array(
        ":cpf" => $cpf,
        ":nome" => $nome,
        ":dataNascimento" => $dataNascimento,
        ":interesses" => $interesses,
        ":loginCandidato" => $login,
        ":senha" => md5($senha)
    ));
}


function CadastrarEmpresa($nome, $endereco, $cnpj, $sobre, $login, $senha)
{
    require_once "banco.php";
    
    $dataCandidato = $conn->prepare("INSERT INTO empresa VALUES(:id , :nomeEmpresa, :endereco, :cnpj, :sobre, :loginEmpresa, :senha)"); 

    $dataCandidato->execute(array(
        ":id" => "",
        ":nomeEmpresa" => $nome,
        ":endereco" => $endereco,
        ":cnpj" => $cnpj,
        ":sobre" => $sobre,
        ":loginEmpresa" => $login,
        ":senha" => md5($senha)
    ));
}