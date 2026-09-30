<?php require_once 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Miranda</title>
    <link rel="icon" href="favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="py-0 border-bottom custom-header">
        <div class="container-fluid px-0">
            <div class="d-flex align-items-center justify-content-start py-2">

                <div class="d-flex align-items-center logo-section">
                    <img src="img/logo.png" alt="Logotipo Farmácias" class="me-2" style="width: 50px; height: 50px;">
                    <div class="d-flex flex-row align-items-center">
                        <span class="fw-bold logo-text">Farmácia</span>
                        <span class="text-success logo-text-secondary ms-2">Miranda</span>
                    </div>
                </div>

                 <nav class="navbar navbar-expand-lg py-0 border-bottom custom-navbar-menu flex-grow-1">
    <div class="container-fluid"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSaude" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Serviços
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownSaude">
                        <li><a class="dropdown-item" href="services.html#1400assistencia">1400assistência</a></li>
                        <li><a class="dropdown-item" href="services.html#sfveti">SFVETI</a></li>
                        <li><a class="dropdown-item" href="services.html#podologia">Podologia</a></li>
                        <li><a class="dropdown-item" href="services.html#nutricao">Nutrição</a></li>
                        <li><a class="dropdown-item" href="services.html#pim">PIM</a></li>
                        <li><a class="dropdown-item" href="services.html#clube-das-maes">Clube das Mães</a></li>
                        <li><a class="dropdown-item" href="services.html#injetaveis">Administração de Injetáveis</a></li>
                        <li><a class="dropdown-item" href="services.html#parametros-biologicos">Determinação de parâmetros biológicos</a></li>
                        <li><a class="dropdown-item" href="services.html#espaco-animal">Espaço Animal</a></li>
                    </ul>
                </li>
               	<li class="nav-item">
    				<a class="nav-link" href="equipa.php">A Nossa Equipa</a>
				</li>
                <li class="nav-item">
                    <a class="nav-link" href="#trending">Tendências do momento</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#bestsellers">BestSellers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fidelidade.html">Cartão Fidelidade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#support">Apoio ao Cliente</a>
                </li>
            </ul>
        </div>

        <div class="d-flex align-items-center ms-auto">
             <div class="dropdown me-2">
                <button class="btn btn-menu-custom dropdown-toggle" type="button" id="productsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list me-1"></i>
                    Produtos
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="productsDropdown">
                    <li><a class="dropdown-item" href="products.php#geral">Medicação Familiar</a></li>
                    <li><a class="dropdown-item" href="products.php#bebe-mama">Bebé e Mamã</a></li>
                    <li><a class="dropdown-item" href="products.php#saude-animal">Saúde Animal</a></li>
                    <li><a class="dropdown-item" href="products.php#homem">Homem</a></li>
                </ul>
            </div>
            </div>
        
    </div>
</nav>

            </div>
        </div>
    </header>
    
        <!-- Carrossel -->
        <div id="carouselExampleIndicators" class="carousel slide carousel-full" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="services.html"><img src="img/Nutri.jpeg" class="d-block w-100" alt="Slide 1"></a>
                </div>
                <div class="carousel-item">
                    <a href="services.html"><img src="img/Noreva.jpeg" class="d-block w-100" alt="Slide 2"></a>
                </div>
                <div class="carousel-item">
                    <a href="services.html"><img src="img/Clube das mães.png" class="d-block w-100" alt="Slide 3"></a>
                </div>
                <div class="carousel-item">
                    <a href="services.html"><img src="img/1400.jpg" class="d-block w-100" alt="Slide 4"></a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    	
    	<?php
        // =========================================================================
        // WIDGET SAÚDE & AMBIENTE (Com Open-Meteo - Tudo incluído e Grátis)
        // =========================================================================
        
        // Coordenadas de Aveiras de Cima
        $lat = "39.142";
        $lon = "-8.903";

        // URLs da API Open-Meteo (Tempo+UV e Qualidade do Ar/Pólen)
        $url_tempo = "https://api.open-meteo.com/v1/forecast?latitude={$lat}&longitude={$lon}&current=temperature_2m,uv_index&timezone=Europe/Lisbon";
        $url_polen = "https://air-quality-api.open-meteo.com/v1/air-quality?latitude={$lat}&longitude={$lon}&current=grass_pollen,european_aqi&timezone=Europe/Lisbon";

        // Função segura para fazer os pedidos via cURL
        function fazerPedidoSeguro($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0'); 
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);
            $resultado = curl_exec($ch);
            curl_close($ch);
            return json_decode($resultado, true);
        }

        // Obter os dados
        $dados_tempo = fazerPedidoSeguro($url_tempo);
        $dados_polen = fazerPedidoSeguro($url_polen);

        // Valores por defeito (Mantemos o seu fallback de segurança)
        $temperatura = "--";
        $uv = "--";
        $polen_txt = "Desconhecido";
        $icone_clima = "bi-cloud-sun text-secondary";
        
        $conselho_titulo = "Bem-estar Diário";
        $conselho_texto = "A sua saúde é a nossa prioridade. Mantenha uma alimentação equilibrada e beba água regularmente. Estamos na farmácia para qualquer aconselhamento que precise.";
        $icone_alerta = "bi-heart-pulse text-danger";

        // Se a API responder com sucesso...
        if ($dados_tempo && isset($dados_tempo['current'])) {
            $temperatura = round($dados_tempo['current']['temperature_2m']);
            $uv = round($dados_tempo['current']['uv_index']);
            
            // Lógica do Pólen
            if ($dados_polen && isset($dados_polen['current']['grass_pollen'])) {
                $polen_valor = $dados_polen['current']['grass_pollen'];
                if ($polen_valor < 10) { $polen_txt = "Baixo"; }
                elseif ($polen_valor < 50) { $polen_txt = "Moderado"; }
                else { $polen_txt = "Alto"; }
            } else {
                $polen_txt = "Moderado";
            }

            // O seu "Cérebro" do Farmacêutico Digital mantido e melhorado!
            if ($polen_txt == "Alto") {
                $conselho_titulo = "Alerta de Alergias Primaveris";
                $conselho_texto = "Os níveis de pólen estão muito altos! Se sofre de alergias ou asma, evite atividades intensas ao ar livre. Passe pela farmácia para garantir que tem a sua medicação em dia.";
                $icone_alerta = "bi-wind text-info";
                $icone_clima = "bi-wind text-info";
            } elseif ($uv >= 7) {
                $conselho_titulo = "Atenção aos Raios UV";
                $conselho_texto = "O Índice UV está em nível $uv (Muito Elevado). Aplique protetor solar antes de sair de casa e proteja a pele do envelhecimento precoce. Temos várias opções dermo-cosméticas para o aconselhar.";
                $icone_alerta = "bi-brightness-high text-warning";
                $icone_clima = "bi-sun text-warning";
            } elseif ($temperatura >= 27) {
                $conselho_titulo = "Cuidado com o Calor";
                $conselho_texto = "Estão $temperatura°C lá fora. Lembre-se de beber muita água e evitar a exposição solar direta nas horas de maior calor.";
                $icone_alerta = "bi-thermometer-sun text-danger";
                $icone_clima = "bi-sun text-warning";
            } elseif ($temperatura <= 12) {
                $conselho_titulo = "Proteja-se do Frio";
                $conselho_texto = "Tempo frio ($temperatura°C). Reforce o seu sistema imunitário com vitamina C ou equinácea. Se sentir dores de garganta, visite-nos para o podermos ajudar.";
                $icone_alerta = "bi-thermometer-snow text-primary";
                $icone_clima = "bi-cloud-haze text-secondary";
            } else {
                $conselho_titulo = "Dia Ameno e Saudável";
                $conselho_texto = "O tempo está fantástico hoje! Aproveite para dar uma caminhada. O exercício físico ao ar livre é um excelente aliado para a sua saúde cardiovascular e bem-estar mental.";
                $icone_alerta = "bi-emoji-smile text-success";
                $icone_clima = "bi-cloud-sun text-secondary";
            }
        }
        ?>

        <section class="health-widget-section py-4">
            <div class="container-fluid px-3">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="health-widget-card card shadow-sm border-0 rounded-4 overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-5 bg-light d-flex flex-column justify-content-center align-items-center p-4 border-end">
                                    <h6 class="text-muted text-uppercase fw-bold mb-4" style="letter-spacing: 1px;">
                                        <i class="bi bi-geo-alt-fill text-success"></i> Aveiras de Cima
                                    </h6>
                                    <div class="row w-100 text-center g-3">
                                        <div class="col-4 border-end">
                                            <i class="bi bi-thermometer-half fs-2 text-primary"></i>
                                            <p class="mb-0 fw-bold mt-1 fs-5"><?php echo $temperatura; ?>°C</p>
                                            <small class="text-muted">Temp</small>
                                        </div>
                                        <div class="col-4 border-end">
                                            <i class="bi bi-brightness-high fs-2 text-warning"></i>
                                            <p class="mb-0 fw-bold mt-1 fs-5"><?php echo $uv; ?></p>
                                            <small class="text-muted">UV</small>
                                        </div>
                                        <div class="col-4">
                                            <i class="bi bi-flower1 fs-2 text-success"></i>
                                            <p class="mb-0 fw-bold mt-1 fs-6"><?php echo $polen_txt; ?></p>
                                            <small class="text-muted">Pólen</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 p-4 p-md-5 d-flex flex-column justify-content-center bg-white">
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fw-bold mb-0 d-flex align-items-center" style="color: var(--green-primary);">
                                            <i class="bi <?php echo $icone_alerta; ?> fs-2 me-3"></i>
                                            Conselho do Farmacêutico
                                        </h4>
                                    </div>
                                    <h5 class="fw-bold text-dark"><?php echo $conselho_titulo; ?></h5>
                                    <p class="text-muted mb-0 fs-6"><?php echo $conselho_texto; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Marcas em Destaque -->
        <section class="brands-section py-4">
            <div class="container-fluid px-2">
                <h2 class="brands-title">Marcas em Destaque</h2>
                <div class="brands-row">
                    <div class="brand-item">
                        <img src="img/Chico.jpeg" alt="Marca 1">
                    </div>
                    <div class="brand-item">
                        <img src="img/Cerave.jpeg" alt="Marca 2">
                    </div>
                    <div class="brand-item">
                        <img src="img/Elgydium.jpeg" alt="Marca 3">
                    </div>
                    <div class="brand-item">
                        <img src="img/Eucerin.jpeg" alt="Marca 4">
                    </div>
                    <div class="brand-item">
                        <img src="img/Medela.jpeg" alt="Marca 5">
                    </div>
                    <div class="brand-item">
                        <img src="img/Bioderma.jpeg" alt="Marca 6">
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Best Sellers -->
        <section id="bestsellers" class="bestsellers-section py-5">
    <div class="container-fluid px-2">
        <h2 class="bestsellers-title">Best Sellers</h2>
        
        <div class="bestsellers-carousel">
            <button class="bestsellers-btn bestsellers-prev" aria-label="Anterior"><i class="bi bi-chevron-left"></i></button>
            
            <div class="bestsellers-track">
                <?php
                $sql = "SELECT * FROM produtos WHERE categoria = 'bestseller'";
                $result = $mysqli->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="bestsellers-card">
                        <div class="card h-100">
                            <img src="<?php echo htmlspecialchars($row['imagem']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['nome']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['nome']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($row['descricao']); ?></p>
                                <a href="products.php" class="btn btn-trend">Ver mais</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <button class="bestsellers-btn bestsellers-next" aria-label="Próximo"><i class="bi bi-chevron-right"></i></button>
        </div>
    </div>
</section>
         <!-- Tendências do momento -->
        <section id="trending" class="trending-section py-5">
    <div class="container-fluid px-2">
        <h2 class="trending-title">Tendências do momento</h2>
        
        <div class="trending-carousel">
            <button class="trending-btn trending-prev" aria-label="Anterior"><i class="bi bi-chevron-left"></i></button>
            
            <div class="trending-track">
                <?php
                $sql = "SELECT * FROM produtos WHERE categoria = 'trending'";
                $result = $mysqli->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="trending-card">
                        <div class="card h-100">
                            <img src="<?php echo htmlspecialchars($row['imagem']); ?>" class="card-img-top trending-img-contain" alt="<?php echo htmlspecialchars($row['nome']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['nome']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($row['descricao']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <button class="trending-btn trending-next" aria-label="Próximo"><i class="bi bi-chevron-right"></i></button>
        </div>
    </div>
</section>
        <!-- Apoio ao Cliente -->
        <section id="support" class="support-section">
            <div class="container">
                <h2 class="support-title">Apoio ao Cliente</h2>
                <div class="row gy-3 align-items-start mt-3">
                    <div class="col-lg-6">
                        <div class="support-card card">
                            <div class="card-body">
                                <h5>Contactos e Morada</h5>
                                <p class="mb-1"><strong>Morada:</strong> Rua Francisco Almeida Grandela nº 101 Aveiras de Cima</p>
                                <p class="mb-1"><strong>Telefone:</strong> <a href="tel:+351263475124">+351 263 475 124</a></p>
                                <p class="mb-1"><strong>Telemóvel:</strong> <a href="tel:+351915704506">+351 915 704 506</a></p>
                                <p class="mb-1"><strong>Horário:</strong> Seg–Sexta 09:00–20:00 · Sábado 09:00–13:00 . Domingo Encerrado</p>
                                <p class="mb-1"><strong>Email:</strong> farmaciamirandaaveiras@gmail.com</p>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-6">
    					<div class="card support-card p-0">
        				<iframe class="map-embed" loading="lazy" src="https://maps.google.com/maps?				q=Farm%C3%A1cia+Miranda,+Rua+Francisco+Almeida+Grandela+101,+Aveiras+de+Cima&t=&z=15&ie=UTF8&iwloc=&output=embed" title="Mapa da Farmácia Miranda">		</iframe>
   					 	</div>
					</div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>
</html>