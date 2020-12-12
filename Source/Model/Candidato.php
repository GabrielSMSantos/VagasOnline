<?php

function BuscarCandidato($cpfCandidato)
{
    include "banco.php";

    $dataBuscarCandidato = $conn->query("SELECT * FROM candidato WHERE cpf_candidato = '$cpfCandidato'");
    $dataBuscarCandidato->execute();

    return $dataBuscarCandidato->fetch();
}