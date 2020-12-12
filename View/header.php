<?php session_start(); ?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }


    header {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        height: 95px;
        padding-top: 15px;
        padding-bottom: 10px;
        background-color: #fff;
        border-bottom: 2px solid #ececec;
    }

        #logo{
            align-self: center;
            margin-right: 200px;
        }

        header ul li{
            display: inline-block;
        }

            header ul li a{
                padding: 5px 10px;
                margin: 0 5px;
                text-decoration: none;
                font-size: 19px;
                color: #175fac;
            }

                header ul li a:hover {
                    text-decoration: underline;
                }

        #dvUsuario {
            position: relative;
            display: flex;
            justify-self: flex-end;
            justify-content: flex-end;
            align-items: center;
            width: 350px;
            font-size: 19px;
            padding: 10px 0;
        }

            .EntrarOuCadastrar {
                color: #175fac;
                text-decoration: none;
            }

            #subMenuUsuario {
                position: absolute;
                width: 250px;
                height: 158px;
                bottom: -158px;
                right: 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                visibility: hidden;
                background-color: #fff;
                opacity: 0.5;
                transition: opacity 250ms ease-in-out;
                z-index: 99;
            }
                #subMenuUsuario:after {
                    position: absolute;
                    width: 0;
                    height: 0;
                    top: 0%;
                    right: 18px;
                    content: '';
                    transform: translate(0%, -100%);
                    border-left: 7px solid transparent;
                    border-right: 7px solid transparent;
                    border-bottom: 7px solid #ccc;
                }

                #subMenuUsuario a {
                    display: block;
                    padding: 8px 10px 8px 15px;
                    border-top-left-radius: 4px;
                    border-top-right-radius: 4px;
                    background-color: #fff;
                    border-bottom: 1px solid #eee;
                    color: #555;
                    text-decoration: none;
                }

                    #subMenuUsuario a:hover {
                        background-color: rgba(204, 204, 204, 0.3);
                        color: #000;
                    }
                
        
            #dvUsuario:hover > #subMenuUsuario{
                visibility: visible;
                opacity: 1;
                
            }

            #nomeUsuario {
                text-align: right;
                text-decoration: none;
                color: #175fac;
            }

                #dvUsuario a:hover {
                    text-decoration: underline;
                }

            #dvUsuario img {
                border-radius: 50%;
                margin-left: 10px;
            }



    #campoPesquisa {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 55px;
        color: #fff;
        background-color: #175fac;
        border-bottom: 2px solid #ececec;
    }


        #campoPesquisa b {
            margin-right: 30px;
        }

        #campoPesquisa input {
            position: relative;
            width: 500px;
            padding: 10px 36px 10px 10px;
            background: url("http://localhost/VagasOnline/media/iconSearch.png") no-repeat right;
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 10px;
        }   

        #campoPesquisa img {
            background: url("http://localhost/VagasOnline/media/iconSearch.png") no-repeat scroll 7px 7px;
            padding-left: 50px;
        }
</style>

<header>
        
        <a id="logo" href="http://localhost/VagasOnline/index.php"><img width="150" src="http://localhost/VagasOnline/media/logo.png" alt="logo"></a>
        <ul>
            <li><a href="http://localhost/VagasOnline/index.php">Tela Inicial</a></li>
            <li><a href="http://localhost/VagasOnline/view/listaVagas.php">Vagas</a></li>
            <li><a href="http://localhost/VagasOnline/view/listaEmpresas.php">Empresas</a></li>
        </ul>


    <div id="dvUsuario">
        <?php 
            if (!isset($_SESSION["id"])):
        ?>
            <a class="EntrarOuCadastrar" href="http://localhost/VagasOnline/view/login.php">Entrar</a>
            &nbsp;
            <b>|</b>
            &nbsp;
            <a class="EntrarOuCadastrar" href="http://localhost/VagasOnline/view/cadastro.php">Cadastrar</a>
        <?php 
            else:
        ?>
            <a id="nomeUsuario" href="#"><?= $_SESSION["nome"]; ?></a>

            <div id="subMenuUsuario">
                <?php 
                    if ($_SESSION["tipoUsuario"] == "Candidato"):
                ?>
                <a href="http://localhost/VagasOnline/view/perfil.php?id=<?= (isset($_SESSION["id"])) ? $_SESSION["id"] : "" ?>">Perfil</a>
                <a href="#">Incrições</a>
                <a href="#">Meu Currículo</a>
                <a href="http://localhost/VagasOnline/Source/Controller/Logout.php">Sair</a>
                
                <?php
                    else:
                ?>
                    <a href="http://localhost/VagasOnline/view/perfil.php?id=<?= (isset($_SESSION["id"])) ? $_SESSION["id"] : "" ?>">Perfil</a>
                    <a href="http://localhost/VagasOnline/view/criarVaga.php">Criar Nova Vaga</a>
                    <a href="#">Mensagens</a>
                    <a href="http://localhost/VagasOnline/Source/Controller/Logout.php">Sair</a>
                    
                <?php
                    endif;
                ?>

            </div>

        <?php
            endif;
        ?>

        <img id="fotoPerfil" src="<?= "http://localhost/VagasOnline/media/iconUser.png"; ?>">
    </div>

</header>

<form action="http://localhost/VagasOnline/view/listaVagas.php" method="post" id="campoPesquisa">
    <b>Procure Por Vagas:</b>
    <input type="text" name="pesquisa">
    <!-- <img src="http://localhost/VagasOnline/media/iconSearch.png"> -->
</form>