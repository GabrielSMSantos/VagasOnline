<?php include "../Source/Model/Vaga.php"; 
      include "../Source/Model/Empresa.php";
      include "../Source/Model/Candidato.php";


    if(isset($_GET)){
        $vaga = BuscarVaga($_GET["id"]);
    }

    $empresa = getEmpresa($vaga[1]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/VagasOnline/view/css/vaga.css">
    <title>Vaga</title>
</head>
<body>

    <?php include "header.php"; ?>

    <main>
        <div id="vaga" <?= (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Empresa") ? 'style="width: 100%;"' : "" ?>>
            <h1 id="nomeVaga"><?= $vaga[2]; ?></h1>
            <b id="nomeEmpresa"><img src="http://localhost/VagasOnline/media/iconEmpresa_Small.png" align="left"><?= $empresa["nome_empresa"]; ?></b>
            
            <p id="palavrasChaves">
                Palavras-Chave: 
                <?php 
                    $arrayVaga = explode(",", $vaga[9]);

                    for ($i = 0; $i < count($arrayVaga); $i++):
                ?>
                    <b class="palavra"><?= $arrayVaga[$i] ?></b> 

                <?php 
                    endfor;
                ?>
                
            </p>

            <p id="salario">
                Salário: <b> R$ <?= number_format($vaga[3], 2, ",", "."); ?></b>
            </p>

            <p id="regiao">
                Região: <?= $vaga[5]; ?>
            </p>

            <p id="vagasDisponiveis">
                Vagas Disponíveis: <?= $vaga[10]; ?>
            </p>

            <p id="descricaoVaga">
                <?= $vaga[6]; ?>
            </p>
            <br><br>

            <?php 
            if(isset($_SESSION["id"]) && isset($_GET["id"]) && $_SESSION["tipoUsuario"] == "Candidato"):

                $isInscrito = VerificarInscricao($_SESSION["id"], $_GET["id"]);

                if ($isInscrito) :
            ?>
                    

            <button type="button" id="linkCandidatarSe" onclick="<?= "window.location.href = 'http://localhost/VagasOnline/Source/Controller/CandidatarSeController.php?idVaga=".$_GET['id']."'" ?>" disabled>
                VAGA CANDIDATADA
            </button>

            <?php 
                else:
            ?>

                <button type="button" id="linkCandidatarSe" onclick="<?= "window.location.href = 'http://localhost/VagasOnline/Source/Controller/CandidatarSeController.php?idVaga=".$_GET['id']."'" ?>">
                    CANDIDATAR-SE <img src="http://localhost/VagasOnline/media/iconCandidatarSe.png">
                </button>
                

            <?php
                endif;
            elseif(isset($_SESSION["id"]) && isset($_GET["id"]) && $_SESSION["tipoUsuario"] == "Empresa"):
            ?>

                <div id="CandidatosInscritos">   
                    <h3>Candidatos Inscritos na Vaga</h3>    

                    <table>

                        <tr style="color: #000;">
                            <th class="dadosCandidato">
                                <p>
                                    CPF
                                </p>
                            </th>

                            <th class="dadosCandidato">
                                <p>
                                    NOME CANDIDATO
                                </p>
                            </th>

                            <th class="dadosCandidato">
                                <p>
                                    DATA DE NASCIMENTO
                                </p>
                            </th>

                            <th class="dadosCandidato">
                                <p>
                                    INTERESSES
                                </p>
                            </th>

                            <th style="width: 10%; border-bottom: 1px solid #ccc;"></th>

                            <th style="width: 10%; border-bottom: 1px solid #ccc;"></th>

                            <th style="width: 10%; border-bottom: 1px solid #ccc;"></th>
                        </tr>
                        
                        <?php 
                            if (isset($_GET["id"]))
                                $candidatos = CandidatosIncritosNaVaga($_GET["id"]); 

                                if(!$candidatos) {
                                    echo '
                                        <tr>
                                            <th id="nenhumCandidato" colspan="7">
                                                <b>Nenhum Candidato Cadastrado Ainda</b>
                                            </th>
                                        </tr>
                                    ';
                                }

                                foreach($candidatos as $candidato){
                                    $dadosCandidato = BuscarCandidato($candidato[2]);


                                    echo '
                                        <tr style="color: #555;">
                                            <th class="dadosCandidato">
                                                <p>
                                                    '.$dadosCandidato["cpf_candidato"].'
                                                </p>
                                            </th>
                    
                                            <th class="dadosCandidato">
                                                <p>
                                                '.$dadosCandidato["nome_candidato"].'
                                                </p>
                                            </th>
                    
                                            <th class="dadosCandidato">
                                                <p>
                                                '.$dadosCandidato["dataNascimento_candidato"].'
                                                </p>
                                            </th>
                    
                                            <th class="dadosCandidato">
                                                <p>
                                                '.$dadosCandidato["interesses_candidato"].'
                                                </p>
                                            </th>

                                            <th style="border-bottom: 1px solid #ccc;" colspan="3">
                                                    <a class="btnEnviarMsg" href="http://localhost/VagasOnline/view/mensagens.php?cpfCandidato='.$dadosCandidato["cpf_candidato"].'&idVaga='.$_GET["id"].'">Enviar Mensagem</a>
                                            </th>
                                        </tr>
                                    ';
                                }
                        ?>
                    </table>
                    
                    
                </div>  

            <?php
            endif;
            ?>
            

                      
        </div>


        <?php 
            if(isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Candidato"):            
        ?>
        
        <div id="empresa">
            <h2><img src="http://localhost/VagasOnline/media/iconEmpresa_Big.png" align="left"><?= $empresa["nome_empresa"]; ?></h2>

            <p id="sobreEmpresa">
                <b>Sobre: </b>
                <?= $empresa["sobre_empresa"]; ?>                
            </p>

            <br><br>

            <?= (isset($_SESSION["id"]) && $isInscrito) ? '<a id="enviarMensagem" href="http://localhost/VagasOnline/view/mensagens.php?idEmpresa='.$empresa["id_empresa"].'&idVaga='.$_GET["id"].'">Enviar mensagem para empresa</a>' : "" ?>

        </div>

        <?php 
            endif;
        ?>

    </main>
    
    <?php include "footer.php"; ?>

</body>
</html>