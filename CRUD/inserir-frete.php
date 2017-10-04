<?php  ?>
<meta charset="utf-8">
<form name="dados-frete" action="conexao-frete.php" method="post"><table border="1">
		<tr>
			<td>Id-Caminhão:</td>
			<td><input type="number" name="idCaminhao"></td>
		</tr>
		<tr>
			<td>Saida:</td>
			<td><input type="text" name="saida"></td>
		</tr>
		<tr>
			<td>Destino:</td>
			<td><input type="text" name="destino"></td>
		</tr>
		<tr>
			<td>Valor R$:</td>
			<td><input type="text" name="valor"></td>
		</tr>
		<tr>
			<td>Peso:</td>
			<td><input type="text" name="peso"></td>
		</tr>
		<tr>
			<td>KM - Partida:</td>
			<td><input type="number" name="km_partida"></td>
		</tr>
		<tr>
			<td>KM - Chegada:</td>
			<td><input type="number" name="km_chegada"></td>
		</tr>
		<tr>
			<td>Data:</td>
			<td><input type="date" name="data"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="acao" value="Inserir"></td>
			<td><input type="submit" name="Enviar" value="Enviar"></td>
		</tr>
	</table>
	<a href="first01.php">Voltar</a>
</form>