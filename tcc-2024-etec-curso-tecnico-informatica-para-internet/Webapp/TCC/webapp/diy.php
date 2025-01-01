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
    <link rel="stylesheet" href="css/diy.css">
    <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>
    <title>DIY</title>
</head>
<body>

<header id="user">
    <a href="usuario.php">
        <i class="fa-solid fa-circle-user fa-3x" style="color: #ffffff;"></i>
    </a>
</header>

<main class="ion-padding">
    <h1>DIY</h1>
    <p class="diy">
    Nesta página, você encontrará atividades educativas com materiais recicláveis, estimulando a criatividade e o aprendizado das crianças.O DIY (faça você mesmo) ajuda a desenvolver a imaginação, promove a sustentabilidade e torna o aprendizado mais prático e envolvente.
    </p>
  
    <section>
        <h2 style="text-align: center;">Jogo Pega Bolinhas</h2>
        <img src="img/jogo_pega_bolinhas.jpeg" alt="Imagem do Jogo Pega Bolinhas" style="display: block; margin: 0 auto; width: 100%; max-width: 350px; height: auto; border-radius: 20px;">
        <p><strong>Objetivo:</strong></p>
        <ul>
            <li>Despertar a curiosidade e criatividade estimulando a coordenação motora fina</li>
        </ul>
        <p><strong>Como usar:</strong></p>
        <ul>
            <li>O jogador deve pegar com a pinça uma bolinha por vez e colocá-la em seu respectivo cone. Pode-se contar quantas bolinhas cabem em um cone e alterar as cores</li>
        </ul>
        <p><strong>Materiais necessários:</strong></p>
        <ul>
            <li>1 caixa de sapato</li>
            <li>1 cartela de ovos</li>
            <li>20 bolinhas coloridas</li>
            <li>1 pregador de roupa para cada jogador</li>
            <li>1 cone de papel para cada jogador</li>
            <li>Fita adesiva</li>
        </ul>
        <p><strong>Passo a passo:</strong></p>
        <ol>
            <li>Pinte as bolinhas cores diferentes, cinco de cada cor.</li>
            <li>Corte a bandeja de ovos deixando 20 espaços, ficando 4x5</li>
            <li>Coloque a bandeja de ovos dentro da caixa de papelão.</li>
            <li>Pegue meia folha sulfite cole com fita para formar o cone</li>
            <li>Adicione as pinças ao jogo</li>
        </ol>
    </section>
    
    <section>
        <h2 style="text-align: center;">Pebolim</h2>
        <img src="img/pebolim.jpeg" alt="Imagem Pepolim Reciclável" style="display: block; margin: 0 auto; width: 100%; max-width: 350px; height: auto; border-radius: 20px;">
        <p><strong>Objetivo:</strong></p>
        <ul>
            <li>Estimular o trabalho em equipe, coordenação motora e desenvolvimento cognitivo por meio da estratégia e raciocínio.</li>
        </ul>

        <p><strong>Como usar:</strong></p>
        <ul>
            <li>Os jogadores movem os personagens com as varetas para tentar marcar gols. Cada jogador controla um lado do campo.</li>
        </ul>

        <p><strong>Materiais:</strong></p>
        <ul>
            <li>Caixa de papelão</li>
            <li>Palitos de churrasco ou varetas</li>
            <li>12 pregadores de roupa</li>
            <li>Tinta e adesivos para decoração</li>
            <li>Bola de ping-pong ou isopor</li>
        </ul>

        <p><strong>Passo a passo:</strong></p>
        <ol>
            <li>Corte uma caixa de papelão no formato de um campo de futebol.</li>
            <li>Pinte o fundo da caixa com linhas e áreas de gol para representar o campo.</li>
            <li>Cole ou desenhe figuras de jogadores em canudos ou tubos de plástico.</li>
            <li>Perfure as laterais da caixa para passar as varetas, criando linhas de jogadores controláveis.</li>
            <li>Adicione uma bola e incentive as crianças a moverem os tubos para jogar.</li>
        </ol>
    </section>

    <section>
    <h2 style="text-align: center;">Pega Varetas</h2>
        <img src="img/pega_varetas.jpeg" alt="Imagem Pepolim Reciclável" style="display: block; margin: 0 auto; width: 100%; max-width: 350px; height: auto; border-radius: 20px;">
        <p><strong>Objetivo:</strong></p>
            <ul>
                <li>Desenvolver a criatividade, coordenação motora e habilidades de resolução de problemas ao jogar com materiais recicláveis.</li>
            </ul>

            <p><strong>Como usar:</strong></p>
            <ul>
                <li>Coloque os palitos dentro das garrafas, passando-os pelos furos, e insira as tampinhas nas aberturas para segurar os palitos. Cada jogador, na sua vez, deve retirar um palito de cada vez, sem derrubar as tampinhas. Após retirar um palito, o jogador passa a vez para o próximo. O jogo continua até que todos os palitos sejam retirados, e quem derrubar todas as tampinhas perde o jogo.</li>
            </ul>
        <p><strong>Materiais necessários:</strong></p>
        <ul>
            <li>2 garrafas PET</li>
            <li>E.V.A.</li>
            <li>Canetinhas coloridas</li>
            <li>Pistola de cola quente ou ferro de solda</li>
            <li>Estilete</li>
            <li>30 palitos de churrasco</li>
            <li>20 tampinhas</li>
        </ul>
        <p><strong>Passo a passo:</strong></p>
        <ol>
            <li>Corte as bases das garrafas PET com o estilete para criar dois suportes (bases) para o jogo.</li>
            <li>Coloque uma garrafa dentro da outra, de forma que fiquem em pé e equilibradas.</li>
            <li>Corte o meio da parte de cima de cada garrafa de maneira que seja possível inserir as tampinhas.</li>
            <li>Corte um pequeno retângulo na parte da base das garrafas para que seja possível retirar as tampinhas quando caírem.</li>
            <li>Com a pistola de cola quente ou o ferro de solda, faça furos pequenos nas garrafas PET na lateral, onde os palitos de churrasco serão inseridos. Faça esses furos com espaçamento suficiente para que os palitos fiquem fixos, mas não caiam facilmente.</li>
            <li>Decore as garrafas com canetinhas coloridas, papéis ou E.V.A., criando desenhos ou padrões ao seu gosto.</li>
            <li>Decore os palitos de churrasco com canetinhas ou outros materiais criativos.</li>
            <li>Passe os palitos de churrasco pelos furos feitos nas garrafas PET, de forma que fiquem fixos, mas que possam ser removidos com cuidado.</li>
        </ol>

    </section>

    <section>
    <h2 style="text-align: center;">Tapete Sensorial</h2>
        <img src="img/tapete_sensorial.jpeg" alt="Imagem tapete sensorial" style="display: block; margin: 0 auto; width: 100%; max-width: 350px; height: auto; border-radius: 20px;">
        <p><strong>Objetivo:</strong></p>
        <ul>
            <li>Estimular o tato e a percepção sensorial, desenvolvendo a motricidade ao explorar diferentes texturas.</li>
        </ul>

        <p><strong>Como usar:</strong></p>
        <ul>
            <li>A criança pode andar descalça sobre o tapete ou tocar nas texturas com as mãos, explorando cada material e descrevendo o que sente.</li>
        </ul>

        <p><strong>Materiais:</strong></p>
        <ul>
            <li>Tecido resistente (base do tapete)</li>
            <li>Materiais variados para texturas (algodão, palha, papel bolha, EVA, feltro, etc.)</li>
            <li>Cola quente</li>
        </ul>

        <p><strong>Passo a passo:</strong></p>
        <ol>
            <li>Corte o tecido na forma desejada e cole os materiais variados para texturas em seções separadas.</li>
            <li>Fixe cada material bem, para que ele resista ao toque e movimento.</li>
            <li>Oriente a criança a sentir cada textura, descrevendo as sensações e estimulando o vocabulário.</li>
        </ol>
    </section>

    <section>
    <h2 style="text-align: center;">Jogo de Coordenação (Pista com Obstáculos)</h2>
        <img src="img/pedrinhas_ambulantes.jpeg" alt="Imagem Pepolim Reciclável" style="display: block; margin: 0 auto; width: 100%; max-width: 350px; height: auto; border-radius: 20px;">
        <p><strong>Objetivo:</strong></p>
            <ul>
                <li>Trabalhar a coordenação motora, concentração e habilidades de planejamento ao percorrer a pista com obstáculos.</li>
            </ul>

            <p><strong>Como usar:</strong></p>
            <ul>
                <li>A criança deve mover uma peça ao longo da pista sem tocar nos obstáculos. Pode-se cronometrar o tempo para aumentar o desafio.</li>
            </ul>

            <p><strong>Materiais:</strong></p>
            <ul>
                <li>Caixa de pizza</li>
                <li>Obstáculos variados (feitos com rolo de papel higienico)</li>
                <li>Tinta para decorar</li>
                <li>Peças para mover na pista (pode ser uma bolinha pequena)</li>
            </ul>

            <p><strong>Passo a passo:</strong></p>
            <ol>
                <li>Recorte uma base circular de papelão e pinte o fundo de uma cor atrativa.</li>
                <li>Cole pequenos obstáculos distribuídos pela pista, como quadrados ou cilindros.</li>
                <li>Pinte cada obstáculo de uma cor diferente para chamar a atenção.</li>
                <li>Ensine a criança a mover uma peça ao longo da pista, evitando tocar os obstáculos.</li>
            </ol>
    </section>

    <section>
    <h2 style="text-align: center;">Jogo das Formas</h2>
        <img src="img/jogo_das_formas.jpeg" alt="Imagem Pepolim Reciclável" style="display: block; margin: 0 auto; width: 100%; max-width: 350px; height: auto; border-radius: 20px;">
        <p><strong>Objetivo:</strong></p>
        <ul>
            <li>Trabalhar o reconhecimento de cores, formas e coordenação motora fina.</li>
        </ul>

        <p><strong>Como usar:</strong></p>
        <ul>
            <li>A criança deve encaixar as formas nos espaços correspondentes de acordo com a cor e formato.</li>
        </ul>

        <p><strong>Materiais necessários:</strong></p>
        <ul>
            <li>1 caixa de papelão</li>
            <li>Palitos ou canudos reforçados</li>
            <li>Cola quente</li>
            <li>Tesoura</li>
            <li>Cartolina</li>
        </ul>

        <p><strong>Passo a passo:</strong></p>
        <ol>
            <li>Recorte várias formas geométricas em cartolina de diferentes cores.</li>
            <li>Cole as formas em palitos e fixe-os em uma base de papelão.</li>
            <li>Crie buracos na tampa da caixa para que as formas sejam encaixadas.</li>
            <li>Oriente a criança a encaixar as formas nas aberturas correspondentes.</li>
        </ol>
    </section>
</main>

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

</body>
</html>
