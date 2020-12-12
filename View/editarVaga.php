<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/editarVaga.css">
  <title>Tela de Cadastro</title>
</head>
  <body>
    <?php include "header.php"; ?>


    <main>
    <form id="containerVaga" action="http://localhost/VagasOnline/Source/Controller/EditarVagaController.php?id=<?= $_GET["id"] ?>" method="post">
            <div id="dvTitulo">
                <h2>Editar Vaga</h2>
            </div>

            <?php
                include "../Source/Model/Vaga.php";

                $dadosVaga = BuscarVaga($_GET["id"]);
            ?>

            <table>
                <tr>
                    <th>
                        <p class="campos">
                            <b>NOME DA VAGA</b><br>
                            <input class="inputFormulario" type="text" value="<?= $dadosVaga["nome_vaga"] ?>" name="nomeVaga">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>MÁXIMO DE CANDIDATOS</b><br>
                            <input class="inputFormulario" type="number" max="1000" name="numMax" value="<?= $dadosVaga["maxInscritos_vaga"] ?>" style="max-height: 35px;">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>VAGAS DIPONÍVEIS</b><br>
                            <input class="inputFormulario" type="number" max="1000" value="<?= $dadosVaga["qntVagasDisponivel_vaga"] ?>" name="numVagasDisponivel">
                        </p>
                    </th>
                    
                </tr>

                <tr>
                    <th>
                        <p class="campos">
                            <b>SALÁRIO</b><br>
                            <input class="inputFormulario" type="text" value="<?= $dadosVaga["salario_vaga"] ?>" name="salario">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>REGIÃO</b><br>
                            <input class="inputFormulario" type="text" value="<?= $dadosVaga["regiao_vaga"] ?>" name="regiao">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>REGIME DE CONTRATAÇÃO</b><br>
                            <select name="regimeContratacao" class="dropdown">
                                <option value="">- Selecione o Tipo -</option>
                                <option value="clt" <?= ($dadosVaga["regimeContratacao_vaga"] == "clt") ? "selected" : "" ?>>Efetivo - CLT</option>
                                <option value="estagiario" <?= ($dadosVaga["regimeContratacao_vaga"] == "estagiario") ? "selected" : "" ?>>Estágiario</option>
                                <option value="temporario" <?= ($dadosVaga["regimeContratacao_vaga"] == "temporario") ? "selected" : "" ?>>Temporário</option>
                                <option value="pjl" <?= ($dadosVaga["regimeContratacao_vaga"] == "pjl") ? "selected" : "" ?>>PJL</option>
                                <option value="jovem aprendiz" <?= ($dadosVaga["regimeContratacao_vaga"] == "jovem aprendiz") ? "selected" : "" ?>>Jovem Aprendiz</option>
                                <option value="autonomo" <?= ($dadosVaga["regimeContratacao_vaga"] == "autonomo") ? "selected" : "" ?>>Autonômo</option>
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
                                <?php
                                    $palavrasChave = $dadosVaga["palavrasChave_vaga"];

                                    $palavrasChave = explode(",", $palavrasChave);


                                    for ($i = 0; $i < count($palavrasChave); $i++) {
                                        echo '
                                          <input type="text" id="'.$i.'" class="palavraChave" onkeyup="pegarValor(this)" value="'.$palavrasChave[$i].'">
                                        ';
                                    }
                                ?>
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
                                <option value="ti" <?= ($dadosVaga["categoria_vaga"] == "ti") ? "selected" : "" ?>>Tecnologia da Informação</option>
                                <option value="cientista de dados" <?= ($dadosVaga["categoria_vaga"] == "cientista de dados") ? "selected" : "" ?>>Ciêntista de Dados</option>
                                <option value="programador" <?= ($dadosVaga["categoria_vaga"] == "programador") ? "selected" : "" ?>>Programador</option>
                                <option value="engenheiro biomedico" <?= ($dadosVaga["categoria_vaga"] == "engenheiro biomedico") ? "selected" : "" ?>>Engenheiro biomédico</option>
                                <option value="analista de sistemas" <?= ($dadosVaga["categoria_vaga"] == "analista de sistemas") ? "selected" : "" ?>>Analista de Sistemas</option>
                                <option value="design" <?= ($dadosVaga["categoria_vaga"] == "design") ? "selected" : "" ?>>Design</option>
                            </select>
                        </p>
                    </th>
                </tr>

                <tr>
                    <th colspan="3">
                        <p class="campos">
                            <b>SOBRE A VAGA</b><br>
                            <textarea class="inputFormulario" name="sobreVaga" id="sobreVaga" cols="110" rows="10">
                                <?= $dadosVaga["exigencias_vaga"]; ?>
                            </textarea>
                        </p>
                    </th>

                </tr>


            </table>
            
            <button id="btnCadastrar" type="submit">SALVAR ALTERAÇÕES</button>
        </form>
    </main>

    <?php include "footer.php"; ?>

    <script type="text/javascript">
      var posicaoPalavraChave = 0;
      var palavrasChave = [];
        window.addEventListener("load", function(event) {

          var inputsPalavraChave = document.querySelectorAll(".palavraChave"); 

          if (inputsPalavraChave != "") {

            for (var i = 0; i < inputsPalavraChave.length; i++) {

                palavrasChave.push(inputsPalavraChave[i].value);     
                posicaoPalavraChave = i;
            }
            posicaoPalavraChave++;

            document.getElementById("inputPalavraChave").value = palavrasChave.toString();

          }

        });
        

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
        palavrasChave[element.id] = element.value;
        document.getElementById("inputPalavraChave").value = palavrasChave.toString();

        console.log(element);
        console.log(document.getElementById("inputPalavraChave").value);
      }

    </script>
  </body>
</html>