<?php
	if (isset($_POST["acao"])){
		if ($_POST["acao"]=="Inserir"){
			addDespesa();
		}
		if ($_POST["acao"]=="editar") {
			editarDespesa();
		}
		if ($_POST["acao"]=="delete") {
			deleteDespesa();
		}
	}
	function openDB(){
		$conexao = new mysqli("127.0.0.1", "root", "toor", "matt");
		return $conexao;
	}
	function addDespesa(){
		$bd = openDB();
		$sql = "INSERT INTO `despesa`(`idFrete`, `titulo`, `descricao`, `valor`, `data`) VALUES ('{$_POST["idFrete"]}','{$_POST["titulo"]}','{$_POST["descricao"]}','{$_POST["valor"]}','{$_POST["data"]}')";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function editarDespesa(){
		$bd = openDB();
		$sql = "UPDATE `despesa` SET `idFrete`='{$_POST["idFrete"]}',`titulo`='{$_POST["titulo"]}',`descricao`='{$_POST["descricao"]}',`valor`='{$_POST["valor"]}',`data`='{$_POST["data"]}' WHERE `id`='{$_POST["id"]}'";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function deleteDespesa(){
		$bd =  openDB();
		$sql = "DELETE FROM despesa WHERE `id`='{$_POST["id"]}'";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function selectAllDespesa(){
		$database = openDB();
		$sql = "SELECT * FROM despesa ORDER BY idFrete";
		$resultado = $database->query($sql);
		while ($row = mysqli_fetch_array($resultado)) {
			$ordem[] = $row;
		}
		return $ordem;
	}
		function selectIdDespesa($id){
		$database = openDB();
		$sql = "SELECT * FROM despesa WHERE id =".$id;
		$resultado = $database->query($sql);
		$database->close();
		$key = mysqli_fetch_assoc($resultado);
		return $key;
	}
	function backFirst(){
		header("Location:dados-despesa.php");
	}
?>