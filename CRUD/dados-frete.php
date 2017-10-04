<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Frete</title>
</head>
<body>
<div>
	<?php 
		include("conexao-frete.php");
		$ordem = selectAllFrete();
	?>
	<table border="1">
		<tr>
			<td>ID-Caminhão</td>
			<td>Saida</td>
			<td>Destino</td>
			<td>Valor</td>
			<td>Peso</td>
			<td>Km-Partida</td>
			<td>Km-Chegada</td>
			<td>Data</td>
		</tr>
		<?php foreach ($ordem as $key) {?>
		<tr>
			<td><?=$key["idCaminhao"]?></td>
			<td><?=$key["saida"]?></td>
			<td><?=$key["destino"]?></td>
			<td><?=$key["valor"]?></td>
			<td><?=$key["peso"]?></td>
			<td><?=$key["km_partida"]?></td>
			<td><?=$key["km_chegada"]?></td>
			<td><?=$key["data"]?></td>
			<td>
				<form action="editar-frete.php" method="post" name="alterar">
					<input type="hidden" name="id" value="<?=$key["id"]?>">
					<input type="submit" name="editar" value="Editar">
				</form>
			</td>
			<td>
				<form name="delete" action="conexao-frete.php" method="post">
	 				<input type="hidden" name="id" value="<?=$key["id"]?>">
	 				<input type="hidden" name="acao" value="delete">
	 				<input type="submit" name="delete" value="Deletar">
	 			</form>
	 		</td>
		</tr>
		<?php }?>
	</table><br>
	 <a href="first01.php">Voltar</a>
</div>
</body>
</html>