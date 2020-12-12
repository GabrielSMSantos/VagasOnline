<?php

include "../Source/Model/Mensagem.php";

if ($_SESSION["tipoUsuario"] == "Candidato") {

    $mensagens = ExibirMensagens($_SESSION["id"], $_GET["idEmpresa"], $_GET["idVaga"]);

} else {
    $mensagens = ExibirMensagens($_GET["cpfCandidato"], $_SESSION["id"], $_GET["idVaga"]);
}


foreach($mensagens as $mensagem) {
    $tipoMensagem = ($mensagem[5] == $_SESSION["tipoUsuario"]) ? "Enviada" : "Recebida";
    echo '
        <p class="mensagem '.$tipoMensagem.'"><b class="msg'.$tipoMensagem.'">'.$mensagem[4].'</b></p>
    ';
}

