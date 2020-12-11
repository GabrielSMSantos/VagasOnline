<?php 
session_start();

include "../Model/Login.php";

if ($_POST) {

    $login = $_POST["login"]; 
    $senha = md5($_POST["senha"]);

    if ($_POST["chkTipoUsuario"] == "Candidato") {

        $resultado = logarCandidato($login, $senha);

        if ($resultado) {
            $_SESSION["id"] = $resultado["cpf_candidato"];
            $_SESSION["nome"] = $resultado["nome_candidato"];
            $_SESSION["tipoUsuario"] = $_POST["chkTipoUsuario"];
            $_SESSION["interesses"] = $resultado["interesses_candidato"];

            header("Location: http://localhost/VagasOnline/index.php");

        } else {
            header("Location: http://localhost/VagasOnline/view/login.php");
        }

        

    } else {

        $resultado = logarEmpresa($login, $senha);

        if ($resultado) {
            $_SESSION["id"] = $resultado["id_empresa"];
            $_SESSION["nome"] = $resultado["nome_empresa"];
            $_SESSION["tipoUsuario"] = $_POST["chkTipoUsuario"];
            
            header("Location: http://localhost/VagasOnline/index.php");

        } else {
            header("Location: http://localhost/VagasOnline/view/login.php");
        }
       
    }
    
}