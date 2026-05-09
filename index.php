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

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/png" href="src/images/favicon.ico">

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
            <li class="nav-item active"><a href="#home">Início</a></li>
            <li class="nav-item"><a href="#testimonials">Sobre</a></li>
            <li class="nav-item"><a href="#faq">Dúvidas</a></li>
            <li class="nav-item"><a href="#localizacao">Localização</a></li>
        </ul>

        <a href="loja.php"
           class="px-6 py-3 rounded-full font-semibold bg-[#E9A209] text-white shadow-[0_0_20px_rgba(233,162,9,0.6)] hover:scale-105 transition duration-300">
            Agende agora ✨
        </a>
    </nav>

    <div id="mobile_menu">
        <ul id="mobile_nav_list">
            <li class="nav-item"><a href="#home">Início</a></li>
            <li class="nav-item"><a href="#testimonials">Sobre</a></li>
            <li class="nav-item"><a href="#faq">Dúvidas</a></li>
            <li class="nav-item"><a href="#localizacao">Localização</a></li>
        </ul>

        <a href="loja.php"
           class="px-6 py-3 rounded-full font-semibold bg-[#E9A209] text-white shadow-[0_0_20px_rgba(233,162,9,0.6)] hover:scale-105 transition duration-300">
            Agende agora ✨
        </a>
    </div>
</header>

<main id="content">
    <section id="home">

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

        <div class="shape">
            <div class="shape">

                <div class="shape_image">
                    <img src="src/images/Sem%20título.png" alt="Eliza - Lisse Laser">
                </div>

                <div class="shape_content">

                    <p class="shape_title">
                        SOBRE MIM
                    </p>

                    <p class="shape_text">
                        Sou a Eliza e atuo na área da estética e laser há mais de 4 anos.

                        Nesse período, tive a oportunidade de ajudar milhares de pessoas —
                        mulheres e homens — a reencontrarem confiança e liberdade em sua própria pele.

                        Meu propósito sempre foi oferecer um atendimento que vá além da técnica,
                        tendo presença, cuidado e atenção aos detalhes.

                        Dessa paixão nasceu a Lisse, a realização de um sonho pessoal e profissional.
                    </p>

                </div>

            </div>

    </section>
</main>
<section id="faq">

    <h2 class="section-title">Dúvidas Frequentes</h2>
    <h3 class="section-subtitle">Tudo que você precisa saber antes de agendar</h3>

    <div class="faq-container">


        <div class="faq-item">
            <div class="faq-question">
                A depilação a laser dói?
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                O desconforto é mínimo e varia conforme a sensibilidade de cada pessoa.
                A maioria descreve a sensação como leves “pinicadas”,
                utilizamos técnicas que tornam o atendimento mais confortável.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                A depilação a laser pode clarear a região?
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Sim. Além de reduzir os pelos, a depilação a laser ajuda a diminuir
                manchas escuras da região, foliculite e irritações causadas pelos pelos encravados,
                deixando a pele mais uniforme e clara.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                Quantas sessões são necessárias?
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Normalmente são indicadas de 6 a 10 sessões.
                Antes da primeira sessão, se solicitado, realizamos uma avaliação personalizada para ver quantas sessões você precisa!
                    Analisando seu biótipo para garantir os melhores resultados.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                Como funciona o agendamento e manutenção?
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                As sessões possuem intervalos de 30 a 45 dias, com confirmação enviada 1 dia antes! Respeitar esse prazo é essencial,
                já que o laser age com mais eficácia nos pelos em fase de crescimento.
                Após finalizar o tratamento, algumas pessoas podem precisar de manutenção semestral, em média 2 vezes ao ano.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                Quais cuidados antes das sessões?
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Os pelos devem ser raspados com lâmina 1 dia antes da sessão. No dia do atendimento, evite cremes, óleos e desodorantes na região.
                Durante a menstruação, o ideal é realizar no final do período devido à sensibilidade da pele.
                Gestantes NÃO podem fazer depilação a laser.
            </div>
        </div>
    </div>

</section>
    <section id="testimonials">


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

<footer class="site-footer">

    <img src="src/images/wave.svg" class="footer-wave" alt="">

    <div class="footer-inner">

        <div class="footer-left">
            <img src="src/images/lisselogo.png" alt="Lisse">
        </div>

        <div class="footer-right">

            <a href="https://portifolio-two-nu-28.vercel.app" class="footer-credit">
                <span>Desenvolvido por GH Softworks</span>
                <img src="src/images/gh-logo.png" alt="GH">
            </a>

            <a href="#" class="footer-credit">
                <span>Marketing por</span>
                <img src="src/images/marketing-logo.png" alt="Cartaz">
            </a>

        </div>

    </div>

</footer>
</aside>

<div id="chat-btn">
    <i class="fa-solid fa-comment-dots"></i>
</div>

<div id="chatbox">

    <div class="chat-header">
        <span>LISSE Atendimento</span>
        <button id="close-chat">✕</button>
    </div>

    <div id="chat-content">

        <div class="bot-msg">
            Olá 😊 Escolha uma opção ou digite sua dúvida:
        </div>

        <div class="quick-buttons">
            <button onclick="quick('dói')">Dói?</button>
            <button onclick="quick('sessões')">Sessões</button>
            <button onclick="quick('preço')">Preço</button>
            <button onclick="quick('cuidados')">Cuidados</button>
        </div>

    </div>

    <div class="chat-input">
        <input type="text" id="chat-input" placeholder="Digite aqui...">
        <button onclick="send()">➤</button>
    </div>

</div>

<script>
    const header = document.querySelector("header");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 20) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>

<script src="src/javascript/script.js"></script>
<script src="src/javascript/carrinho.js"></script>
</body>
</html>