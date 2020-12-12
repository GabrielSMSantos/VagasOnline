<?php include "../Source/Model/Vaga.php"; 
      include "../Source/Model/Empresa.php";

    if(isset($_GET)){
        $empresa = getEmpresa($_GET["id"]);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/VagasOnline/view/css/empresa.css">
    <title><?= $empresa[1]; ?></title>
</head>
<body>

    <?php include "header.php"; ?>

    <main>
        <div id="empresa">
            <h1 id="nomeEmpresa"><img src="http://localhost/VagasOnline/media/iconEmpresa_Big.png"><?= $empresa[1]; ?></h1>

            <p id="descricaoEmpresa">
                <?= $empresa[4]; ?>
            </p>
            <br><br>

            <!-- <a id="linkCandidatarSe" href="#">CANDIDATAR-SE  <img src="http://localhost/VagasOnline/media/iconCandidatarSe.png"></a> -->
        </div>

    </main>
    
    <?php include "footer.php"; ?>
</body>
</html>