<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="view/css/index.css">
</head>
<body>

    <?php include "View/header.php"; ?>
    
    <main id="root">
        <?php 
            if (isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Candidato"):
                include "Source/Controller/VagasInteresses.php";
        ?>

        <div class="container">
            <div class="wrapperTitle">
                <h1>Vagas com seu interesse</h1>
            </div>

            <?php
                if ($vagasComOsInteresses):
            ?>

                <div class="wrapper">
                    <?php
                        foreach ($vagasComOsInteresses as $vaga) {
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
                    ?>
                </div>
            <?php
                else:
                    echo '
                        <div class="AlertaSemConteudo">
                            <h1>Nenhuma Vaga Cadastrada</h1>
                        </div>
                    ';
                endif;
            ?>

            <div class="wrapperTitle">
                <h1>Empresas</h1>
            </div>

            <?php
                require_once "Source/Model/Empresa.php"; 
                $respostaEmpresas = BuscarEmpresas();

                if($respostaEmpresas):
            ?>

                <div class="wrapper">
                    <?php 
                        foreach($respostaEmpresas as $empresa) {
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
                    ?>                
                </div>
            <?php
                else:
                    echo '
                            <div class="AlertaSemConteudo">
                                <h1>Nenhuma Empresa Cadastrada</h1>
                            </div>
                        ';
                endif;
            ?>
        </div>

        <?php 
            elseif(isset($_SESSION["tipoUsuario"]) && $_SESSION["tipoUsuario"] == "Empresa"):
                include "Source/Controller/VagasCriadasPelaEmpresa.php";
        ?>

                <?php
                    if($vagasCriadas):
                ?>

                    <div class="wrapperTitle">
                        <h1>Vagas Criadas</h1>
                    </div>

                    <div class="wrapper">
                        <?php
                            foreach($vagasCriadas as $vaga) {
                                $nomeEmpresa = getEmpresa($vaga[1]);
                        
                                echo '
                                    <div class="vaga">
                                        <a class="btnEditarVaga" href="http://localhost/VagasOnline/view/editarVaga.php?id='.$vaga[0].'">Editar Vaga</a>
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
                        
                        ?>
                    </div>
                <?php
                    else:
                        echo '
                            <div class="AlertaSemConteudo">
                                <h1>Nenhuma Vaga Cadastrada</h1>
                            </div>
                        ';
                    endif;
                ?>

        <?php  
            else:
        ?>

            <div class="AlertaSemConteudo">
                <h1>Nenhuma Vaga Cadastrada</h1>
            </div>


        <?php
            endif; 
        ?>

    </main>

    <?php include "View/footer.php"; ?>

</body>
</html>