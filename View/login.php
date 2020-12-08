<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Tela de Login</title>
</head>
<body>
    <form action="#" method="post">
        <div id="tipoUsuario">
            <h2>Entrar como</h2>

            
            <label class="OptionTipoUsuario" for="chkEmpresa">
                Empresa
                <input id="chkEmpresa" type="radio" name="chkTipoUsuario">
            </label>

            <label class="OptionTipoUsuario" for="chkCandidato">
                Candidato
                <input id="chkCandidato" type="radio" name="chkTipoUsuario" checked>
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
</body>
</html>