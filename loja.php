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

<div class="ver-mais-wrapper">

    <button class="btn-default btn-ver-mais">
        Ver mais
    </button>

    <button class="btn-default btn-ver-menos">
        Ver menos
    </button>
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
<div class="ver-mais-wrapper">

    <button class="btn-default btn-ver-mais">
        Ver mais
    </button>

    <button class="btn-default btn-ver-menos">
        Ver menos
    </button>

</div>
</section>