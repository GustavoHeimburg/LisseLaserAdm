<?php
$servicos = json_decode(file_get_contents("data/servicos.json"), true);
?>

<style>
/* RESET BÁSICO */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: #fff;
}

/* SECTIONS */
.menu-section {
    padding: 60px 8%;
}

/* TITULOS */
.section-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    color: #f8fafc;
}

.section-subtitle {
    text-align: center;
    margin-bottom: 40px;
    color: #94a3b8;
}

/* LINHAS CATEGORIA */
.linha-categoria,
.linha-categoriam {
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 40px 0;
}

.linha,
.linham {
    flex: 1;
    height: 1px;
    background: linear-gradient(to right, transparent, #38bdf8, transparent);
}

.categoria-texto,
.categoria-textom {
    font-weight: 600;
    letter-spacing: 2px;
    color: #38bdf8;
}

/* GRID */
.dishes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}

/* CARD */
.dish {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    padding: 20px;
    transition: 0.3s;
    border: 1px solid rgba(255,255,255,0.05);
    position: relative;
    overflow: hidden;
}

.dish:hover {
    transform: translateY(-5px);
    border-color: #38bdf8;
    box-shadow: 0 10px 30px rgba(56,189,248,0.2);
}

/* IMAGEM */
.rosto-photo,
.combo-cover img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 10px;
}

/* TITULO */
.dish-title {
    font-size: 1.2rem;
    margin: 10px 0;
}

/* DESCRIÇÃO */
.dish-description {
    font-size: 0.9rem;
    color: #cbd5f5;
}

/* AVALIAÇÃO */
.dish-rate {
    margin: 10px 0;
    color: #facc15;
    font-size: 0.9rem;
}

/* PREÇO */
.dish-price {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 15px;
}

.dish-price h4 {
    font-size: 1.2rem;
    color: #38bdf8;
}

/* BOTÃO */
.btn-default {
    background: linear-gradient(135deg, #38bdf8, #0ea5e9);
    border: none;
    padding: 10px 14px;
    border-radius: 10px;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.btn-default:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(56,189,248,0.4);
}

/* CORAÇÃO */
.dish-heart {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #f43f5e;
    cursor: pointer;
}

/* BADGE (COMBOS) */
.dish-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: bold;
}

/* BADGES PERSONALIZADOS */
.dish-badge.feminino {
    background: #ec4899;
}

.dish-badge.masculino {
    background: #3b82f6;
}

/* FILTROS */
.combo-filters {
    display: flex;
    gap: 10px;
    margin-bottom: 30px;
    justify-content: center;
}

.filter-btn {
    padding: 8px 16px;
    border-radius: 20px;
    border: none;
    background: #1e293b;
    color: #fff;
    cursor: pointer;
    transition: 0.3s;
}

.filter-btn.active,
.filter-btn:hover {
    background: #38bdf8;
}

/* BOTÕES VER MAIS */
.ver-mais-wrapper {
    text-align: center;
    margin-top: 30px;
}

.btn-ver-mais,
.btn-ver-menos {
    margin: 5px;
}

/* DIFERENCIAÇÃO MASCULINO */
#masculino .dish {
    border: 1px solid rgba(59,130,246,0.2);
}

#masculino .dish:hover {
    border-color: #3b82f6;
    box-shadow: 0 10px 30px rgba(59,130,246,0.3);
}

/* DIFERENCIAÇÃO FEMININO */
#feminino .dish:hover {
    border-color: #ec4899;
    box-shadow: 0 10px 30px rgba(236,72,153,0.3);
}

/* COMBOS */
#combos .dish:hover {
    border-color: #22c55e;
    box-shadow: 0 10px 30px rgba(34,197,94,0.3);
}
</style>

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
        <?php if ($servico['categoria'] === 'feminino' && ($servico['ativo'] ?? true)): ?>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                 <?php
                 $imagens = [];

                 if (isset($servico['imagens']) && is_array($servico['imagens'])) {
                     $imagens = $servico['imagens'];
                 }

                 elseif (isset($servico['imagens']) && !empty($servico['imagens'])) {
                     $imagens = [$servico['imagens']];
                 }
                 ?>

                 <?php if (!empty($imagens)): ?>
                     <?php foreach ($imagens as $img): ?>
                         <img src="<?= $img ?>" class="rosto-photo">
                     <?php endforeach; ?>
                 <?php endif; ?>

                    <h3 class="dish-title"><?= $servico['nome']; ?></h3>

                    <span class="dish-description">
                        <?= $servico['descricao']; ?>
                    </span>

                <?php $avs = $servico['avaliacoes'] ?? 67; ?>

                <div class="dish-rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(<?= $avs ?>+)</span>
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

<section id="masculino" class="menu-section">

    <div class="linha-categoriam">
        <span class="linham"></span>
        <p class="categoria-textom">DEPILAÇÃO MASCULINA</p>
        <span class="linham"></span>
    </div>

        <div class="dishes-grid" id="dishes-masculino">

        <?php foreach ($servicos as $servico): ?>
            <?php if ($servico['categoria'] === 'masculino' && ($servico['ativo'] ?? true)): ?>

                <div class="dish combo-extraa">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                 <?php
                                  $imagens = [];

                                  if (isset($servico['imagens']) && is_array($servico['imagens'])) {
                                      $imagens = $servico['imagens'];
                                  }

                                  // formato antigo (string única)
                                  elseif (isset($servico['imagens']) && !empty($servico['imagens'])) {
                                      $imagens = [$servico['imagens']];
                                  }
                                  ?>

                                  <?php if (!empty($imagens)): ?>
                                      <?php foreach ($imagens as $img): ?>
                                          <img src="<?= $img ?>" class="rosto-photo">
                                      <?php endforeach; ?>
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
<?php if ($servico['categoria'] === 'combos' && ($servico['ativo'] ?? true)): ?>

<?php
$publico = $servico['publico'] ?? null;
?>

<?php if ($publico): ?>
    <span class="dish-badge <?= htmlspecialchars($publico) ?>">
        <?= ucfirst(htmlspecialchars($publico)) ?>
    </span>
<?php endif; ?>

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

</div>
</section>
