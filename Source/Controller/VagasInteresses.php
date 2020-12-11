<?php

include "Source/Model/Vaga.php";

if (isset($_SESSION["id"])) {

    $vagasComOsInteresses = BuscarVagaComInteresses($_SESSION["interesses"]);
    
    // echo $_SESSION["interesses"]."<br>";
    // var_dump($vagasComOsInteresses);
    
    foreach ($vagasComOsInteresses as $vaga) {
        echo '
            <div class="vaga">
                <div class="dadosVaga">
                    <h2 class="nomeVaga">'.$vaga[2].'</h2>
                    <p class="descricaoVaga">
                        '.$vaga[6].'
                    </p>
                </div>

                <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php?id='.$vaga[0].'">Visualizar Vaga</a>
            </div>
        
        ';
    }
}
