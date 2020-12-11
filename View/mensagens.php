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
            <p class="mensagem recebida"><b class="msgRecebida">Lorem Ipsum Dolor Ipsum</b></p>
            <p class="mensagem enviada"><b class="msgEnviada">remaining essentially unchanged.</b></p>
            <p class="mensagem enviada"><b class="msgEnviada">web sites still in their infancy. Various versions have evolved over the years, sometimes</b></p>
            <p class="mensagem recebida"><b class="msgRecebida">or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</b></p>
            <p class="mensagem recebida"><b class="msgRecebida">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</b></p>
            <p class="mensagem recebida"><b class="msgRecebida">or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</b></p>
            <p class="mensagem recebida"><b class="msgRecebida">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</b></p>
            <p class="mensagem enviada"><b class="msgEnviada">remaining essentially unchanged.</b></p>
            <p class="mensagem enviada"><b class="msgEnviada">web sites still in their infancy. Various versions have evolved over the years, sometimes</b></p>
            <p class="mensagem enviada"><b class="msgEnviada">remaining essentially unchanged.</b></p>
            <p class="mensagem enviada"><b class="msgEnviada">web sites still in their infancy. Various versions have evolved over the years, sometimes</b></p>
            <p class="mensagem enviada"><b class="msgEnviada">remaining essentially unchanged.</b></p>
        </div>

        <textarea name="inputMensagem" id="inputMensagem" cols="30" placeholder="Digite uma Mensagem" row="1" oninput="aumentarAltura(this)"></textarea>
        
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