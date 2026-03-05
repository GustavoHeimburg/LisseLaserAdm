<?php
$servicos = json_decode(file_get_contents("data/servicos.json"), true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Depilação a Laser em Xanxerê – Feminina e Masculina | Lisse Laser</title>
    <meta name="description" content="Depilação a laser masculina e feminina em Xanxerê. Tecnologia moderna, segura e resultados reais. Agende agora.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Depilação a Laser em Xanxerê | Lisse Laser">
    <meta property="og:description" content="Depilação a laser feminina e masculina em Xanxerê – SC. Agende pelo WhatsApp.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="src/imagens/og-capa.png">

    <link rel="icon" type="image/png" href="src/images/favlasr.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="src/styles/styles.css">
    <link rel="stylesheet" href="src/styles/combos.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"BeautySalon",
            "name":"Lisse Laser e Estética",
            "address":{
                "@type":"PostalAddress",
                "addressLocality":"Xanxerê",
                "addressRegion":"SC",
                "addressCountry":"BR"
            }
        }
    </script>

    <link rel="canonical" href="https://lisselaser.com.br/">
    <meta property="og:url" content="https://lisselaser.com.br/">
    <meta property="og:image" content="https://lisselaser.com.br/src/images/og-capa.jpg">

</head>

<body>
<header>
    <nav id="navbar">
        <div id="nav_logo">
            <img src="src/images/lisselogo.png" class="logo-icon" alt="Logo">
        </div>

        <ul id="nav_list">
            <li class="nav-item active">
                <a href="#home">Início</a>
            </li>
            <li class="nav-item">
                <a href="#feminino">Serviços</a>
            </li>
            <li class="nav-item">
                <a href="#testimonials">Sobre</a>
            </li>
            <li class="nav-item">
                <a href="#localizacao">Localização</a>
            </li>
        </ul>

        <button class="btn-default"
                onclick="window.open('https://wa.me/5549920014288?text=Olá,%20tenho%20interesse%20em%20agendar%20um%20procedimento%20😊', '_blank')">
            AGENDE AQUI
        </button>

        <button id="mobile_btn">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <div id="mobile_menu">
        <ul id="mobile_nav_list">
            <li class="nav-item">
                <a href="#home">Início</a>
            </li>
            <li class="nav-item">
                <a href="#feminino">Serviços</a>
            </li>
            <li class="nav-item">
                <a href="#testimonials">Sobre</a>
            </li>
            <li class="nav-item">
                <a href="#localizacao">Localização</a>
            </li>
        </ul>

        <button class="btn-default"
                onclick="window.open('https://wa.me/5549920014288?text=Olá,%20tenho%20interesse%20em%20agendar%20um%20procedimento%20😊', '_blank')">
            Agende aqui
        </button>
    </div>
</header>

<main id="content">
    <section id="home">
        <div class="shape">
            <div class="shape_content">
                <p class="shape_title">SOBRE MIM</p>
                <p class="shape_text">
                    Sou Eliza e atuo na área de depilação a laser há mais de 4 anos. Nesse período, tive a oportunidade de ajudar centenas de pessoas — mulheres e homens — a reencontrarem confiança, liberdade e conforto em sua própria pele. Meu propósito sempre foi oferecer um atendimento que vá além da técnica, com presença, cuidado e atenção aos detalhes. Dessa paixão nasceu a Lisse, a realização de um sonho pessoal e profissional.
                </p>
            </div>
        </div>

        <div id="cta">
            <h1 class="title">
                Depilação a laser em Xanxerê
                <span>Feminina e Masculina</span>
            </h1>

            <h2>Aqui sua beleza encontra cuidado!</h2>

            <p class="description">
                Tratamentos exclusivos para realçar sua essência e elevar sua autoestima com resultados visíveis.
            </p>

            <div class="social-media-buttons">
                <a href="https://wa.me/5549920014288?text=Olá,%20tenho%20interesse%20em%20agendar%20um%20procedimento%20😊" target="_blank" rel="noopener">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="https://www.instagram.com/lisse_laser_/" target="_blank" rel="noopener">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </section>
</main>
<section id="feminino" class="menu-section">
    <h2 class="section-title">LISSE</h2>
    <h3 class="section-subtitle">Conheça nossos serviços</h3>

    <div class="linha-categoria">
        <span class="linha"></span>
        <p class="categoria-texto">DEPILAÇÃO FEMININA</p>
        <span class="linha"></span>
    </div>

    <div class="dishes-grid" id="dishes-feminino">

        <?php foreach ($servicos as $servico): ?>
            <?php if ($servico['categoria'] === 'feminino'): ?>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <?php if (isset($servico['imagem'])): ?>
                        <img src="<?= $servico['imagem']; ?>" class="rosto-photo" alt="<?= $servico['nome']; ?>">
                    <?php endif; ?>

                    <h3 class="dish-title"><?= $servico['nome']; ?></h3>

                    <span class="dish-description">
                        <?= $servico['descricao']; ?>
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(67+)</span>
                    </div>

                    <div class="dish-price">
                        <h4>
                            R$<?= number_format((float)$servico['preco'], 2, ',', '.'); ?>
                        </h4>

                        <button class="btn-default add-to-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>

    <div class="ver-mais-wrapper">
        <button class="btn-default btn-ver-mais" data-target="#feminino-extra">
            Ver mais
        </button>
    </div>

    <div class="ver-mais-wrapper">
        <button class="btn-default btn-ver-menos" data-target="#feminino-extra">
            Ver menos
        </button>
    </div>

</section>


<section id="masculino" class="menu-section">

    <div class="linha-categoriam">
        <span class="linham"></span>
        <p class="categoria-textom">DEPILAÇÃO MASCULINA</p>
        <span class="linham"></span>
    </div>

    <div class="dishes-grid" id="dishes-masculino">

        <?php foreach ($servicos as $servico): ?>
            <?php if ($servico['categoria'] === 'masculino'): ?>

                <div class="dish combo-extraa">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <?php if (isset($servico['imagem'])): ?>
                        <img src="<?= $servico['imagem']; ?>" class="rosto-photo" alt="<?= $servico['nome']; ?>">
                    <?php endif; ?>

                    <h3 class="dish-title">
                        <?= $servico['nome']; ?>
                    </h3>

                    <span class="dish-description">
                        <?= $servico['descricao']; ?>
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(67+)</span>
                    </div>

                    <div class="dish-price">
                        <h4>
                            R$<?= number_format((float)$servico['preco'], 2, ',', '.'); ?>
                        </h4>

                        <button class="btn-default add-to-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>

</section>


<section id="combos" class="menu-section">

    <div class="linha-categoria">
        <span class="linha"></span>
        <p class="categoria-texto">COMBOS</p>
        <span class="linha"></span>
    </div>

    <div class="combo-filters" role="tablist" aria-label="Filtrar combos">
        <button class="filter-btn active" data-filter="todos" type="button">Todos</button>
        <button class="filter-btn" data-filter="feminino" type="button">Feminino</button>
        <button class="filter-btn" data-filter="masculino" type="button">Masculino</button>
    </div>

    <div class="dishes-grid" id="dishes-combos">

<?php foreach ($servicos as $servico): ?>
<?php if ($servico['categoria'] === 'combos'): ?>

<?php $publico = $servico['publico'] ?? 'unissex'; ?>

<div class="dish combo-extra" data-publico="<?= $publico ?>">

    <div class="dish-heart">
        <i class="fa-solid fa-heart"></i>
    </div>

    <span class="dish-badge <?= $publico ?>">
        <?= ucfirst($publico) ?>
    </span>

    <div class="combo-cover">

        <?php if(isset($servico['imagens'])): ?>
            <?php foreach ($servico['imagens'] as $img): ?>
                <img src="<?= $img ?>" alt="<?= $servico['nome'] ?>">
            <?php endforeach; ?>
        <?php endif; ?>

    </div>

    <h3 class="dish-title">
        <?= $servico['nome'] ?>
    </h3>

    <span class="dish-description">
        <?= $servico['descricao'] ?>
    </span>

    <div class="dish-rate">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <span class="dish-reviews">(100+)</span>
    </div>

    <div class="dish-price">
        <h4>
            R$<?= number_format((float)$servico['preco'], 2, ',', '.') ?>
        </h4>

        <button class="btn-default add-to-cart">
            <i class="fa-solid fa-basket-shopping"></i>
        </button>
    </div>

</div>

<?php endif; ?>
<?php endforeach; ?>

    </div>

</section>

    <section id="testimonials">
        <img src="src/images/Sem%20título.png" id="testimonial_chef" alt="">

        <div id="testimonials_content">
            <h2 class="section-title">
                SOBRE A LISSE
            </h2>
            <h3 class="section-subtitle">
                O que nossos clientes valorizam na LISSE
            </h3>

            <div id="feedbacks">
                <div class="feedback">
                    <img src="src/images/superior.png" class="feedback-avatar" alt="">

                    <div class="feedback-content">
                        <p>
                            🔒 Segurança
                            <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                        </p>
                        <p>
                            Atendimentos realizados com cuidado, responsabilidade e total foco no seu bem-estar.
                        </p>
                    </div>
                </div>

                <div class="feedback">
                    <img src="src/images/laser.png" class="feedback-avatar" alt="">

                    <div class="feedback-content">
                        <p>
                            ✨ Resultado
                            <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                        </p>
                        <p>
                            Procedimentos pensados para realçar sua beleza de forma natural, sem exageros.
                        </p>
                    </div>
                </div>
            </div>

            <div class="feedback">
                <img src="src/images/customer-service.png" class="feedback-avatar" alt="">

                <div class="feedback-content">
                    <p>
                        ⭐ Atendimento
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </p>
                    <p>
                        Atendimento personalizado, pois cada cliente é único e recebe uma avaliação individual.
                    </p>
                </div>
            </div>
        </div>

    </section>

<section id="localizacao">
    <h2>Localização – Lisse Laser e Estética em Xanxerê</h2>

    <div class="location-intro">
        <p>
            A <strong>Lisse Laser e Estética</strong> está localizada em Xanxerê – SC,
            oferecendo depilação a laser feminina e masculina com atendimento profissional.
        </p>

        <p>
            Atendemos no bairro <strong>La Salle</strong>, com fácil acesso para clientes
            de Xanxerê e região. Agendamentos pelo WhatsApp.
        </p>
    </div>

    <div class="address-card">
        <p class="address-line">
            <strong>Endereço:</strong> Rua Padre Anchieta, 37 – Bairro La Salle, Xanxerê – SC
        </p>
        <p class="address-line">
            <strong>Referência:</strong> Localizado em frente à antiga viação
        </p>

        <div class="address-actions">
            <a class="btn-address" href="https://wa.me/5549920014288" target="_blank" rel="noopener">
                Chamar no WhatsApp
            </a>
            <a class="btn-address outline" href="https://maps.google.com/?q=Rua+Padre+Anchieta,+37,+Xanxerê+-+SC" target="_blank" rel="noopener">
                Ver Rotas
            </a>
        </div>
    </div>

    <div class="map-container">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.82983772901!2d-52.412659889344695!3d-26.877146876571018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4c349e5542cb3%3A0x64072c8f6d3ed961!2sLisse%20Laser%20e%20Est%C3%A9tica!5e0!3m2!1spt-BR!2sbr!4v1767827859637!5m2!1spt-BR!2sbr"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<footer>
    <img src="src/images/wave.svg" alt="">
</footer>
<div id="cart-overlay"></div>

<aside id="cart">
    <header class="cart-header">
        <h2>Seu carrinho</h2>
        <button id="close-cart">&times;</button>
    </header>

    <div id="cart-items"></div>

    <footer class="cart-footer">
        <div class="cart-total">
            <span>Total</span>
            <strong id="cart-total">R$ 0,00</strong>
        </div>

        <button class="btn-default cart-checkout">
            Finalizar no WhatsApp
        </button>
    </footer>
</aside>
<script src="src/javascript/script.js"></script>
<script src="src/javascript/carrinho.js"></script>
</body>
</html>