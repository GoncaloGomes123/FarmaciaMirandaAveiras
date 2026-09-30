<?php
// 1. Incluir a conexão à base de dados
require_once 'conexao.php';

// Função auxiliar para evitar repetir código (DRY)
function gerarSeccao($conn, $idHtml, $titulo, $descricao, $categoriaBD) {
    // Preparar o pedido à base de dados
    $sql = "SELECT * FROM produtos WHERE categoria = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $categoriaBD); 
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Se não houver produtos, não mostra nada
    if ($resultado->num_rows === 0) return;

    // Início da Secção
    echo '<section id="' . $idHtml . '" class="py-4">';
    echo '<h2>' . $titulo . '</h2>';
    echo '<p>' . $descricao . '</p>';
    
    // Isto permite que o JavaScript reconheça e ative os botões deste carrossel
    echo '<div class="category-carousel trending-carousel my-3">';
    
    echo '<button class="trending-btn trending-prev" aria-label="Anterior"><i class="bi bi-chevron-left"></i></button>';
    
    // O contentor que vai deslizar
    echo '<div class="trending-track">';

    while ($row = $resultado->fetch_assoc()) {
        echo '<div class="trending-card">';
        echo '  <div class="card h-100">';
        echo '    <img src="' . htmlspecialchars($row['imagem']) . '" class="card-img-top trending-img-contain" alt="' . htmlspecialchars($row['nome']) . '">';
        echo '    <div class="card-body">';
        echo '      <h5 class="card-title">' . htmlspecialchars($row['nome']) . '</h5>';
        echo '      <p class="card-text">' . htmlspecialchars($row['descricao']) . '</p>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }

    echo '</div>'; // Fim do track
    echo '<button class="trending-btn trending-next" aria-label="Próximo"><i class="bi bi-chevron-right"></i></button>';
    echo '</div>'; // Fim do carousel
    echo '</section>';
    echo '<hr>'; 
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos — Farmácia Miranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header class="py-3 border-bottom bg-white">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="img/logo.png" alt="Logo" style="width:48px;height:48px;margin-right:0.75rem;">
                <div>
                    <div class="fw-bold">Farmácia <span class="text-success">Miranda</span></div>
                    <small>Produtos</small>
                </div>
            </div>
            <a href="index.php" class="btn btn-outline-secondary">Voltar ao Início</a>
        </div>
    </header>

    <main class="container py-4">
        <h1 class="mb-3">Produtos</h1>
        <p class="text-muted">Escolha uma categoria para ver os produtos disponíveis.</p>

        <?php
            gerarSeccao($mysqli, 'geral', 'Medicação Familiar', 'Produtos de uso diário e bem-estar geral.', 'geral');
            gerarSeccao($mysqli, 'bebe-mama', 'Bebé e Mamã', 'Artigos para bebés, maternidade e cuidados pré/post-natais.', 'bebe-mama');
            gerarSeccao($mysqli, 'saude-animal', 'Saúde Animal', 'Produtos e cuidados para animais de estimação.', 'saude-animal');
            gerarSeccao($mysqli, 'homem', 'Homem', 'Cuidados e produtos pensados para a saúde e higiene masculina.', 'homem');
        ?>

    </main>

    <footer class="py-4 border-top bg-white">
        <div class="container text-center text-muted">© Farmácia Miranda</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>