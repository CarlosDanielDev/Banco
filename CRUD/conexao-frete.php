<?php
	if (isset($_POST["acao"])){ 
		if ($_POST["acao"]=="Inserir"){
	 		addFrete();
		}
		if ($_POST["acao"]=="editar"){
			editarFrete();
		}
		if ($_POST["acao"]=="delete"){
			deleteFrete();
		}
	}
	function openDB(){
		$conexao = new mysqli("127.0.0.1", "root", "toor", "matt");
		return $conexao;
	}
	function addFrete(){
		$bd = openDB();
		$sql = "INSERT INTO `frete`(`idCaminhao`, `saida`, `destino`, `valor`, `peso`, `km_partida`, `km_chegada`, `data`) VALUES ('{$_POST["idCaminhao"]}','{$_POST["saida"]}','{$_POST["destino"]}','{$_POST["valor"]}','{$_POST["peso"]}','{$_POST["km_partida"]}','{$_POST["km_chegada"]}','{$_POST["data"]}')";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function editarFrete(){
		$bd = openDB();
		$sql = "UPDATE `frete` SET  `idCaminhao`='{$_POST["idCaminhao"]}',`saida`='{$_POST["saida"]}',`destino`='{$_POST["destino"]}',`valor`='{$_POST["valor"]}',`peso`='{$_POST["peso"]}',`km_partida`='{$_POST["km_partida"]}',`km_chegada`='{$_POST["km_chegada"]}',`data`='{$_POST["data"]}' WHERE `id`='{$_POST["id"]}'";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
		function deleteFrete(){
		$bd =  openDB();
		$sql = "DELETE FROM frete WHERE `id`='{$_POST["id"]}'";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function selectAllFrete(){
		$database = openDB();
		$sql = "SELECT * FROM frete ORDER BY idCaminhao";
		$resultado = $database->query($sql);
		while ($row= mysqli_fetch_array($resultado)) {
			$ordem[] = $row;
		}
		return $ordem;
	}
		function selectIdFrete($id){
		$database = openDB();
		$sql = "SELECT * FROM frete WHERE id =".$id;
		$resultado = $database->query($sql);
		$database->close();
		$key = mysqli_fetch_assoc($resultado);
		return $key;
	}
	function backFirst(){
		header("Location:dados-frete.php");
	}