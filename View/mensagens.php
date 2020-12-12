<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/VagasOnline/view/css/mensagens.css">
    <title>Vaga</title>
</head>
<body>

    <?php include "header.php"; ?>

    <main>

        <div id="msgEnviadasRecebidas">
            <?php include "../Source/Controller/ExibirMensagens.php"; ?>
        </div>

        <?php
                if (isset($_SESSION["tipoUsuario"])) {
                    
                    if($_SESSION["tipoUsuario"] == "Candidato"){
                        echo '<form style="width:100%;" action="http://localhost/VagasOnline/Source/Controller/MensagensController.php?idEmpresa='.$_GET["idEmpresa"].'&idVaga='.$_GET["idVaga"].'" method="post">';
                        
                    } else {
                        echo '<form style="width:100%;" action="http://localhost/VagasOnline/Source/Controller/MensagensController.php?cpfCandidato='.$_GET["cpfCandidato"].'&idVaga='.$_GET["idVaga"].'" method="post">';
                    }                    

                }  else {
                    echo '<form style="width:100%;" action="" method="post">';
                } 
                
            ?>

            <textarea name="inputMensagem" id="inputMensagem" cols="30" placeholder="Digite uma Mensagem" row="1" oninput="aumentarAltura(this)"></textarea>
            <button id="btnEnviarMensagem" type="submit"><img src="http://localhost/VagasOnline/media/iconEnviarMensagem.png"></button>
        </form>
    </main>
    
    <?php include "footer.php"; ?>


    <script type="text/javascript">

        function aumentarAltura(element){

            console.log("ScrollHeight: "+ element.scrollHeight);
            console.log("OffsetHeight: "+ element.offsetHeight);

            if (element.scrollHeight > element.offsetHeight)
            {
                element.row += 1;
            }
            
        }
        
    </script>

</body>
</html>