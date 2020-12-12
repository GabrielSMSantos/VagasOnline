<?php 

include "Source/Model/Empresa.php";

if (isset($_SESSION["id"])) {

    $vagasCriadas = VagasCriadas($_SESSION["id"]);
}

