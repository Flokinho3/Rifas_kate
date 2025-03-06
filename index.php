<?php
    // Exemplo de valor arrecadado e meta
    $valorArrecadado = "0"; // Valor em texto com vírgula
    $meta = 4000000; // Meta em centavos

    // Converter vírgula para ponto e depois para número
    $valorArrecadado = str_replace(',', '.', $valorArrecadado);
    $valorArrecadado = floatval($valorArrecadado);

    // Calcular valor em centavos
    $valorArrecadadoCentavos = intval($valorArrecadado * 100);

    // Calcular a porcentagem de arrecadação
    $porcentagem = ($valorArrecadadoCentavos / $meta) * 100;
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apoio à Marilene</title>
    <link rel="stylesheet" href="CSS/Index.css">
    <link rel="icon" href="IMG/favicon.ico" type="image/x-icon">
    <style>
       
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <h1>Campanha Solidária - Apoio à Saúde</h1>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Juntos pela Saúde de Marilene</h1>
            <p>Uma história de esperança, coragem e solidariedade</p>
            <a href="#donate" class="btn btn-primary">Doe Agora</a>
        </div>
    </section>

    <!-- Marilene's Story Section -->
    <section class="story-section">
        <div class="story-grid">
            <img src="IMG/marilene.png" alt="Marilene" style="width:100%; border-radius:10px;">
            <div>
                <h2>A História de Marilene</h2>
                <p>Marilene é uma mulher extraordinária que enfrenta um dos maiores desafios de sua vida. Diagnosticada com uma condição médica complexa, ela precisa de uma cirurgia urgente que pode mudar completamente seu futuro.</p>
                <p>Sua jornada não é apenas sobre superar uma doença, mas sobre manter viva a esperança de voltar a ter qualidade de vida, de abraçar sua família, de realizar seus sonhos.</p>
            </div>
        </div>
    </section>

    <!-- Medical Needs Section -->
    <section class="story-section">
        <div class="story-grid">
            <div>
                <h2>Detalhes do Procedimento Médico</h2>
                <p>A cirurgia que Marilene necessita é complexa e requer recursos especializados. O custo total estimado é de R$40.000,00, um valor que representa não apenas um procedimento médico, mas a chance de uma nova vida.</p>
                <p>Cada contribuição, por menor que seja, representa um raio de esperança, um passo em direção à recuperação de Marilene.</p>
                <p>No caso das hérnias de disco na região cervical, as hérnias podem comprimir a medula espinhal e/ou nervos, o que pode levar a uma série de sintomas. Quando a medula óssea, que faz parte do sistema nervoso central, é comprimida, pode causar danos aos sinais nervosos que controlam várias funções do corpo, incluindo movimento e sensação.</p>
                <p>Sintomas</p>
                <list>
                    <li>Dor no pescoço ou na parte superior das costas</li>
                    <li>Dormência ou formigamento nos braços, mãos ou dedos</li>
                    <li>Fraqueza nos músculos dos braços ou nas mãos</li>
                    <li>Dificuldade para movimentar o pescoço</li>
                    <li>Dores de cabeça (principalmente na região posterior)</li>
                    <li>Problemas de coordenação e equilíbrior</li>
                </list>
                <p>Em casos graves, a compressão da medula espinhal pode afetar funções corporais mais críticas, como controle da bexiga ou dos intestinos, além de causar dificuldades de respiração. O tratamento pode incluir fisioterapia, medicação para alívio da dor, ou em casos mais graves (Infelismente o noso caso!), cirurgia para aliviar a pressão na medula espinhal.</p>
            </div>
            <img src="IMG/hernia.jpeg" alt="Procedimento Médico" style="width:100%; border-radius:10px;">
        </div>
    </section>

    <!-- Barra de progresso -->
    <div class="progress-bar">
        <div class="progress" style="width: <?php echo $porcentagem; ?>%; background-color: green;"><?php echo number_format($porcentagem, 2, ',', '.'); ?>%</div>
        <div class="progress" style="width: <?php echo 100 - $porcentagem; ?>%; background-color: red;"></div>
    </div>
    <div class="progress-info">
        <p>Meta: R$40.000,00</p>
        <p>Arrecadado: R$<?php echo number_format($valorArrecadado, 2, ',', '.'); ?></p>
    </div>

    <!-- se o valor for maior que arrecadao desabilita a doaçao! e exibe a mensagem de agradecimento -->
    <?php if ($valorArrecadadoCentavos >= $meta) { ?>
        <section class="story-section">
            <div class="story-grid">
                <div>
                    <h2>Meta Atingida!</h2>
                    <p>Com a sua ajuda, conseguimos arrecadar o valor necessário para a cirurgia de Marilene. Agradecemos a todos que contribuíram e fizeram parte dessa jornada de solidariedade e esperança.</p>
                    <p>As doações continuam sendo bem-vindas e serão destinadas a custos pós-operatórios e tratamentos adicionais. Agradecemos a todos
                    que se uniram a nós nessa causa e fizeram a diferença na vida de Marilene.</p>
                </div>
                <img src="IMG/thank-you.jpg" alt="Agradecimento" style="width:100%; border-radius:10px;">
            </div>
        </section>
    <?php } ?>

    <!-- Donation Section -->
    <section id="donate" class="donation-section">
        <h2>Como Você Pode Ajudar</h2>
        <div class="donation-cards">
            <div class="donation-card">
                <h3>Doação Direta</h3>
                <p>Contribua diretamente através do PIX</p>
                <button onclick="exibirPopup('pixPopup')" class="btn btn-primary">Doar Agora</button>
            </div>
            <div class="donation-card">
                <h3>Rifas!</h3>
                <p>Entre em contato com um dos membros da família!</p>
                <p>Apenas R$ 5,00 cada uma!</p>
                <button onclick="exibirPopup('ContatoPopup')" class="btn btn-primary">Contato</button>
            </div>
        </div>
    </section>

    <!-- Contato Popup -->
    <div id="ContatoPopup" class="popup">
        <div class="popup-content">
            <h2>Contato Kate</h2>
            <p>Telefone: (38) 9810-3910</p>
            <button onclick="copiarTexto('(38) 9810-3910')" class="btn">Copiar Contato</button>
            <button onclick="fecharPopup('ContatoPopup')" class="btn" style="background-color: #6c757d;">Fechar</button>
        </div>
    </div>

    <!-- PIX Donation Popup -->
    <div id="pixPopup" class="popup">
        <div class="popup-content">
            <h2>Doação via PIX</h2>
            <img src="IMG/PIX.png" alt="QR Code PIX" style="max-width:300px; margin:1rem auto;">
            <p>Qual quer valor e bem vindo!</p>
            <button onclick="copiarTexto('00020126450014BR.GOV.BCB.PIX0123thiagosiegamg@gmail.com5204000053039865802BR5925Thiago da Silva Dias Sieg6009SAO PAULO62140510DP8cdTk51Z630409C3')" class="btn">Copiar Chave PIX</button>
            <button onclick="fecharPopup('pixPopup')" class="btn" style="background-color: #6c757d;">Fechar</button>
        </div>
    </div>

    <script>
        function exibirPopup(id) {
            document.getElementById(id).style.display = 'flex';
        }

        function fecharPopup(id) {
            document.getElementById(id).style.display = 'none';
        }

        function copiarTexto(texto) {
            navigator.clipboard.writeText(texto).then(() => {
                alert('Copiado com sucesso!');
            });
        }

        // Fechar popup ao clicar fora
        window.onclick = function(event) {
            let popups = document.querySelectorAll(".popup");
            popups.forEach(popup => {
                if (event.target == popup) {
                    popup.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
