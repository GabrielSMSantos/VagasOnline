<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Tela de Cadastro</title>
</head>
<body>
    <?php include "header.php"; ?>


    <main>
        <form action="http://localhost/VagasOnline/Source/Controller/CadastrarController.php" method="post">
            <div id="tipoUsuario">
                <h2>Cadastrar como</h2>

                
                <label for="chkEmpresa">
                    <input id="chkEmpresa" class="radioTipo" type="radio" name="chkTipoUsuario" value="Empresa" onclick="AlterarForm(this)">
                    <b class="OptionTipoUsuario">Empresa</b>
                </label>

                <label for="chkCandidato">
                    <input id="chkCandidato" class="radioTipo" type="radio" name="chkTipoUsuario" value="Candidato" onclick="AlterarForm(this)" checked>
                    <b class="OptionTipoUsuario">Candidato</b>
                </label>
                
            </div>

            <table id="tblEmpresa" name="tblEmpresa">
                <tr>
                    <th>
                        <p class="campos">
                            <b>NOME DA EMPRESA</b><br>
                            <input class="inputFormulario" type="text" name="nomeEmpresa">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>ENDEREÇO</b><br>
                            <input class="inputFormulario" type="text" name="endereco">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>CNPJ</b><br>
                            <input class="inputFormulario" type="text" name="cnpj">
                        </p>
                    </th>
                    
                </tr>

                <tr>
                    <th colspan="3">
                        <p class="campos">
                            <b>SOBRE SUA EMPRESA</b><br>
                            <textarea name="sobre" id="sobreEmpresa" cols="130" rows="10"></textarea>
                        </p>
                    </th>

                </tr>

                <tr>
                    <th>
                        <p class="campos">
                            <b>LOGIN</b><br>
                            <input class="inputFormulario" type="text" name="loginEmpresa">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>SENHA</b><br>
                            <input class="inputFormulario" type="password" name="senhaEmpresa">
                        </p>
                    </th>
                </tr>


            </table>

            <table id="tblCandidato" name="tblCandidato">
                <tr>
                    <th>
                        <p class="campos">
                            <b>NOME</b><br>
                            <input class="inputFormulario" type="text" name="nomeCandidato">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>DATA DE NASCIMENTO</b><br>
                            <input class="inputFormulario" type="date" name="dataNascimento" style="max-height: 35px;">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>CPF</b><br>
                            <input class="inputFormulario" type="text" name="cpf">
                        </p>
                    </th>
                    
                </tr>

                <tr>

                    <th colspan="3" style="text-align: left;">
                        <label class="campos">
                            <b>PALAVRAS-CHAVE (Informe seus interesses)</b>
                            <div id="palavrasChave">
                                <b id="addPalavraChave" onclick="criarPalavraChave()">+</b>
                            </div>
                            <input id="inputPalavraChave" type="text" name="palavrasChave" style="display: none;">
                        </label>
                    </th>
                </tr>

                <tr>
                    <th>
                        <p class="campos">
                            <b>LOGIN</b><br>
                            <input class="inputFormulario" type="text" name="loginCandidato">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>SENHA</b><br>
                            <input class="inputFormulario" type="password" name="senhaCandidato">
                        </p>
                    </th>
                </tr>


            </table>
            
            <button id="btnCadastrar" type="submit">CADASTRAR</button>
        </form>
    </main>

    <?php include "footer.php"; ?>


    <script type="text/javascript">
        
        function AlterarForm(element) {

            if (element.checked == true) {

                if (element.id == "chkEmpresa") {
                    
                    document.querySelector("#tblEmpresa").style.display = "flex";
                    document.querySelector("#tblCandidato").style.display = "none";

                } else {

                    document.querySelector("#tblCandidato").style.display = "flex";
                    document.querySelector("#tblEmpresa").style.display = "none";
                }

            }
            
        }


        
        var posicaoPalavraChave = 0;
        var palavrasChaves = [];

        function criarPalavraChave() {
            var divPalavrasChave = document.querySelector("#palavrasChave");

            var palavraChave = document.createElement("INPUT");
            palavraChave.setAttribute("type", "text");
            palavraChave.setAttribute("id", posicaoPalavraChave);
            palavraChave.setAttribute("class", "palavraChave");
            palavraChave.setAttribute("onkeyup", "pegarValor(this)");

            divPalavrasChave.appendChild(palavraChave);
            posicaoPalavraChave++;
        }


        function pegarValor(element) {
            palavrasChaves[element.id] = element.value;

            document.getElementById("inputPalavraChave").value = palavrasChaves.toString();
        }

    </script>

</body>
</html>