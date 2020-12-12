<?php

function CadastrarVaga($nomeVaga, $salario, $regimeContratacao, $regiao, $sobreVaga, $numMax, $categoria, $palavrasChave, $numVagasDisponivel) 
{    
    include "banco.php";
    session_start();
    
    $dataVaga = $conn->prepare("INSERT INTO vaga VALUES(:id_vaga, :id_empresa, :nomeVaga, :salario, :regimeContratacao, :regiao, 
                                                        :sobreVaga, :numMax, :categoria, :palavrasChave, :numVagasDisponivel)");

    $dataVaga->execute(array(
        ":id_vaga" => '',
        ":id_empresa" => $_SESSION["id"],
        ":nomeVaga" => $nomeVaga,
        ":salario" => $salario,
        ":regimeContratacao" => $regimeContratacao,
        ":regiao" => $regiao,
        ":sobreVaga" => $sobreVaga,
        ":numMax" => $numMax,
        ":categoria" => $categoria,
        ":palavrasChave" => $palavrasChave,
        ":numVagasDisponivel" => $numVagasDisponivel
    ));

}


function BuscarVagaComInteresses($interesses)
{
    include "banco.php";

    $arrayInteresses = explode(",", $interesses);

    for ($i = 0; $i < count($arrayInteresses); $i++) {
        
        if ($i == 0) {

            $sql = "SELECT * FROM vaga WHERE palavrasChave_vaga like '%$arrayInteresses[$i]%'";  

        } else {

            $sql .= " OR palavrasChave_vaga like '%$arrayInteresses[$i]%'";  
        }
              
    }

    $dataInteresses = $conn->query($sql);
    $dataInteresses->execute();
    
    return $dataInteresses->fetchAll();
}


function BuscarVaga($id) 
{
    include "banco.php";

    $dataBuscar = $conn->query("SELECT * FROM vaga WHERE id_vaga =".$id);
    
    return $dataBuscar->fetch();
}


function CandidatarSe($idVaga, $cpfCandidato)
{
    include "banco.php";

    $dataCandidatarSe = $conn->prepare("INSERT INTO inscritos_vaga VALUE(:idInscricao, :idVaga, :cpfCandidato)");

    $dataCandidatarSe->execute(array(
       ":idInscricao" => '',
       ":idVaga" => $idVaga,
       ":cpfCandidato" => $cpfCandidato 
    ));    
}


function VerificarInscricao($cpfCandidato, $idVaga)
{
    include "banco.php";

    $dataIncricao = $conn->query("SELECT cpf_candidato FROM inscritos_vaga WHERE cpf_candidato = '$cpfCandidato' AND id_vaga =".$idVaga);
    
    return $dataIncricao->fetch();
}


function VerificarNumInscricoes($idVaga)
{
    include "banco.php";

    $dataVerificarNumInscricoes = $conn->query("SELECT * FROM inscritos_vaga WHERE id_vaga =".$idVaga);
    $dataVerificarNumInscricoes->execute();

    $numInscricoes = $dataVerificarNumInscricoes->fetchAll();

    return count($numInscricoes);
}