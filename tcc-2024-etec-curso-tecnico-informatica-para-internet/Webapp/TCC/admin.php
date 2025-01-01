<?php
session_start();
if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 0) {
    header('Location: index.html');
    exit;
} else {
    $nm_usuario = isset($_SESSION['nm_usuario']) ? $_SESSION['nm_usuario'] : 'Usuário';
    $ds_loginL = isset($_SESSION['login']) ? $_SESSION['login'] : 'Login';
    $endereco = isset($_SESSION['endereco']) ? $_SESSION['endereco'] : 'Endereço';
    $telefone = isset($_SESSION['telefone']) ? $_SESSION['telefone'] : 'Telefone';
    $alias_endereco = isset($_SESSION['alias_endereco']) ? $_SESSION['alias_endereco'] : 'Nenhum Endereço Secundário';
}

include_once 'conecta.php';

$id_ecoponto = isset($_GET['bairro']) ? $_GET['bairro'] : null;
$ecopontos = [];
$sql = "SELECT cd_ecoponto, nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim FROM tb_ecoponto";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($result) {
    foreach ($result as $row) {
        $ecopontos[$row['cd_ecoponto']] = [
            "nm_ecoponto" => $row['nm_ecoponto'],
            "end_ecoponto" => $row['end_ecoponto'],
            "tel_ecoponto" => $row['tel_ecoponto'],
            "horario_semana" => $row['horario_semana'],
            "horario_fim" => $row['horario_fim']
        ];
    }
} else {
    echo "<script>alert('Erro na consulta ao banco de dados: " . $conn->error . "');</script>";
}
if ($id_ecoponto) {
    $query = "SELECT nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim FROM tb_ecoponto WHERE cd_ecoponto = ?";          //buscar de acordo com o id
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $id_ecoponto, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ecopontos[$row['cd_ecoponto']] = [
                    "nm_ecoponto" => $row['nm_ecoponto'],
                    "end_ecoponto" => $row['end_ecoponto'],
                    "tel_ecoponto" => $row['tel_ecoponto'],
                    "horario_semana" => $row['horario_semana'],
                    "horario_fim" => $row['horario_fim']
                ];
            }
        } else {
            echo "<script>alert('Nenhum ecoponto encontrado no banco de dados.');</script>";
        }
    } else {
        echo "<script>alert('Erro na consulta ao banco de dados: " . $conn->error . "');</script>";
    }
} else {
    $nome_ecoponto = '';
    $endereco_ecoponto = '';
    $telefone_ecoponto = '';
    $horario_semana = '';
    $horario_fim_semana = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <link rel="stylesheet" href="webapp/css/admin.css">
    <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>
    <title>Administrador</title>
</head>    


<body>

    <header id="titulo">
        <h2 class="pre-titulo">Bem-vindo</h2>
        <h1 class="titulo">Administrador</h1>
    </header>

    <main class="saiba-mais">

<form class="form" action="webapp/scripts/alterar.php" method="POST">
    <div class="form-group">
        <label for="nome">Bairro do Ecoponto:</label>
        <select name="bairro" id="bairro" onchange="atualizarCampos()">
            <option value="" disabled selected>Bairro</option>
            <option value="1">USF Gaivota</option>
            <option value="2">Eco Ponto Loty</option>
            <option value="3">Eco Ponto Savoy</option>
            <option value="4">Eco Ponto Cibratel II</option>
        </select>
    </div><br>

    <div class="form-group">
        <label for="nome">Nome do Ecoponto:</label>
        <input id="nome" name="nome" type="text" value="<?php echo htmlspecialchars($nome_ecoponto); ?>" required />
    </div><br>

    <div class="form-group">
        <label for="endereco">Endereço do Ecoponto:</label>
        <textarea id="endereco" name="endereco" required><?php echo htmlspecialchars($endereco_ecoponto); ?></textarea>
    </div><br>

    <div class="form-group">
        <label for="telefone">Telefone da Unidade:</label>
        <input id="telefone" name="telefone" type="text" value="<?php echo htmlspecialchars($telefone_ecoponto); ?>" required />
    </div><br>

    <div class="form-group">
        <label for="horario_semana">Horário de Funcionamento:</label>
        <input id="horario_semana" name="horario_semana" type="text" value="<?php echo htmlspecialchars($horario_semana); ?>" required />
    </div><br>

    <div class="form-group">
        <label for="horario_fim_semana">Horário aos Fins de Semana:</label>
        <input id="horario_fim_semana" name="horario_fim_semana" type="text" value="<?php echo htmlspecialchars($horario_fim_semana); ?>" required />
    </div><br>

    <button class="button1" type="submit">Salvar Alterações</button>
</form>
    <form class="form" action="logout.php" method="POST">
        <button class="button2" type="submit">Sair da Conta</button>
    </form>

    </main>

<script>
    const enderecos = <?php echo json_encode($ecopontos); ?>;

    function atualizarCampos() {
        const selectBairro = document.getElementById('bairro');
        const campoEndereco = document.getElementById('endereco');
        const campoTelefone = document.getElementById('telefone');
        const campoNome = document.getElementById('nome');
        const horarioSemana = document.getElementById('horario_semana');
        const horarioFimSemana = document.getElementById('horario_fim_semana');
        const valorSelecionado = selectBairro.value;
        if (enderecos[valorSelecionado]) {
            campoEndereco.value = enderecos[valorSelecionado].end_ecoponto;
            campoTelefone.value = enderecos[valorSelecionado].tel_ecoponto;
            campoNome.value = enderecos[valorSelecionado].nm_ecoponto;
            horarioSemana.value = enderecos[valorSelecionado].horario_semana;
            horarioFimSemana.value = enderecos[valorSelecionado].horario_fim;
        } else {
            campoEndereco.value = '';
            campoTelefone.value = '';
            campoNome.value = '';
            horarioSemana.value = '';
            horarioFimSemana.value = '';
        }
    }
</script>

</body>
</html>
