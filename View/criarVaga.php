<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/criarVaga.css">
    <title>Tela de Cadastro</title>
</head>
<body>
    <?php include "header.php"; ?>


    <main>
        <form action="http://localhost/VagasOnline/Source/Controller/CadastrarVagaController.php" method="post">
            <div id="dvTitulo">
                <h2>Criar Nova Vaga</h2>
            </div>

            <table>
                <tr>
                    <th>
                        <p class="campos">
                            <b>NOME DA VAGA</b><br>
                            <input class="inputFormulario" type="text" name="nomeVaga">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>MÁXIMO DE CANDIDATOS</b><br>
                            <input class="inputFormulario" type="number" max="1000" name="numMax" style="max-height: 35px;">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>VAGAS DIPONÍVEIS</b><br>
                            <input class="inputFormulario" type="number" max="1000" name="numVagasDisponivel">
                        </p>
                    </th>
                    
                </tr>

                <tr>
                    <th>
                        <p class="campos">
                            <b>SALÁRIO</b><br>
                            <input class="inputFormulario" type="text" name="salario">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>REGIÃO</b><br>
                            <input class="inputFormulario" type="text" name="regiao">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>REGIME DE CONTRATAÇÃO</b><br>
                            <select name="regimeContratacao" class="dropdown">
                                <option value="">- Selecione o Tipo -</option>
                                <option value="clt">Efetivo - CLT</option>
                                <option value="estagiario">Estágiario</option>
                                <option value="temporario">Temporário</option>
                                <option value="pjl">PJL</option>
                                <option value="jovem aprendiz">Jovem Aprendiz</option>
                                <option value="autonomo">Autonômo</option>
                            </select>
                        </p>
                    </th>

                </tr>

                <tr>

                    <th colspan="3" style="text-align: left;">
                        <label class="campos">
                            <b>PALAVRAS-CHAVE</b>
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
                            <b>CATEGORIA</b><br>
                            <select name="categoria" class="dropdown" required>
                                <option value="">- Selecione a Categoria -</option>
                                <option value="ti">Tecnologia da Informação</option>
                                <option value="cientista de dados">Ciêntista de Dados</option>
                                <option value="programador">Programador</option>
                                <option value="engenheiro biomedico">Engenheiro biomédico</option>
                                <option value="analista de sistemas">Analista de Sistemas</option>
                                <option value="design">Design</option>
                            </select>
                        </p>
                    </th>
                </tr>

                <tr>
                    <th colspan="3">
                        <p class="campos">
                            <b>SOBRE A VAGA</b><br>
                            <textarea class="inputFormulario" name="sobreVaga" id="sobreVaga" cols="110" rows="10"></textarea>
                        </p>
                    </th>

                </tr>


            </table>
            
            <button id="btnCadastrar" type="submit">CADASTRAR</button>
        </form>
    </main>

    <?php include "footer.php"; ?>

    <script type="text/javascript">
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