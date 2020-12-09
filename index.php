<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/index.css">
    <title>Home</title>
</head>
<body>
    <header>
        
            <a href="index.php"><img width="150" src="https://upload.wikimedia.org/wikipedia/commons/3/35/Logo-catho.png" alt="logo"></a>
            <ul>
                <li><a href="#">Tela Inicial</a></li>
                <li><a href="#">Buscar Vagas</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Inscrições</a></li>
                <li><a href="#">Meu Currículo</a></li>
            </ul>


        <div id="dvUsuario">
            <a href="view/login.php">Entrar/Cadastrar</a>
            <img id="fotoPerfil" src="media/iconUser.png">
        </div>

    </header>

    <div id="campoPesquisa">
        <b>Procure Por Vagas:</b>
        <input type="text" name="inputPesquisa">
    </div>
    

    <main>
        <div class="vaga">
            <h2 class="nomeVaga">Nome da Vaga</h2>
            <p class="descricaoVaga">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <a class="linkVaga" href="#">Visualizar Vaga</a>
        </div>

        <div class="vaga">
            <h2 class="nomeVaga">Nome da Vaga</h2>
            <p class="descricaoVaga">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <a class="linkVaga" href="#">Visualizar Vaga</a>
        </div>

        <div class="vaga">
            <h2 class="nomeVaga">Nome da Vaga</h2>
            <p class="descricaoVaga">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <a class="linkVaga" href="#">Visualizar Vaga</a>
        </div>

        <div class="vaga">
            <h2 class="nomeVaga">Nome da Vaga</h2>
            <p class="descricaoVaga">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <a class="linkVaga" href="#">Visualizar Vaga</a>
        </div>

        <div class="vaga">
            <h2 class="nomeVaga">Nome da Vaga</h2>
            <p class="descricaoVaga">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <a class="linkVaga" href="#">Visualizar Vaga</a>
        </div>
    </main>

    <footer>
        <h2>Catho</h2>
        <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, 
        remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, 
        remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, 
        remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, 
        remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>

        <div id="dvCopy">
            <p id="copy">© <?= date("Y"); ?> Copyright Todos direitos reservados.</p>
        </div>
    </footer>

</body>
</html>