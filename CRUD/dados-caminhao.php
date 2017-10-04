<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Caminhão</title>
</head>
<body>
<div>
	<?php 
			include("conexao-caminhao.php");
			$ordem = selectAllCaminhao();
	 ?>
	 <table border="1">
	 	<tr>
	 		<td>ID-Usuario</td>
	 		<td>Placa</td>
	 		<td>Modelo</td>
	 		<td>Cor</td>
	 		<td>Ano</td>
	 	</tr>
	 	<?php foreach ($ordem as $key) {?>
	 		<tr>
	 			<td><?=$key["idUsuario"]?></td>
	 			<td><?=$key["placa"]?></td>
	 			<td><?=$key["modelo"]?></td>
	 			<td><?=$key["cor"]?></td>
	 			<td><?=$key["ano"]?></td>
	 			<td>
	 				<form action="editar-caminhao.php" method="post" name="alterar">
						<input type="hidden" name="id" value="<?=$key["id"]?>">
						<input type="submit" name="editar" value="Editar">
					</form>
	 			</td>
	 			<td>
	 				<form name="delete" action="conexao-caminhao.php" method="post">
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