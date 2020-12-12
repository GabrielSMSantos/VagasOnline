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

function BuscarTodasVagas()
{
    include "banco.php";

    $dataBuscarTodasVagas = $conn->query("SELECT * FROM vaga");
    $dataBuscarTodasVagas->execute();

    return $dataBuscarTodasVagas->fetchAll();
}


function BuscarVaga($id) 
{
    include "banco.php";

    $dataBuscar = $conn->query("SELECT * FROM vaga WHERE id_vaga =".$id);
    
    return $dataBuscar->fetch();
}

function PesquisarVaga($palavraChave)
{
    include "banco.php";

    $dataPesquisarVaga = $conn->query("SELECT * FROM vaga WHERE palavrasChave_vaga LIKE '%$palavraChave%'");
    $dataPesquisarVaga->execute();
    
    return $dataPesquisarVaga->fetchAll();
}


function EditarDadosVaga($nomeVaga, $numMax, $numVagasDisponivel, $salario, $regiao, $regimeContratacao, $palavrasChave, $categoria, $sobreVaga, $idVaga)
{
    include "banco.php";

    $dataEditarDadosVaga = $conn->prepare("UPDATE vaga SET nome_vaga = :nome_vaga, maxInscritos_vaga = :maxInscritos_vaga,
                                           qntVagasDisponivel_vaga = :qntVagasDisponivel_vaga, salario_vaga = :salario_vaga,
                                           regiao_vaga = :regiao_vaga, regimeContratacao_vaga = :regimeContratacao_vaga, 
                                           palavrasChave_vaga = :palavrasChave_vaga, categoria_vaga = :categoria_vaga, exigencias_vaga = :exigencias_vaga
                                           WHERE id_vaga = :id_vaga");

    return $dataEditarDadosVaga->execute(array(
        ":nome_vaga" => $nomeVaga,
        ":maxInscritos_vaga" => $numMax,
        ":qntVagasDisponivel_vaga" => $numVagasDisponivel,
        ":salario_vaga" => $salario,
        ":regiao_vaga" => $regiao,
        ":regimeContratacao_vaga" => $regimeContratacao,
        ":palavrasChave_vaga" => $palavrasChave,
        ":categoria_vaga" => $categoria,
        ":exigencias_vaga" => $sobreVaga,
        ":id_vaga" => $idVaga
    ));
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


function VagasCandidatadas($idCandidato)
{
    include "banco.php";

    $dataVagasCandidatadas = $conn->query("SELECT * FROM vaga as A LEFT JOIN inscritos_vaga as B on a.id_vaga = b.id_vaga WHERE b.cpf_candidato = '$idCandidato'");
    $dataVagasCandidatadas->execute();

    return $dataVagasCandidatadas->fetchAll();
}