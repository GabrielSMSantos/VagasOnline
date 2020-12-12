<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/listaVagas.css">
  </head>

  <body>

    <?php include "header.php"; ?>
    
    <main id="listaVagas">
      <div class="container">
        <div class="wrapperTitle">
          <h1>Lista de vagas</h1>
        </div>
        
        <div class="wrapper">
          <?php include "../Source/Controller/listaVagasController.php"; 

              if ($resultado){
                foreach($resultado as $vaga) {
                  $nomeEmpresa = getEmpresa($vaga[1]);
                  $verificarNumIncricoes = VerificarNumInscricoes($vaga[0]);

                  if ($verificarNumIncricoes < $vaga[7]) {
                      echo '
                          <div class="vaga">
                              <div class="dadosVaga">
                                  <h2 class="nomeVaga">'.$vaga[2].'</h2>
                                  <b id="nomeEmpresa">'.$nomeEmpresa["nome_empresa"].'</b>
                                  <p id="salario">Salário: <b>R$ '.number_format($vaga[3], 2, ",", ".").'</b></p>
                                  <p id="vagasDisponiveis">Vagas Disponíveis: '.$vaga[10].'</p>
                                  <p class="descricaoVaga">
                                      '.$vaga[6].'
                                  </p>
                              </div>

                              <a class="linkVaga" href="http://localhost/VagasOnline/view/vaga.php?id='.$vaga[0].'">Visualizar Vaga</a>
                          </div>
                      
                      ';
                  }
                }

              } else {
                 echo '
                    <div class="AlertaSemConteudo">
                        <h1>Nenhuma Vaga Cadastrada</h1>
                    </div>
                 ';
              }

                

          ?>
        
    </main>

    <?php include "footer.php"; ?>

  </body>
</html>