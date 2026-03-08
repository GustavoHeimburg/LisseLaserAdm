<?php ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Novo Serviço</title>
</head>

<body>

<h2>Novo Serviço</h2>

<form action="salvar_novo.php" method="POST" enctype="multipart/form-data">

Nome<br>
<input type="text" name="nome" required><br><br>

Descrição<br>
<textarea name="descricao" required></textarea><br><br>

Preço<br>
<input type="number" step="0.01" name="preco" required><br><br>

Categoria<br>
<select name="categoria">

<option value="feminino">Feminino</option>
<option value="masculino">Masculino</option>
<option value="combos">Combos</option>

</select>

<br><br>

Imagem<br>
<input type="file" name="imagem">

<br><br>

<button type="submit">Salvar Serviço</button>

</form>

<br>

<a href="painel.php">⬅ Voltar</a>

</body>
</html>