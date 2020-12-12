<?php 

include "Source/Model/Empresa.php";

if (isset($_SESSION["id"])) {

    $vagasCriadas = VagasCriadas($_SESSION["id"]);

    foreach($vagasCriadas as $vaga) {
        $nomeEmpresa = getEmpresa($vaga[1]);

        echo '
            <div class="vaga">
                <div class="dadosVaga">
                    <h2 class="nomeVaga">'.$vaga[2].'</h2>
                    <b id="nomeEmpresa">'.$nomeEmpresa["nome_empresa"].'</b>
                    <p id="salario">Salário: <b>R$ '.number_format($vaga[3], 2, ",", ".").'</b></p>
                    <p id="vagasDisponiveis">Vagas Disponíveis: '.$vaga[10].'</p>
                    <p class="descricaoVaga">
                        '.$vaga[6].'
                    </p>
                </div>

                <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php?id='.$vaga[0].'">Visualizar Vaga</a>
            </div>
        ';
    }

}

