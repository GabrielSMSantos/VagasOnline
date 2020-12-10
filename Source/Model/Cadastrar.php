<?php 

function CadastrarCandidato($nome, $dataNascimento, $cpf, $login, $senha) 
{
    require_once "banco.php";
    
    $dataCandidato = $conn->prepare("INSERT INTO candidato VALUES(:id , :nome, :dataNascimento, :cpf, :loginCandidato, :senha)"); 

    $dataCandidato->execute(array(
        ":id" => "",
        ":nome" => $nome,
        ":dataNascimento" => $dataNascimento,
        ":cpf" => $cpf,
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