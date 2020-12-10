<?php 
session_start();

include "../Model/Login.php";

if ($_POST) {

    $login = $_POST["login"]; 
    $senha = md5($_POST["senha"]);

    if ($_POST["chkTipoUsuario"] == "Candidato") {

        $resultado = logarCandidato($login, $senha);

        if ($resultado) {
            $_SESSION["id"] = $resultado["id_candidato"];
            $_SESSION["nome"] = $resultado["nome_candidato"];
        }

        header("Location: http://localhost/VagasOnline/index.php");

    } else {

        $resultado = logarEmpresa($login, $senha);

        if ($resultado) {
            $_SESSION["id"] = $resultado["id_empresa"];
            $_SESSION["nome"] = $resultado["nome_empresa"];
        }

        header("Location: http://localhost/VagasOnline/index.php");
       
    }
    
}