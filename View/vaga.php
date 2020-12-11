<?php include "../Source/Model/Vaga.php"; 
    if(isset($_GET)){
        $vaga = BuscarVaga($_GET["id"]);
    }

    $empresa = getEmpresa($vaga[1]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/VagasOnline/view/css/vaga.css">
    <title>Vaga</title>
</head>
<body>

    <?php include "header.php"; ?>

    <main>
        <div id="vaga">
            <h1 id="nomeVaga"><?= $vaga[2]; ?></h1>
            <b id="nomeEmpresa"><img src="http://localhost/VagasOnline/media/iconEmpresa_Small.png" align="left"><?= $empresa["nome_empresa"]; ?></b>
            
            <p id="palavrasChaves">
                Palavras-Chave: 
                <?php 
                    $arrayVaga = explode(",", $vaga[9]);

                    for ($i = 0; $i < count($arrayVaga); $i++):
                ?>
                    <b class="palavra"><?= $arrayVaga[$i] ?></b> 

                <?php 
                    endfor;
                ?>
                
            </p>

            <p id="descricaoVaga">
                <?= $vaga[6]; ?>
            </p>
            <br><br>

            <a id="linkCandidatarSe" href="#">CANDIDATAR-SE  <img src="http://localhost/VagasOnline/media/iconCandidatarSe.png"></a>
        </div>


        <div id="empresa">
            <h2><img src="http://localhost/VagasOnline/media/iconEmpresa_Big.png" align="left"><?= $empresa["nome_empresa"]; ?></h2>

            <p id="sobreEmpresa">
                <b>Sobre: </b>
                <?= $empresa["sobre_empresa"]; ?>                
            </p>


        </div>
    </main>
    
    <?php include "footer.php"; ?>
</body>
</html>