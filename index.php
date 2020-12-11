<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/index.css">
    <title>Home</title>
</head>
<body>

    <?php include "View/header.php"; ?>
    

    <main>     
        <?php 
            if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Candidato"):
        ?>

        <h1>Vagas com seus interesses:</h1>
        <div class="divisao"></div>

        <div id="cards">

            <?php include "Source/Controller/VagasInteresses.php"; ?>

        </div>
        <!-- <div class="vaga">
            <h2 class="nomeVaga">Nome da Vaga</h2>
            <p class="descricaoVaga">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php">Visualizar Vaga</a>
        </div> -->

        <h1 style="margin-top: 25px;">Empresas:</h1>
        <div class="divisao"></div>
        
        <div id="cards">
            <div class="vaga">
                <h2 class="nomeVaga">Nome da Empresa</h2>
                <p class="descricaoVaga">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php">Conhecer Empresa</a>
            </div>

            <div class="vaga">
                <h2 class="nomeVaga">Nome da Empresa</h2>
                <p class="descricaoVaga">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php">Conhecer Empresa</a>
            </div>

            <div class="vaga">
                <h2 class="nomeVaga">Nome da Empresa</h2>
                <p class="descricaoVaga">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php">Conhecer Empresa</a>
            </div>

            <div class="vaga">
                <h2 class="nomeVaga">Nome da Empresa</h2>
                <p class="descricaoVaga">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php">Conhecer Empresa</a>
            </div>

            <div class="vaga">
                <h2 class="nomeVaga">Nome da Empresa</h2>
                <p class="descricaoVaga">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php">Conhecer Empresa</a>
            </div>
        </div>

            <?php endif; ?>

    </main>

    <?php include "View/footer.php"; ?>

</body>
</html>