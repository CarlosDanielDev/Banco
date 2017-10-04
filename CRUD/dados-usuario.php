<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuário</title>
</head>
<body>
<div>
	<?php
		include("conexao-usuario.php");
		$ordem = selectAllUsuario();
	?>
	<table border="1">
		<tr>
			<td>E-mail</td>
			<td>Senha</td>
			<td>Telefone</td>
			<td>Tipo</td>
		</tr>
		<?php
		foreach ($ordem as $key) { ?>
			<tr>
				<td><?=$key["email"]?></td>
				<td><?=$key["senha"]?></td>
				<td><?=$key["telefone"]?></td>
				<td><?=$key["tipo"]?></td>
				<td>
					<form action="editar-usuario.php" method="post" name="alterar">
						<input type="hidden" name="id" value="<?=$key["id"]?>">
						<input type="submit" name="editar" value="Editar">
					</form>
				</td>
				<td>
					<form name="delete" action="conexao-usuario.php" method="post">
	 					<input type="hidden" name="id" value="<?=$key["id"]?>">
	 					<input type="hidden" name="acao" value="delete">
	 					<input type="submit" name="delete" value="Deletar">
	 				</form>
				</td>
			</tr>
		<?php } ?>
	</table><br>
	<a href="first01.php">Voltar</a>
</div>
</body>
</html>