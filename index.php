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
            <?php foreach ($servicos as $servico) { ?>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="<?php echo $servico['imagem']; ?>"
                         class="rosto-photo"
                         alt="Depilação a laser feminina na <?php echo strtolower($servico['nome']); ?> em Xanxerê">

                    <h3 class="dish-title"><?php echo $servico['nome']; ?></h3>

                    <span class="dish-description">
                        <?php echo $servico['descricao']; ?>
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
                            R$<?php echo number_format($servico['preco'], 2, ',', '.'); ?>
                        </h4>
                        <button class="btn-default add-to-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

            <?php } ?>

            <div class="dish">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/axila.png" class="rosto-photo" alt="Depilação a laser feminina na axila em Xanxerê">
                <h3 class="dish-title">AXILA</h3>
                <span class="dish-description">Remoção eficaz dos pelos da axila, proporcionando uma pele mais lisa, limpa e confortável.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span>(95+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$59,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <img src="src/images/buço.png" class="rosto-photo" alt="Depilação a laser feminina no buço em Xanxerê">
                <h3 class="dish-title">BUÇO</h3>
                <span class="dish-description">Remoção precisa dos pelos do buço, deixando a região mais lisa e com aparência uniforme.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span>(110+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$39,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>
        </div>

        <div class="ver-mais-wrapper">
            <button class="btn-default btn-ver-mais" data-target="#feminino-extra">
                Ver mais
            </button>
        </div>

        <div id="feminino-extra" class="extra-container">
            <div class="dishes-grid">

                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/virilhacavadaa.png" class="rosto-photo" alt="Depilação a laser feminina na virilha em Xanxerê">
                    <h3 class="dish-title">VIRILHA CAVADA</h3>
                    <span class="dish-description">Remoção uniforme que valoriza a estética da região, garantindo mais conforto e cuidado com a pele.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(60+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$69,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/facial.png" class="rosto-photo" alt="Depilação a laser feminina no rosto em Xanxerê">
                    <h3 class="dish-title">ROSTO</h3>
                    <span class="dish-description">Tratamento completo para remoção dos pelos faciais, deixando a pele mais limpa, suave e uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(55+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$49,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/intimacompleta.png" class="rosto-photo" alt="Depilação a laser feminina na região intima em Xanxerê">
                    <h3 class="dish-title">INTIMA COMPLETA</h3>
                    <span class="dish-description">Remoção eficaz dos pelos da região íntima, proporcionando conforto, higiene e cuidado com a pele.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(120+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$69,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/lombar.png" class="rosto-photo" alt="Depilação a laser feminina na lombar em Xanxerê">
                    <h3 class="dish-title">LOMBAR</h3>
                    <span class="dish-description">Remoção dos pelos da região lombar, garantindo um visual mais limpo e uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(45+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$39,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/queixo.png" class="rosto-photo" alt="Depilação a laser feminina no queixo em Xanxerê">
                    <h3 class="dish-title">QUEIXO</h3>
                    <span class="dish-description">Remoção precisa dos pelos do queixo, deixando a pele mais lisa e com aparência uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(50+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$39,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/antebraçoo.png" class="rosto-photo" alt="Depilação a laser feminina no antebraço em Xanxerê">
                    <h3 class="dish-title">ANTEBRAÇO</h3>
                    <span class="dish-description">Remoção eficaz dos pelos do antebraço, proporcionando um visual mais limpo e uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(30+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$59,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/braçofem.png" class="rosto-photo" alt="Depilação a laser feminina no braço em Xanxerê">
                    <h3 class="dish-title">BRAÇO</h3>
                    <span class="dish-description">Remoção eficaz dos pelos dos braços, deixando a pele mais lisa e com aparência uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(80+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$89,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/abdomen.png" class="rosto-photo" alt="Depilação a laser feminina no abdômem em Xanxerê">
                    <h3 class="dish-title">ABDÔMEN</h3>
                    <span class="dish-description">Remoção dos pelos do abdômen, proporcionando um visual mais limpo e uniforme à região.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(78+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$69,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/costas33.png" class="rosto-photo" alt="Depilação a laser feminina nas costas em Xanxerê">
                    <h3 class="dish-title">COSTAS</h3>
                    <span class="dish-description">Remoção eficaz dos pelos das costas, garantindo uma aparência mais limpa e uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(68+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$89,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/pernas.png" class="rosto-photo" alt="Depilação a laser feminina na perna em Xanxerê">
                    <h3 class="dish-title">MEIA PERNA</h3>
                    <span class="dish-description">Remoção dos pelos da meia perna, deixando a pele mais lisa e com aspecto uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(105+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$89,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/pernascompletas.jpeg" class="rosto-photo" alt="Depilação a laser feminina na perna em Xanxerê">
                    <h3 class="dish-title">PERNA INTEIRA</h3>
                    <span class="dish-description">Remoção completa dos pelos das pernas, garantindo uma pele mais lisa e visual uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(137+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$89,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/gluteos.png" class="rosto-photo" alt="Depilação a laser feminina no gluteo em Xanxerê">
                    <h3 class="dish-title">GLUTEO</h3>
                    <span class="dish-description">Remoção eficaz dos pelos da região do glúteo, proporcionando conforto e um visual mais uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(90+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$59,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

            </div>

            <div class="ver-mais-wrapper">
                <button class="btn-default btn-ver-menos" data-target="#feminino-extra">
                    Ver menos
                </button>
            </div>
        </div>
    </section>

    <section id="masculino" class="menu-section">
        <div class="linha-categoriam">
            <span class="linham"></span>
            <p class="categoria-textom">DEPILAÇÃO MASCULINA</p>
            <span class="linham"></span>
        </div>

        <div class="dishes-grid" id="dishes-masculino">
            <div class="dish combo-extraa">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <img src="src/images/contronobarba.jpeg" class="rosto-photo" alt="Depilação a laser masculina na barba em Xanxerê">
                <h3 class="dish-title">CONTORNO DA BARBA</h3>
                <span class="dish-description">Remoção precisa dos pelos para definir o contorno da barba, garantindo um visual mais alinhado e uniforme.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span>(83+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$49,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>

            <div class="dish combo-extraa">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <img src="src/images/barba.jpeg" class="rosto-photo" alt="Depilação a laser masculina na barba em Xanxerê">
                <h3 class="dish-title">BARBA COMPLETA</h3>
                <span class="dish-description">Remoção completa dos pelos da barba, proporcionando uma pele mais lisa e aparência uniforme.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span>(59+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$69,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>

            <div class="dish combo-extraa">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <img src="src/images/axila.jpeg" class="rosto-photo" alt="Depilação a laser masculina na axila em Xanxerê">
                <h3 class="dish-title">AXILA</h3>
                <span class="dish-description">Remoção eficaz dos pelos da axila, proporcionando uma pele mais lisa, limpa e confortável.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span>(94+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$69,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>

            <div class="dish combo-extraa">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <img src="src/images/peitoral.jpeg" class="rosto-photo" alt="Depilação a laser masculina no peito em Xanxerê">
                <h3 class="dish-title">PEITO</h3>
                <span class="dish-description">Remoção eficaz dos pelos do peito, garantindo uma aparência mais limpa e uniforme.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span>(115+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$59,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>
        </div>

        <div class="ver-mais-wrapper">
            <button class="btn-default btn-ver-mais" data-target="#masculino-extra">
                Ver mais
            </button>
        </div>

        <div id="masculino-extra" class="extra-container">
            <div class="dishes-grid">

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/abdomem.jpeg" class="rosto-photo" alt="Depilação a laser masculina no abdômen em Xanxerê">
                    <h3 class="dish-title">ABDÔMEN</h3>
                    <span class="dish-description">Remoção dos pelos do abdômen, proporcionando um visual mais limpo e uniforme à região.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(95+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$79,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/costasmasculinas.jpeg" class="rosto-photo" alt="Depilação a laser masculina nas costas em Xanxerê">
                    <h3 class="dish-title">COSTAS</h3>
                    <span class="dish-description">Remoção eficaz dos pelos das costas, garantindo uma aparência mais limpa e uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(130+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$89,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/lombar.jpeg" class="rosto-photo" alt="Depilação a laser masculina na lombar em Xanxerê">
                    <h3 class="dish-title">LOMBAR</h3>
                    <span class="dish-description">Remoção dos pelos da região lombar, proporcionando um visual mais limpo e uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(70+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$49,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/virilhamasc.jpeg" class="rosto-photo" alt="Depilação a laser masculina na virilha em Xanxerê">
                    <h3 class="dish-title">VIRILHA SOMENTE FRENTE</h3>
                    <span class="dish-description">Remoção dos pelos da parte frontal da virilha, garantindo um visual mais limpo, uniforme e confortável.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(65+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$99,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/intima.jpeg" class="rosto-photo" alt="Depilação a laser masculina na região intima em Xanxerê">
                    <h3 class="dish-title">ÍNTIMA COMPLETA</h3>
                    <span class="dish-description">Remoção eficaz dos pelos da região íntima, proporcionando conforto, higiene e cuidado com a pele.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(140+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$129,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/Gluteo.jpeg" class="rosto-photo" alt="Depilação a laser masculina no gluteo em Xanxerê">
                    <h3 class="dish-title">GLÚTEO</h3>
                    <span class="dish-description">Remoção eficaz dos pelos da região do glúteo, proporcionando conforto e um visual mais uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(100+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$99,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/antebraçomascs.jpeg" class="rosto-photo" alt="Depilação a laser masculina no antebraço em Xanxerê">
                    <h3 class="dish-title">ANTEBRAÇO</h3>
                    <span class="dish-description">Remoção eficaz dos pelos do antebraço, proporcionando um visual mais limpo e uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(80+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$49,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/meiaperna.jpeg" class="rosto-photo" alt="Depilação a laser masculina na perna em Xanxerê">
                    <h3 class="dish-title">MEIA PERNA</h3>
                    <span class="dish-description">Remoção dos pelos da meia perna, proporcionando uma pele mais lisa e aparência uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(60+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$79,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/pernascompletas.jpeg" class="rosto-photo" alt="Depilação a laser masculina na perna em Xanxerê">
                    <h3 class="dish-title">PERNA INTEIRA</h3>
                    <span class="dish-description">Remoção completa dos pelos das pernas, garantindo uma pele mais lisa e visual uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(165+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$79,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                
                <div class="dish combo-extraa">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <img src="src/images/braço.jpeg" class="rosto-photo" alt="Depilação a laser masculina no braço em Xanxerê">
                    <h3 class="dish-title">BRAÇO COMPLETO</h3>
                    <span class="dish-description">Remoção completa dos pelos dos braços, proporcionando uma pele mais lisa e aparência uniforme.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span>(74+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$89,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

            </div>

            <div class="ver-mais-wrapper">
                <button class="btn-default btn-ver-menos" data-target="#masculino-extra">
                    Ver menos
                </button>
            </div>
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
            <div class="dish combo-extra" data-publico="masculino">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <span class="dish-badge masculino">Masculino</span>
                <div class="combo-cover">
                    <img src="src/images/axila.jpeg" alt="Axila">
                    <img src="src/images/intima.jpeg" alt="Íntima completa">
                    <img src="src/images/meiaperna.jpeg" alt="Meia perna">
                </div>
                <h3 class="dish-title">AXILA + ÍNTIMA COMPLETA + MEIA PERNA</h3>
                <span class="dish-description">Combo completo para mais praticidade e conforto, garantindo uma pele mais lisa, uniforme e bem cuidada.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span class="dish-reviews">(140+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$134,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>

            <div class="dish combo-extra" data-publico="masculino">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <span class="dish-badge masculino">Masculino</span>
                <div class="combo-cover is-2">
                    <img src="src/images/axila.jpeg" alt="Axila">
                    <img src="src/images/intima.jpeg" alt="Íntima completa">
                </div>
                <h3 class="dish-title">AXILA + ÍNTIMA COMPLETA</h3>
                <span class="dish-description">Combo ideal para quem busca praticidade e conforto, proporcionando uma pele mais lisa, uniforme e bem cuidada.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span class="dish-reviews">(110+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$149,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>

            <div class="dish combo-extra" data-publico="masculino">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <span class="dish-badge masculino">Masculino</span>
                <div class="combo-cover">
                    <img src="src/images/axila.jpeg" alt="Axila">
                    <img src="src/images/virilhamasc.jpeg" alt="Íntima completa">
                </div>
                <h3 class="dish-title">AXILA + ÍNTIMA SOMENTE FRENTE</h3>
                <span class="dish-description">Combo prático para manter a pele mais limpa e confortável, com resultado uniforme nas duas regiões.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span class="dish-reviews">(85+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$199,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>

            <div class="dish combo-extra" data-publico="masculino">
                <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                <span class="dish-badge masculino">Masculino</span>
                <div class="combo-cover">
                    <img src="src/images/axila.jpeg" alt="Axila">
                    <img src="src/images/peitoral.jpeg" alt="Íntima completa">
                    <img src="src/images/abdomem.jpeg" alt="Meia perna">
                </div>
                <h3 class="dish-title">AXILA + PEITO + ABDÔMEN</h3>
                <span class="dish-description">Combo completo para um visual mais limpo e uniforme, garantindo praticidade e conforto no cuidado corporal.</span>
                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span class="dish-reviews">(160+)</span>
                </div>
                <div class="dish-price">
                    <h4>R$179,99</h4>
                    <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                </div>
            </div>
        </div>

        <div class="ver-mais-wrapper">
            <button class="btn-default btn-ver-mais" data-target="#combos-extra">
                Ver mais
            </button>
        </div>

        <div id="combos-extra" class="extra-container">
            <div class="dishes-grid">

                <div class="dish combo-extra" data-publico="masculino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge masculino">Masculino</span>
                    <img src="src/images/corpotodomasc.jpeg " class="rosto-photo" alt="">
                    <h3 class="dish-title">CORPO INTEIRO</h3>
                    <span class="dish-description">Tratamento completo para remoção dos pelos do corpo, proporcionando uma pele mais lisa, uniforme e bem cuidada.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(95+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$350,00</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extra" data-publico="feminino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge feminino">Feminino</span>
                    <div class="combo-cover">
                        <img src="src/images/intimacompleta.png" alt="Axila">
                        <img src="src/images/pernas.png" alt="Íntima completa">
                    </div>
                    <h3 class="dish-title">INTIMA + PERNA</h3>
                    <span class="dish-description">Combo ideal para quem busca praticidade, garantindo uma pele mais lisa, uniforme e confortável nas duas regiões.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(85+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$129,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extra" data-publico="feminino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge feminino">Feminino</span>
                    <div class="combo-cover">
                        <img src="src/images/axila.png" alt="Axila">
                        <img src="src/images/intimacompleta.png" alt="Íntima completa">
                        <img src="src/images/pernascompletas.jpeg" alt="Meia perna">
                    </div>
                    <h3 class="dish-title">AXILA + ÍNTIMA + PERNA INTEIRA</h3>
                    <span class="dish-description">Combo completo para quem busca praticidade e cuidado total, garantindo uma pele mais lisa, uniforme e confortável.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(95+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$189,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extra" data-publico="masculino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge masculino">Masculino</span>
                    <div class="combo-cover">
                        <img src="src/images/axila.jpeg" alt="Axila">
                        <img src="src/images/peitoral.jpeg" alt="Íntima completa">
                        <img src="src/images/costas.jpeg" alt="Meia perna">
                    </div>
                    <h3 class="dish-title">AXILA + PEITO + COSTAS</h3>
                    <span class="dish-description">Combo ideal para um visual mais limpo e equilibrado, oferecendo praticidade e conforto no cuidado corporal.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(70+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$189,90</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extra" data-publico="feminino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge feminino">Feminino</span>
                    <div class="combo-cover">
                        <img src="src/images/axila.png" alt="Axila">
                        <img src="src/images/intimacompleta.png" alt="Íntima completa">
                    </div>
                    <h3 class="dish-title">AXILA + ÍNTIMA COMPLETA</h3>
                    <span class="dish-description">Combo prático para quem busca conforto e cuidado, garantindo uma pele mais lisa e uniforme nas duas regiões.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(120+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$99,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extra" data-publico="masculino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge masculino">Masculino</span>
                    <div class="combo-cover">
                        <img src="src/images/axila.jpeg" alt="Axila">
                        <img src="src/images/intima.jpeg" alt="Íntima completa">
                        <img src="src/images/pernascompletas.jpeg" alt="Meia perna">
                    </div>
                    <h3 class="dish-title">AXILA + ÍNTIMA FRENTE + PERNA INTEIRA</h3>
                    <span class="dish-description">Combo completo para quem busca praticidade e conforto, proporcionando uma pele mais lisa, uniforme e bem cuidada.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(168+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$204,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <!--COMBOS FEMININOS-->
                <div class="dish combo-extra" data-publico="feminino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge feminino">Feminino</span>
                    <div class="combo-cover">
                        <img src="src/images/axila.png" alt="Axila">
                        <img src="src/images/buço.png" alt="Buço">
                    </div>
                    <h3 class="dish-title">AXILA + BUÇO</h3>
                    <span class="dish-description">Combo prático para manter a pele mais lisa e uniforme, com cuidado eficiente nas duas regiões.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(95+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$79,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                <div class="dish combo-extra" data-publico="feminino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge feminino">Feminino</span>
                    <div class="combo-cover">
                        <img src="src/images/axila.png" alt="Axila">
                        <img src="src/images/buço.png" alt="Íntima completa">
                        <img src="src/images/intimacompleta.png" alt="Meia perna">
                    </div>
                    <h3 class="dish-title">AXILA + BUÇO + INTIMA COMPLETA</h3>
                    <span class="dish-description">Combo completo para quem busca praticidade e cuidado, garantindo uma pele mais lisa, uniforme e confortável nas três regiões.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(130+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$114,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                <div class="dish combo-extra" data-publico="feminino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge feminino">Feminino</span>
                    <div class="combo-cover">
                        <img src="src/images/intimacompleta.png" alt="Axila">
                        <img src="src/images/meiaperna.jpeg" alt="Íntima completa">
                    </div>
                    <h3 class="dish-title">INTIMA COMPLETA + MEIA PERNA</h3>
                    <span class="dish-description">Combo ideal para quem busca praticidade e conforto, proporcionando uma pele mais lisa e uniforme nas duas regiões.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(135+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$118,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>
                <div class="dish combo-extra" data-publico="feminino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge feminino">Feminino</span>
                    <div class="combo-cover">
                        <img src="src/images/axila.png" alt="Axila">
                        <img src="src/images/intimacompleta.png" alt="Íntima completa">
                        <img src="src/images/meiaperna.jpeg" alt="Meia perna">
                    </div>
                    <h3 class="dish-title">AXILA + INTIMA + MEIA PERNA</h3>
                    <span class="dish-description">Combo prático para quem busca conforto e praticidade, garantindo uma pele mais lisa e uniforme nas três regiões.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(79+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$149,99</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

                <div class="dish combo-extra" data-publico="feminino">
                    <div class="dish-heart"><i class="fa-solid fa-heart"></i></div>
                    <span class="dish-badge feminino">Feminino</span>
                    <img src="src/images/corpotodofem.jpeg" class="" alt="">
                    <h3 class="dish-title">CORPO INTEIRO</h3>
                    <span class="dish-description">Tratamento completo para remoção dos pelos do corpo, proporcionando uma pele mais lisa, uniforme e bem cuidada.</span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="dish-reviews">(180+)</span>
                    </div>
                    <div class="dish-price">
                        <h4>R$250,00</h4>
                        <button class="btn-default add-to-cart"><i class="fa-solid fa-basket-shopping"></i></button>
                    </div>
                </div>

            </div>

            <div class="ver-mais-wrapper">
                <button class="btn-default btn-ver-menos" data-target="#combos-extra">
                    Ver menos
                </button>
            </div>
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