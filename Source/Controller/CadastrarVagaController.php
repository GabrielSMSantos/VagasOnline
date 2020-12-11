<?php 

include "../Model/Vaga.php";

if ($_POST) {

    $nomeVaga = $_POST["nomeVaga"];
    $numMax = $_POST["numMax"];
    $numVagasDisponivel = $_POST["numVagasDisponivel"];
    $salario = $_POST["salario"];
    $regimeContratacao = $_POST["regimeContratacao"];
    $regiao = $_POST["regiao"];
    $palavrasChave = $_POST["palavrasChave"];
    $categoria = $_POST["categoria"];
    $sobreVaga = $_POST["sobreVaga"];
    

    CadastrarVaga($nomeVaga, $salario, $regimeContratacao, $regiao, $sobreVaga, $numMax, $categoria, $palavrasChave, $numVagasDisponivel);
    
}