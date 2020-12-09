<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Tela de Login</title>
</head>
<body>
    <?php include "header.php"; ?>


    <main>
        <form action="#" method="post">
            <div id="tipoUsuario">
                <h2>Entrar como</h2>

                
                <label for="chkEmpresa">
                    <input id="chkEmpresa" class="radioTipo" type="radio" name="chkTipoUsuario">
                    <b class="OptionTipoUsuario">Empresa</b>
                </label>

                <label for="chkCandidato">
                    <input id="chkCandidato" class="radioTipo" type="radio" name="chkTipoUsuario" checked>
                    <b class="OptionTipoUsuario">Candidato</b>
                </label>
                
            </div>
        
            <p class="campos">
                <b>LOGIN</b><br>
                <input type="text" name="login">
            </p>

            <p class="campos">
                <b>SENHA</b><br>
                <input type="text" name="senha">
            </p>
            
            <button id="btnEntrar" type="submit">ENTRAR</button>
        </form>
    </main>

    <?php include "footer.php"; ?>

</body>
</html>