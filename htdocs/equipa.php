<?php require_once 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Nossa Equipa — Farmácia Miranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <header class="py-3 border-bottom bg-white sticky-top">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="img/logo.png" alt="Logo" style="width:48px;height:48px;margin-right:0.75rem;">
                <div>
                    <div class="fw-bold">Farmácia <span class="text-success">Miranda</span></div>
                    <small class="text-muted">A Nossa Equipa</small>
                </div>
            </div>
            <a href="index.php" class="btn btn-outline-secondary btn-sm px-3 rounded-pill">Voltar ao Início</a>
        </div>
    </header>

    <main class="container py-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h1 class="fw-bold mb-3" style="color: var(--green-primary);">Quem Cuida de Si</h1>
                <p class="text-muted fs-5">Mais do que dispensar medicamentos, a nossa missão é ouvir, aconselhar e cuidar. Conheça os rostos que o recebem todos os dias na Farmácia Miranda.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php
            // Vai buscar todos os membros da equipa à base de dados
            $sql = "SELECT * FROM equipa";
            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm team-card-modern text-center">
                            <div class="team-img-wrapper mt-4 mx-auto">
                                <img src="<?php echo htmlspecialchars($row['imagem']); ?>" alt="<?php echo htmlspecialchars($row['nome']); ?>" class="img-fluid rounded-circle team-img shadow-sm">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="fw-bold mb-1" style="color: var(--green-primary);"><?php echo htmlspecialchars($row['nome']); ?></h5>
                                <span class="badge bg-success-subtle text-success rounded-pill mb-3 mx-auto px-3 py-2"><?php echo htmlspecialchars($row['cargo']); ?></span>
                                <p class="text-muted small fst-italic flex-grow-1">"<?php echo htmlspecialchars($row['citacao']); ?>"</p>
                            </div>
                        </div>
                    </div>
            <?php 
                }
            } else {
                echo "<p class='text-center text-muted'>A equipa será apresentada em breve.</p>";
            }
            ?>
        </div>
    </main>

    <footer class="py-4 border-top bg-white mt-auto">
        <div class="container text-center text-muted">© Farmácia Miranda</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>