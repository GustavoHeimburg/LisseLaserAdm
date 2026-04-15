<?php
$servicos = json_decode(file_get_contents("data/servicos.json"), true);
?>

<style>
/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #020617, #0f172a);
    color: #fff;
}

/* SECTIONS */
.menu-section {
    padding: 80px 8%;
}

/* TITULOS */
.section-title {
    text-align: center;
    font-size: 2.8rem;
    font-weight: 700;
    background: linear-gradient(90deg, #38bdf8, #6366f1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.section-subtitle {
    text-align: center;
    margin-bottom: 50px;
    color: #94a3b8;
    font-size: 1rem;
}

/* LINHAS */
.linha-categoria,
.linha-categoriam {
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 50px 0;
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
    letter-spacing: 3px;
    color: #38bdf8;
}

/* GRID */
.dishes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
}

/* CARD */
.dish {
    background: rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(14px);
    border-radius: 20px;
    padding: 20px;
    transition: all 0.35s ease;
    border: 1px solid rgba(255,255,255,0.06);
    position: relative;
    overflow: hidden;
}

/* brilho no hover */
.dish::before {
    content: "";
    position: absolute;
    width: 150%;
    height: 150%;
    background: radial-gradient(circle, rgba(56,189,248,0.15), transparent 70%);
    top: -50%;
    left: -50%;
    opacity: 0;
    transition: 0.5s;
}

.dish:hover::before {
    opacity: 1;
}

.dish:hover {
    transform: translateY(-8px) scale(1.02);
    border-color: #38bdf8;
    box-shadow: 0 20px 40px rgba(0,0,0,0.6);
}

/* IMAGEM */
.rosto-photo,
.combo-cover img {
    width: 100%;
    height: 170px;
    object-fit: cover;
    border-radius: 14px;
    margin-bottom: 12px;
    transition: 0.4s;
}

.dish:hover img {
    transform: scale(1.05);
}

/* TITULO */
.dish-title {
    font-size: 1.25rem;
    margin: 12px 0;
    font-weight: 600;
}

/* DESCRIÇÃO */
.dish-description {
    font-size: 0.9rem;
    color: #cbd5f5;
    line-height: 1.4;
}

/* AVALIAÇÃO */
.dish-rate {
    margin: 10px 0;
    color: #facc15;
    font-size: 0.85rem;
}

/* PREÇO */
.dish-price {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 15px;
}

.dish-price h4 {
    font-size: 1.3rem;
    color: #38bdf8;
    font-weight: bold;
}

/* BOTÃO */
.btn-default {
    background: linear-gradient(135deg, #38bdf8, #6366f1);
    border: none;
    padding: 10px 16px;
    border-radius: 12px;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-default:hover {
    transform: scale(1.08);
    box-shadow: 0 10px 20px rgba(56,189,248,0.4);
}

/* CORAÇÃO */
.dish-heart {
    position: absolute;
    top: 12px;
    right: 12px;
    color: #f43f5e;
    cursor: pointer;
    font-size: 1.1rem;
    transition: 0.3s;
}

.dish-heart:hover {
    transform: scale(1.2);
}

/* BADGE */
.dish-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.7rem;
    font-weight: bold;
    backdrop-filter: blur(6px);
}

/* CORES BADGE */
.dish-badge.feminino {
    background: rgba(236,72,153,0.8);
}

.dish-badge.masculino {
    background: rgba(59,130,246,0.8);
}

/* FILTROS */
.combo-filters {
    display: flex;
    gap: 10px;
    margin-bottom: 30px;
    justify-content: center;
}

.filter-btn {
    padding: 8px 18px;
    border-radius: 20px;
    border: 1px solid rgba(255,255,255,0.1);
    background: transparent;
    color: #fff;
    cursor: pointer;
    transition: 0.3s;
}

.filter-btn.active,
.filter-btn:hover {
    background: linear-gradient(135deg, #38bdf8, #6366f1);
}


/* DIFERENCIAÇÃO */
#masculino .dish:hover {
    border-color: #3b82f6;
}

#feminino .dish:hover {
    border-color: #ec4899;
}

#combos .dish:hover {
    border-color: #22c55e;
}
.cart-button {
    position: fixed;
    top: 20px;
    right: 20px;
    background: linear-gradient(135deg, #38bdf8, #6366f1);
    padding: 12px 18px;
    border-radius: 12px;
    color: white;
    text-decoration: none;
    font-weight: 600;
    box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    transition: 0.3s;
}

.cart-button:hover {
    transform: scale(1.05);
}

</style>

<a href="carrinho.php" class="cart-button">
    🛒 Ver carrinho
</a>

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

<form method="POST" action="add-to-cart.php">
    <input type="hidden" name="name" value="<?= $servico['nome'] ?>">
    <input type="hidden" name="price" value="<?= $servico['preco'] ?>">

    <button type="submit" class="btn-default">
        🛒
    </button>
</form>
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

<form method="POST" action="add-to-cart.php">
    <input type="hidden" name="name" value="<?= $servico['nome'] ?>">
    <input type="hidden" name="price" value="<?= $servico['preco'] ?>">

    <button type="submit" class="btn-default">
        🛒
    </button>
</form>
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

<form method="POST" action="add-to-cart.php">
    <input type="hidden" name="name" value="<?= $servico['nome'] ?>">
    <input type="hidden" name="price" value="<?= $servico['preco'] ?>">

    <button type="submit" class="btn-default">
        🛒
    </button>
</form>
    </div>

</div>

<?php endif; ?>
<?php endforeach; ?>

    </div>
<form method="POST" action="add-to-cart.php">
    <button type="submit">TESTAR</button>
</form>
</div>
</section>