<?php

function BuscarCandidato($cpfCandidato)
{
    include "banco.php";

    $dataBuscarCandidato = $conn->query("SELECT * FROM candidato WHERE cpf_candidato = '$cpfCandidato'");
    $dataBuscarCandidato->execute();

    return $dataBuscarCandidato->fetch();
}

function AlterarDadosPerfilCandidato($nome, $dataNascimento, $interesses, $login, $cpfCandidato)
{
    include "banco.php";

    $dataAlterarDados = $conn->prepare("UPDATE candidato SET nome_candidato = :nome, 
                                       dataNascimento_candidato = :dataNascimento, interesses_candidato = :interesses, 
                                       login_candidato = :loginCandidato 
                                       WHERE cpf_candidato = :cpfCandidato");

    return $dataAlterarDados->execute(array(
        ":nome" => $nome,
        ":dataNascimento" => $dataNascimento,
        ":interesses" => $interesses,
        ":loginCandidato" => $login,
        ":cpfCandidato" => $cpfCandidato
    ));
}