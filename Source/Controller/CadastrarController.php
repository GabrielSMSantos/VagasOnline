<?php

include "../Model/Cadastrar.php";

if ($_POST) {

    if ($_POST["chkTipoUsuario"] == "Candidato") {
        $cpf = $_POST["cpf"];
        $nomeCadidato = $_POST["nomeCandidato"];
        $dataNascimento = $_POST["dataNascimento"];
        $interesses = $_POST["palavrasChave"];
        $loginCandidato = $_POST["loginCandidato"];
        $senhaCandidato = $_POST["senhaCandidato"];

        CadastrarCandidato($cpf, $nomeCadidato, $dataNascimento, $interesses, $loginCandidato, $senhaCandidato);

        echo "<script> window.location.href = 'http://localhost/VagasOnline/view/login.php'; <script>";

    } else {
        $nomeEmpresa = $_POST["nomeEmpresa"];
        $endereco = $_POST["endereco"];
        $cnpj = $_POST["cnpj"];
        $sobre = $_POST["sobre"];
        $loginEmpresa = $_POST["loginEmpresa"];
        $senhaEmpresa = $_POST["senhaEmpresa"];
        
        CadastrarEmpresa($nomeEmpresa, $endereco, $cnpj, $sobre, $loginEmpresa, $senhaEmpresa);

        echo "<script> window.location.href = 'http://localhost/VagasOnline/view/login.php'; <script>";
        
    }
        
       
}
