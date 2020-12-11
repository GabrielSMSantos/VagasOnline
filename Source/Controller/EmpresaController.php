<?php 

require_once "Source/Model/Empresa.php";

function getTodasEmpresas(){

    $respostaEmpresas = BuscarEmpresas();

    foreach($respostaEmpresas as $empresa) {
        echo '
            <div class="vaga">
                <div class="dadosVaga">
                    <h2 class="nomeVaga">'.$empresa[1].'</h2>
                    <p class="descricaoVaga">
                        '.$empresa[4].'
                    </p>
                </div>

                <a class="linkVaga" href="http://localhost/VagasOnline/view/empresa.php?id='.$empresa[0].'">Conhecer Empresa</a>
            </div>
        ';
    }

}