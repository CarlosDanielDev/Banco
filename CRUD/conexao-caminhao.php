<?php 
	if (isset($_POST["acao"])){ 
		if ($_POST["acao"]=="Inserir"){
			addCaminhao();
		}
		if ($_POST["acao"]=="editar") {
			editarCaminhao();
		}
		if ($_POST["acao"]=="delete") {
			deleteCaminhao();
		}
	}
	function openDB(){
		$conexao = new mysqli("127.0.0.1", "root", "toor", "matt");
		return $conexao;
	}
	function addCaminhao(){
		$bd = openDB();
		$sql= "INSERT INTO `caminhao`(`idUsuario`, `placa`, `modelo`, `cor`, `ano`) VALUES ('{$_POST["idUsuario"]}','{$_POST["placa"]}','{$_POST["modelo"]}','{$_POST["cor"]}','{$_POST["ano"]}')";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function editarCaminhao(){
		$bd = openDB();
		$sql= "UPDATE `caminhao` SET `idUsuario`='{$_POST["idUsuario"]}',`placa`='{$_POST["placa"]}',`modelo`='{$_POST["modelo"]}',`cor`='{$_POST["cor"]}',`ano`='{$_POST["ano"]}' WHERE `id`='{$_POST["id"]}'";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function deleteCaminhao(){
		$bd =  openDB();
		$sql = "DELETE FROM caminhao WHERE `id`='{$_POST["id"]}'";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function selectAllCaminhao(){
		$database = openDB();
		$sql = "SELECT * FROM caminhao ORDER BY idUsuario";
		$resultado = $database->query($sql);
		while ($row = mysqli_fetch_array($resultado)) {
			$ordem[] = $row;
		}
		return $ordem;
	}
		function selectIdCaminhao($id){
		$database = openDB();
		$sql = "SELECT * FROM caminhao WHERE id =".$id;
		$resultado = $database->query($sql);
		$database->close();
		$key = mysqli_fetch_assoc($resultado);
		return $key;
	}
	function backFirst(){
		header("Location:dados-caminhao.php");
}
