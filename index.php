<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="view/css/index.css">
</head>
<body>

    <?php include "View/header.php"; ?>
    
    <main id="root">
        <?php 
            if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Candidato"):
        ?>

        <div class="container">
            <div class="wrapperTitle">
                <h1>Vagas com seu interesse</h1>
            </div>

            <div class="wrapper">
                <?php include "Source/Controller/VagasInteresses.php"; ?>
            </div>

            <div class="wrapperTitle">
                <h1>Empresas</h1>
            </div>

            <div class="wrapper">
                <?php include "Source/Controller/EmpresaController.php"; 
                      getTodasEmpresas();
                ?>                
            </div>
        </div>

            <?php endif; ?>

    </main>

    <?php include "View/footer.php"; ?>

</body>
</html>