<?php

function RegistrarMensagem($idCandidato, $idEmpresa, $idVaga, $mensagem, $quemEnviou)
{
    include "banco.php";

    $dataRegistrarMensagem = $conn->prepare("INSERT INTO mensagens VALUES(:id_mensagem, :id_candidato, :id_empresa, :id_vaga, :texto_mensagem, :quemEnviou)");
    
    $dataRegistrarMensagem->execute(array(
        ":id_mensagem" => '',
        ":id_candidato" => $idCandidato,
        ":id_empresa" => $idEmpresa,
        ":id_vaga" => $idVaga,
        ":texto_mensagem" => $mensagem,
        ":quemEnviou" => $quemEnviou
    ));
}


function ExibirMensagens($idCandidato, $idEmpresa, $idVaga)
{
    include "banco.php";
    
    $dataExibirMensagens = $conn->query("SELECT * FROM mensagens WHERE cpf_candidato = '$idCandidato' AND id_empresa = $idEmpresa AND id_vaga =".$idVaga);
    $dataExibirMensagens->execute();
    
    return $dataExibirMensagens->fetchAll();
}