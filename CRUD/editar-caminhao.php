<?php
	include("conexao-caminhao.php");
	$key = selectIdCaminhao($_POST["id"]);
	//var_dump($key);
?>
<meta charset="utf-8">
<form name="dados-caminhao" action="conexao-caminhao.php" method="post">
	<table border="1">
			<tr>
				<td>Id-Usuario</td>
				<td><input type="number" name="idUsuario" value="<?=$key["idUsuario"]?>"></td>
			</tr>
		<tbody>
			<tr>
				<td>Placa</td>
				<td><input type="text" name="placa" value="<?=$key["placa"]?>"></td>
			</tr>
			<tr>
				<td>Modelo</td>
				<td><input type="text" name="modelo" value="<?=$key["modelo"]?>"></td>
			</tr>
			<tr>
				<td>Cor</td>
				<td><input type="color" name="cor" value="<?=$key["cor"]?>"></td>
			</tr>
			<tr>
				<td>Ano</td>
				<td><input type="year" name="ano" value="<?=$key["ano"]?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="acao" value="editar">
					<input type="hidden" name="id" value="<?=$key["id"]?>">
				</td>
				<td><input type="submit" name="Enviar" value="Salvar"></td>
			</tr>
		</tbody>
	</table>
		<a href="first01.php">Voltar</a>
</form>