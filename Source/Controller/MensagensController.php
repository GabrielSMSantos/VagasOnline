<?php

include "../Model/Mensagem.php";
session_start();

if ($_POST) {

    if ($_POST["inputMensagem"]) {
        $mensagem = $_POST["inputMensagem"];
        
        if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Candidato") {

            RegistrarMensagem($_SESSION["id"], $_GET["idEmpresa"], $_GET["idVaga"], $mensagem, $_SESSION["tipoUsuario"]);
            header("Location: http://localhost/VagasOnline/view/mensagens.php?idEmpresa=".$_GET["idEmpresa"]."&idVaga=".$_GET["idVaga"]);
            
        } else if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Empresa") {

            RegistrarMensagem($_GET["cpfCandidato"], $_SESSION["id"], $_GET["idVaga"], $mensagem, $_SESSION["tipoUsuario"]);
            header("Location: http://localhost/VagasOnline/view/mensagens.php?cpfCandidato=".$_GET["cpfCandidato"]."&idVaga=".$_GET["idVaga"]);
        }      
        
    } else {

        if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Candidato") {

            header("Location: http://localhost/VagasOnline/view/mensagens.php?idEmpresa=".$_GET["idEmpresa"]."&idVaga=".$_GET["idVaga"]);
            
        } else if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Empresa") {

            header("Location: http://localhost/VagasOnline/view/mensagens.php?cpfCandidato=".$_GET["cpfCandidato"]."&idVaga=".$_GET["idVaga"]);
        }   
    }
    
}