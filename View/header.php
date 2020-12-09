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

        header img {
            align-self: center;
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
            display: flex;
            justify-self: flex-end;
            justify-content: flex-end;
            align-items: center;
            width: 250px;
            font-size: 19px;
        }
            #dvUsuario a {
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
        height: 50px;
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
        }   

        #campoPesquisa img {
            background: url("http://localhost/VagasOnline/media/iconSearch.png") no-repeat scroll 7px 7px;
            padding-left: 50px;
        }
</style>

<header>
        
        <a href="http://localhost/VagasOnline/index.php"><img width="150" src="https://upload.wikimedia.org/wikipedia/commons/3/35/Logo-catho.png" alt="logo"></a>
        <ul>
            <li><a href="http://localhost/VagasOnline/index.php">Tela Inicial</a></li>
            <li><a href="#">Buscar Vagas</a></li>
            <li><a href="#">Empresas</a></li>
            <li><a href="#">Inscrições</a></li>
            <li><a href="#">Meu Currículo</a></li>
        </ul>


    <div id="dvUsuario">
        <a href="http://localhost/VagasOnline/view/login.php">Entrar/Cadastrar</a>
        <img id="fotoPerfil" src="<?= "http://localhost/VagasOnline/media/iconUser.png"; ?>">
    </div>

</header>

<div id="campoPesquisa">
    <b>Procure Por Vagas:</b>
    <input type="text" name="inputPesquisa">
    <!-- <img src="http://localhost/VagasOnline/media/iconSearch.png"> -->
</div>