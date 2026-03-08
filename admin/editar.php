<?php

$arquivo = "../data/servicos.json";

$servicos = json_decode(file_get_contents($arquivo), true);

$id = $_GET['id'];

$servico = $servicos[$id];

?>

<h2>Editar Serviço</h2>

<form action="salvar.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $id ?>">

Nome<br>
<input type="text" name="nome" value="<?= $servico['nome'] ?>"><br><br>

Descrição<br>
<textarea name="descricao"><?= $servico['descricao'] ?></textarea><br><br>

Preço<br>
<input type="text" name="preco" value="<?= $servico['preco'] ?>"><br><br>

Categoria<br>
<select name="categoria">

<option value="feminino" <?= $servico['categoria']=="feminino"?"selected":"" ?>>Feminino</option>
<option value="masculino" <?= $servico['categoria']=="masculino"?"selected":"" ?>>Masculino</option>
<option value="combos" <?= $servico['categoria']=="combos"?"selected":"" ?>>Combos</option>

</select>

<br><br>

Nova imagem<br>
<input type="file" name="imagem">

<br><br>

<button type="submit">Salvar</button>

</form>