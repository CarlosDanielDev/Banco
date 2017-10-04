<?php?>
<meta charset="utf-8">
<form name="dados-usuario" action="conexao-usuario.php" method="post">
	<table border="1">
		<tr>
			<td>e-mail:</td>
			<td><input type="email" name="email" placeholder="exemplo@gmail.com"></td>
		</tr>
		<tr>
			<td>Senha:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Telefone:</td>
			<td><input type="text" name="telefone"></td>
		</tr>
		<tr>
			<td><span>Informe o Tipo: </span></td>
			<td><input type="radio" name="1" value="1" /><label>Administrador</label></td><br>
			<td><input type="radio" name="1" value="2" /><label>Caminhoneiro</label></td>
		</tr>
		<tr>
			<td><input type="hidden" name="acao" value="Inserir"></td>
			<td><input type="submit" name="Enviar" value="Adicionar"></td>
		</tr>
	</table>
	<a href="first01.php">Voltar</a>
</form>