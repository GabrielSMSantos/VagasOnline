<?php

function CadastrarVaga($nomeVaga, $salario, $regimeContratacao, $regiao, $sobreVaga, $numMax, $categoria, $palavrasChave, $numVagasDisponivel) 
{
    include "banco.php";
    
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

function getEmpresa($id)
{
    include "banco.php";

    $dataNomeEmpresa = $conn->query("SELECT * FROM empresa WHERE id_empresa =".$id);
    $dataNomeEmpresa->execute();
    
    return $dataNomeEmpresa->fetch();
}