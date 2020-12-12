<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empresas</title>
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
          <?php include "../Source/Model/Empresa.php"; 

            $resultado = BuscarEmpresas();
          

              if ($resultado){
                foreach($resultado as $empresa) {
                    echo '
                        <div class="vaga">
                            <div class="dadosVaga">
                                <h2 class="nomeVaga">'.$empresa[1].'</h2>
                                <p class="descricaoVaga">
                                    '.$empresa[4].'
                                </p>
                            </div>
            
                            <a class="linkVaga" href="http://localhost/VagasOnline/view/empresa.php?id='.$empresa[0].'">Conhecer Empresa</a>
                        </div>
                    ';
                  
                }

              } else {
                 echo '
                    <div class="AlertaSemConteudo">
                        <h1>Nenhuma Vaga Cadastrada</h1>
                    </div>
                 ';
              }

                

          ?>
        </div>
        
    </main>

    <?php include "footer.php"; ?>

  </body>
</html>