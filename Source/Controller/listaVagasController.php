<?php 

include "../Source/Model/Vaga.php";
include "../Source/Model/Empresa.php";

if ($_POST){

    $pesquisa = $_POST["pesquisa"];
        
    if (!empty($pesquisa)){

        $resultado = PesquisarVaga($pesquisa);
        
    } else {

        $resultado = BuscarTodasVagas();
    }
    
} else {

    $resultado = BuscarTodasVagas();

}




