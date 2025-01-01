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
    $ds_loginL = isset($_SESSION['login']) ? $_SESSION['login'] : 'Login';
    $endereco = isset($_SESSION['endereco']) ? $_SESSION['endereco'] : 'Endereço';
    $telefone = isset($_SESSION['telefone']) ? $_SESSION['telefone'] : 'Telefone';
    $alias_endereco = isset($_SESSION['alias_endereco']) ? $_SESSION['alias_endereco'] : '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/usuario.css">
    <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>
    <title>Usuário</title>
</head>
<body>

<header id="titulo">
    <h2 class="pre-titulo">Bem-vindo</h2>
    <h1 class="titulo"><?php echo htmlspecialchars($nm_usuario); ?></h1>
</header>

<img src="img/curva.png" alt="Curva decorativa" class="curva" />

<main class="saiba-mais">
    <p>Edite suas informações</p>
    <i class="fa-solid fa-angles-down" style="color: #000000;"></i>

    <form class="form" action="./scripts/usuarios.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text" value="<?php echo htmlspecialchars($nm_usuario); ?>" required />
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($ds_loginL); ?>" required />
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input id="telefone" name="telefone" type="text" value="<?php echo htmlspecialchars($telefone); ?>" required />
        </div>

        <div class="form-group">
            <label for="endereco">Endereço 1:</label>
            <textarea id="endereco" name="endereco" required><?php echo htmlspecialchars($endereco); ?></textarea>
        </div>

        <div class="form-group">
            <label for="endereco_alias">(Opcional)Endereço 2:</label>
            <textarea id="endereco_alias" name="endereco_alias" placeholder="Nenhum endereço secundário"><?php echo htmlspecialchars($alias_endereco); ?></textarea>
        </div>


        <button class="button1" type="submit">Salvar Alterações</button>
    </form>


    <form class="form" action="../logout.php" method="POST">
        <button class="button2" type="submit">Logout</button>
    </form>
    
    <form id="excluirContaForm" method="POST" action="scripts/excluir.php">
        <button type="button" onclick="confirmarExclusao()">Excluir Conta</button>
    </form>
</form>
</main>

<footer>
    <nav class="tab-bar">
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
    </nav>
</footer>


<script>
	document.addEventListener('DOMContentLoaded', function() {
	var telefoneInput = document.getElementById('telefone');

	telefoneInput.addEventListener('input', function() {
		var telefone = this.value.replace(/\D/g, ''); // Remove caracteres não numéricos
		var formattedTelefone = '';

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

 function confirmarExclusao() {
            // Exibe o diálogo de confirmação
            const confirmacao = confirm("Tem certeza de que deseja excluir sua conta? Esta ação não pode ser desfeita.");

            // Submete o formulário apenas se o usuário confirmar
            if (confirmacao) {
                document.getElementById('excluirContaForm').submit();
            }
        }
</script>
</body>
</html>
