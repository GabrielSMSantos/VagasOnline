<?php

include "Source/Model/Vaga.php";
include "Source/Model/Empresa.php";

if (isset($_SESSION["id"])) {

    $vagasComOsInteresses = BuscarVagaComInteresses($_SESSION["interesses"]);
    
    // echo $_SESSION["interesses"]."<br>";
    // var_dump($vagasComOsInteresses);
    
}
