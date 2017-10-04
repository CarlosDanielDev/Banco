<?php?>
<meta charset="utf-8">
<form name="dados-caminhao" action="conexao-caminhao.php" method="post">
	<table border="1">
			<tr>
				<td>Id-Usuario</td>
				<td><input type="number" name="idUsuario"></td>
			</tr>
		<tbody>
			<tr>
				<td>Placa</td>
				<td><input type="text" name="placa"></td>
			</tr>
			<tr>
				<td>Modelo</td>
				<td><input type="text" name="modelo"></td>
			</tr>
			<tr>
				<td>Cor</td>
				<td><input type="color" name="cor"></td>
			</tr>
			<tr>
				<td>Ano</td>
				<td><input type="year" name="ano"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="acao" value="Inserir"></td>
				<td><input type="submit" name="Enviar" value="Enviar"></td>
			</tr>
		</tbody>
	</table>
		<a href="first01.php">Voltar</a>
</form>