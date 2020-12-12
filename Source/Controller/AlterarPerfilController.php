<?php

include "../Model/Candidato.php";
include "../Model/Empresa.php";

session_start();

if ($_POST) {

    if ($_SESSION["tipoUsuario"] == "Candidato") {
        $nome = $_POST["nome"];
        $dataNascimento = $_POST["dataNascimento"];
        $interesses = $_POST["palavrasChave"];
        $login = $_POST["login"];
        
        $resultado = AlterarDadosPerfilCandidato($nome, $dataNascimento, $interesses, $login, $_SESSION["id"]);


    } else {
        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $endereco = $_POST["endereco"];
        $sobre = $_POST["sobre"];
        $login = $_POST["login"];

        $resultado = AlterarDadosPerfilEmpresa($nome, $cnpj, $endereco, $sobre, $login, $_SESSION["id"]);

    }


    header("Location: http://localhost/VagasOnline/view/perfil.php?id=".$_SESSION["id"]);


}