<?php

include "../Model/Vaga.php";
session_start();

    if (isset($_GET["idVaga"])) {
        $idVaga = $_GET["idVaga"];
        $cpfCandidato = $_SESSION["id"];

        CandidatarSe($idVaga, $cpfCandidato);
    }
    
    header("Location: http://localhost/VagasOnline/view/vaga.php?id=".$idVaga);