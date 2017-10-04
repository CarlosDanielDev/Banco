<?php  
	include("conexao-frete.php");
	$key = selectIdFrete($_POST["id"]);
	//var_dump($key);
?>
<meta charset="utf-8">
<form name="dados-frete" action="conexao-frete.php" method="post">
	<table border="1">
		<tr>
			<td>Id-Caminhão:</td>
			<td><input type="number" name="idCaminhao" value="<?=$key["idCaminhao"]?>"></td>
		</tr>
		<tr>
			<td>Saida:</td>
			<td><input type="text" name="saida" value="<?=$key["saida"]?>"></td>
		</tr>
		<tr>
			<td>Destino:</td>
			<td><input type="text" name="destino" value="<?=$key["destino"]?>"></td>
		</tr>
		<tr>
			<td>Valor R$:</td>
			<td><input type="text" name="valor" value="<?=$key["valor"]?>"></td>
		</tr>
		<tr>
			<td>Peso:</td>
			<td><input type="text" name="peso" value="<?=$key["peso"]?>"></td>
		</tr>
		<tr>
			<td>KM - Partida:</td>
			<td><input type="number" name="km_partida" value="<?=$key["km_partida"]?>"></td>
		</tr>
		<tr>
			<td>KM - Chegada:</td>
			<td><input type="number" name="km_chegada" value="<?=$key["km_chegada"]?>"></td>
		</tr>
		<tr>
			<td>Data:</td>
			<td><input type="date" name="data" value="<?=$key["data"]?>"></td>
		</tr>
		<tr>
			<td>
			<input type="hidden" name="acao" value="editar">
			<input type="hidden" name="id" value="<?=$key["id"]?>">
			</td>
			<td><input type="submit" name="Enviar" value="Salvar"></td>
		</tr>
	</table>
	<a href="first01.php">Voltar</a>
</form>