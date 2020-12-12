<?php

include "../Model/Vaga.php";

if ($_POST) {

    $nomeVaga = $_POST["nomeVaga"];
    $numMax = $_POST["numMax"];
    $numVagasDisponivel = $_POST["numVagasDisponivel"];
    $salario = $_POST["salario"];
    $regiao = $_POST["regiao"];
    $regimeContratacao = $_POST["regimeContratacao"];
    $palavrasChave = $_POST["palavrasChave"];
    $categoria = $_POST["categoria"];
    $sobreVaga = $_POST["sobreVaga"];
    $idVaga = $_GET["id"];

    EditarDadosVaga($nomeVaga, $numMax, $numVagasDisponivel, $salario, $regiao, $regimeContratacao, $palavrasChave, $categoria, $sobreVaga, $idVaga);

    header("Location: http://localhost/VagasOnline/view/editarVaga.php?id=$idVaga");
}