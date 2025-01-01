<?php
session_start();
if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 1) {
  echo "<script>
  alert('Acesso negado! Realize o login antes de acessar a página.');
  window.location.href = '../index.html';
</script>";
exit;
} else {
    $nm_usuario = isset($_SESSION['nm_usuario']) ? $_SESSION['nm_usuario'] : 'Usuário';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/logo.png" type="image/png">
  <link rel="stylesheet" href="css/forms.css">
  <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>
  <title>Formulário de Envio de Materiais</title>
</head>
<body>
<header id="user">
  <a href="usuario.php"><i class="fa-solid fa-circle-user fa-3x" style="color: #ffffff;"></i></a>
</header>
  <div class="conteudo">
    <div id="instrucao">
      <h2 id="titulo"><strong>Materiais</strong></h2>
      <p>Para enviar materiais preencha os campos abaixo:</p>
    </div>

    <form id="materialForm">
        <div>
          <label for="nome">Nome:</label>
          <input id="nome" type="text" name="nome" required>
        </div>

        <div>
          <label for="telefone">Telefone:</label>
          <input id="telefone" type="tel" name="telefone" required>
        </div>

        <div>
          <label for="endereco">Endereço:</label>
          <input id="endereco" type="text" name="endereco" required>
        </div>

        <div class="form-group">
          <label for="bairro">Bairro:</label>
          <select id="bairro" name="bairro" class="form-control" required>
            <option value="" disabled selected>Selecione</option>
            <option value="aguapeu">Aguapeú</option>
            <option value="ararau">Araraú</option>
            <option value="bairro-do-rio-acima">Bairro do Rio Acima</option>
            <option value="baixio">Baixio</option>
            <option value="belas-artes">Belas Artes</option>
            <option value="bopiranga">Bopiranga</option>
            <option value="campos-eliseos">Campos Elíseos</option>
            <option value="centro">Centro</option>
            <option value="cibratel-i">Cibratel I</option>
            <option value="cibratel-ii">Cibratel II</option>
            <option value="cibratel-chacaras">Cibratel - Chácaras</option>
            <option value="cidade-anchieta">Cidade Anchieta</option>
            <option value="corumba">Corumbá</option>
            <option value="gaivota-interior">Gaivota-Interior</option>
            <option value="gaivota-praia">Gaivota-Praia</option>
            <option value="guapiranga">Guapiranga</option>
            <option value="guarau">Guaraú</option>
            <option value="guarda-civil">Guarda Civil</option>
            <option value="ivoty">Ivoty</option>
            <option value="jamaica-interior">Jamaica-Interior</option>
            <option value="jamaica-praia">Jamaica-Praia</option>
            <option value="jardim-anchieta">Jardim Anchieta</option>
            <option value="jardim-coronel">Jardim Coronel</option>
            <option value="jardim-suarao-interior">Jardim Suarão-Interior</option>
            <option value="jardim-suarao-praia">Jardim Suarão-Praia</option>
            <option value="laranjeiras">Laranjeiras</option>
            <option value="loty">Loty</option>
            <option value="marrocos">Marrocos</option>
            <option value="mosteiro">Mosteiro</option>
            <option value="nova-itanhaem-interior">Nova Itanhaém-Interior</option>
            <option value="nova-itanhaem-praia">Nova Itanhaém-Praia</option>
            <option value="nossa-senhora-do-sion">Nossa Senhora do Sion</option>
            <option value="oasis">Oásis</option>
            <option value="praia-dos-sonhos">Praia dos Sonhos</option>
            <option value="raminho">Raminho</option>
            <option value="sabauna">Sabaúna</option>
            <option value="sao-fernando">São Fernando</option>
            <option value="satelite">Satélite</option>
            <option value="savoy">Savoy</option>
            <option value="suarao">Suarão</option>
            <option value="tropical">Tropical</option>
            <option value="tupy">Tupy</option>
            <option value="umuarama">Umuarama</option>
            <option value="verde-mar">Verde Mar</option>
            <option value="vila-sao-paulo">Vila São Paulo</option>
          </select>
        </div>

        <div>
          <label for="tipo">Tipo de Material:</label>
          <select id="tipo" name="tipo" required>
            <option value="" disabled selected>Selecione</option>
            <option value="papel">Papel</option>
            <option value="papelao">Papelão</option>
            <option value="vidro">Vidro</option>
            <option value="metal">Metal</option>
          </select>
        </div>

        <div>
          <label for="peso">Peso do Material:</label>
          <select id="peso" name="peso" required>
            <option value="" disabled selected>Selecione</option>
            <option value="1-5kg">1-5 kg</option>
            <option value="6-10kg">6-10 kg</option>
            <option value="11-20kg">11-20 kg</option>
            <option value="21-50kg">21-50 kg</option>
            <option value="51-100kg">51-100 kg</option>
            <option value="100kg+">Mais de 100 kg</option>
          </select>
        </div>
        
        <button type="submit">Enviar</button>
    </form>
  </div>

  <footer>
    <div class="tab-bar">
      <div class="tab-button" id="home">
        <a href="home.php">
          <div class="icon"><i class="fa-solid fa-house fa-xs" style="color: #f5f1c8;"></i></div>
        </a>
        <div class="label">HOME</div>
      </div>

      <div class="tab-button" id="ecopontos">
        <a href="ecopontos/ecopontos.php">
          <div class="icon"><i class="fa-solid fa-leaf fa-xs" style="color: #f5f1c8;"></i></div>
        </a>
        <div class="label">ECOPONTOS</div>
      </div>

      <div class="tab-button" id="cooperativa">
        <a href="cooper.php">
          <div class="icon"><i class="fa-solid fa-circle-info fa-sm" style="color: #f5f1c8;"></i></div>
        </a>
        <div class="label">COOPERATIVA</div>
      </div>

      <div class="tab-button" id="diy">
        <a href="diy.php">
        <div class="icon"><i class="fa-solid fa-paper-plane fa-xs" style="color: #f5f1c8;"></i></div>
        </a>    
        <div class="label">DIY</div>
      </div>
    </div>
  </footer>

  <script>
    //Para a formatação do telefone
        document.addEventListener('DOMContentLoaded', function() {
            var telefoneInput = document.getElementById('telefone');
    
            telefoneInput.addEventListener('input', function() {
                var telefone = this.value.replace(/\D/g, ''); // Remove caracteres não numéricos
                var formattedTelefone = '';
    
                // Formatação do telefone
                if (telefone.length > 0) {
                    formattedTelefone = '(' + telefone.substring(0, 2);
                }
                if (telefone.length > 2) {
                    formattedTelefone += ') ' + telefone.substring(2, 7);
                }
                if (telefone.length > 7) {
                    formattedTelefone += '-' + telefone.substring(7, 11);
                }
    
                this.value = formattedTelefone;
            });
         });
         document.addEventListener('DOMContentLoaded', function() {
    var telefoneInput = document.getElementById('telefone');

    telefoneInput.addEventListener('input', function() {
        var telefone = this.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        var formattedTelefone = '';

        // Formatação do telefone
        if (telefone.length > 0) {
            formattedTelefone = '(' + telefone.substring(0, 2);
        }
        if (telefone.length > 2) {
            formattedTelefone += ') ' + telefone.substring(2, 7);
        }
        if (telefone.length > 7) {
            formattedTelefone += '-' + telefone.substring(7, 11);
        }

        this.value = formattedTelefone;
    });
});
    //Enviar pro whatsapp
    document.getElementById('materialForm').addEventListener('submit', function(event) {
      event.preventDefault(); 

      const nome = document.getElementById('nome').value;
      const telefone = document.getElementById('telefone').value;
      const endereco = document.getElementById('endereco').value;
      const bairro = document.getElementById('bairro').value;
      const tipo = document.getElementById('tipo').value;
      const peso = document.getElementById('peso').value;

      const mensagem = `Olá, sou ${nome} e meu telefone é: ${telefone}.` +
                 ` O material que eu quero reciclar é ${tipo},` +
                 ` tem por volta de ${peso} e está localizado na ${endereco} - ` +
                 `bairro ${bairro}. Como devo prosseguir?`;
      const whatsappUrl = `https://api.whatsapp.com/send?text=${mensagem}`;

      window.open(whatsappUrl, '_blank'); 
    });
  </script>
</body>
</html>

