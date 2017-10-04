<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Despesas</title>
</head>
<body>
<div>
	<?php 
		include("conexao-despesa.php");
		$ordem = selectAllDespesa();
	?>
	<table border="1">
		<tr>
			<td>ID-Frete</td>
			<td>Título</td>
			<td>Descrição</td>
			<td>Valor</td>
			<td>Data</td>
		</tr>
		<?php
			foreach ($ordem as $key) { ?>
			<tr>
				<td><?=$key["idFrete"]?></td>
				<td><?=$key["titulo"]?></td>
				<td><?=$key["descricao"]?></td>
				<td><?=$key["valor"]?></td>
				<td><?=$key["data"]?></td>
				<td>
					<form action="editar-despesa.php" method="post" name="alterar">
						<input type="hidden" name="id" value="<?=$key["id"]?>">
						<input type="submit" name="editar" value="Editar">
					</form>
				</td>
				<td>
					<form name="delete" action="conexao-despesa.php" method="post">
	 					<input type="hidden" name="id" value="<?=$key["id"]?>">
	 					<input type="hidden" name="acao" value="delete">
	 					<input type="submit" name="delete" value="Deletar">
	 				</form>
				</td>
			</tr>
			<?php } ?>
	</table>
	<a href="first01.php">Voltar</a>
</div>
</body>
</html>