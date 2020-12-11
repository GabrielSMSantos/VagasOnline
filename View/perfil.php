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
      <div id="containerCandidato" class="containerCandidato">
        <div class="dadosPessoais">
          <div class="dadosTexto">
            <h1>Informações Pessoais</h1>
          </div>
          
          <div class="wrapperDados">
            <div class="wrapperDadosContent">
              <div class="dadosContent flex">
                <label class="textLbl font-11" for="nome">Nome: </label>
                <input name="nome" class="inptBorder textInpt" type="text" placeholder="Nome do candidato" disabled/>
              </div>
            
              <div class="dadosContent flex">
                <label class="textLbl font-11" for="cpf">Cpf: </label>
                <input name="cpf" class="inptBorder textInpt" type="text" placeholder="Cpf do candidato" disabled/>
              </div>
            </div>
            
            <div class="dadosContent formulario flex">
              <label class="textLbl font-11" for="dataNascimento">Data de Nascimento: </label>
              <input class="inputFormulario" type="date" name="dataNascimento" style="max-height: 35px;" />
            </div>
          </div>
        </div>

        <div class="dadosLogin">
          <div class="dadosTexto">
            <h1>Informações de Login</h1>
          </div>

          <div class="dadosContent flex">
            <label class="textLbl font-11" for="usuario">Usuário: </label>
            <input name="usuario" class="inptBorder textInpt" type="text" placeholder="Usuário" disabled/>
          </div>

          <div class="dadosContent">
            <a href="#" class="senha font-11">Alterar senha</a>
          </div>
        </div>
      </div>

      <div id="containerEmpresa" class="containerEmpresa">
        <div class="dadosPessoais">
          <div class="dadosTexto">
            <h1>Informações Sobre a Empresa</h1>
          </div>
          
          <div class="wrapperDados">
            <div class="wrapperDadosContent">
              <div class="dadosContent flex">
                <label class="textLbl font-11" for="nome">Nome: </label>
                <input name="nome" class="inptBorder textInpt" type="text" placeholder="Nome da empresa" disabled/>
              </div>
            
              <div class="dadosContent flex">
                <label class="textLbl font-11" for="cnpj">Cnpj: </label>
                <input name="cnpj" class="inptBorder textInpt" type="text" placeholder="Cnpj da empresa" disabled/>
              </div>
              
              <div class="dadosContent flex">
                <label class="textLbl font-11" for="endereco">Endereço: </label>
                <input name="endereco" class="inptBorder textInpt" type="text" placeholder="Endereço da empresa" disabled/>
              </div>
            </div>
              
            <div class="dadosContent flex textArea">
              <label class="textLbl font-11" for="sobre">Sobre: </label>
              <textarea class="areaSobre inptBorder font-11" name="sobre" id="empresa-id" cols="30" rows="10" placeholder="Sobre a empresa aqui" disabled></textarea>
            </div>
          </div>
        </div>

        <div class="dadosLogin">
          <div class="dadosTexto">
            <h1>Informações de Login</h1>
          </div>

          <div class="dadosContent flex">
            <label class="textLbl font-11" for="usuario">Usuário: </label>
            <input name="usuario" class="inptBorder textInpt" type="text" placeholder="Usuário" disabled />
          </div>

          <div class="dadosContent">
            <a href="#" class="senha font-11">Alterar senha</a>
          </div>
        </div>

        <div class="editar">
          <button class="btn btnEditar">
            Editar
          </button>

          <button class="btn btnSalvar">
            Salvar Alterações
          </button>
        </div>
      </div>
    </main>

    <?php include "footer.php"; ?>

    <script>
      
    </script>
  </body>
</html>