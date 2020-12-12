<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/perfil.css">
  </head>
<body>

    <?php include "header.php"; ?>

    <main id="perfil">
      <div id="container">

      <form action="http://localhost/VagasOnline/Source/Controller/AlterarPerfilController.php" method="post" id="containerEmpresa" class="containerEmpresa">
            <div id="headerTitle">
                    <h2>Editar Dados Perfil</h2>                
                </div>
            <?php 
              if ($_SESSION["tipoUsuario"] == "Empresa"):
                require_once "../Source/Model/Empresa.php";
                $empresa = getEmpresa($_SESSION["id"]);
            ?>
            <table id="tblEmpresa" name="tblEmpresa">
                <tr>
                    <th>
                        <p class="campos">
                            <b>NOME DA EMPRESA</b><br>
                            <input class="inputFormulario" type="text" value="<?= $empresa["nome_empresa"] ?>" name="nome">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>ENDEREÇO</b><br>
                            <input class="inputFormulario" type="text" value="<?= $empresa["endereco_empresa"] ?>" name="endereco">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>CNPJ</b><br>
                            <input class="inputFormulario" value="<?= $empresa["cnpj_empresa"] ?>" type="text" name="cnpj">
                        </p>
                    </th>
                    
                </tr>

                <tr>
                    <th colspan="3">
                        <p class="campos">
                            <b>SOBRE SUA EMPRESA</b><br>
                            <textarea name="sobre" id="sobreEmpresa" cols="130"><?= $empresa["sobre_empresa"] ?></textarea>
                        </p>
                    </th>

                </tr>

                <tr>
                    <th>
                        <p class="campos">
                            <b>LOGIN</b><br>
                            <input class="inputFormulario" type="text" value="<?= $empresa["login_empresa"] ?>" name="login">
                        </p>
                    </th>

                </tr>


            </table>

            <?php
                else:
                  require_once "../Source/Model/Candidato.php";
                  $candidato = BuscarCandidato($_SESSION["id"]);
            ?>

            <table id="tblCandidato" name="tblCandidato">
                <tr>
                    <th>
                        <p class="campos">
                            <b>NOME</b><br>
                            <input class="inputFormulario" type="text" value="<?= $candidato["nome_candidato"] ?>" name="nome">
                        </p>
                    </th>

                    <th>
                        <p class="campos">
                            <b>DATA DE NASCIMENTO</b><br>
                            <input class="inputFormulario" type="date" name="dataNascimento" value="<?= $candidato["dataNascimento_candidato"] ?>" style="max-height: 35px;">
                        </p>
                    </th>
                    
                </tr>

                <tr>

                    <th colspan="3" style="text-align: left;">
                        <label class="campos">
                            <b>PALAVRAS-CHAVE (Informe seus interesses)</b>
                            <div id="palavrasChave">
                                <b id="addPalavraChave" onclick="criarPalavraChave()">+</b>
                                <?php
                                    $palavrasChave = $candidato["interesses_candidato"];

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
                            <b>LOGIN</b><br>
                            <input class="inputFormulario" type="text" value="<?= $candidato["login_candidato"] ?>" name="login">
                        </p>
                    </th>
                </tr>


            </table>
            <?php
              endif;
            ?>

          <button id="btnAlterar" type="submit" class="btn btnSalvar">
            SALVAR ALTERAÇÕES
          </button>
      </form>
      </div>

    </main>

    <?php include "footer.php"; ?>

    <script>
        var posicaoPalavraChave = 0;
        var palavrasChave = [];
        window.addEventListener("load", function(event) {

          var inputsPalavraChave = document.querySelectorAll(".palavraChave"); 

          if (inputsPalavraChave != "") {

            for (var i = 0; i < inputsPalavraChave.length; i++) {

                palavrasChave.push(inputsPalavraChave[i].value);     
              
            }

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
            console.log(document.getElementById("inputPalavraChave").value);
            
        }
    </script>
  </body>
</html>