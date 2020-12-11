<?php

include "../Model/Vaga.php";
session_start();

    if (isset($_GET["idVaga"])) {
        $idVaga = $_GET["idVaga"];
        $cpfCandidato = $_SESSION["id"];

        CandidatarSe($idVaga, $cpfCandidato);
    }
    
    header("Location: ../view/vaga.php");