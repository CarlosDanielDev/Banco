<?php
	if (isset($_POST["acao"])){ 
		if ($_POST["acao"]=="Inserir"){
			addUsuario();
		}
		if ($_POST["acao"]=="editar") {
			editarUsuario();
		}
		if ($_POST["acao"]=="delete") {
			deleteUsuario();
		}
	}
	function openDB(){
		$conexao = new mysqli("127.0.0.1", "root", "toor", "matt");
		return $conexao;
	}
	function addUsuario(){
		$bd =  openDB();
		$sql = "INSERT INTO `usuario`(`email`, `senha`, `telefone`, `tipo`) VALUES ('{$_POST["email"]}','{$_POST["senha"]}','{$_POST["telefone"]}','{$_POST["tipo"]}')";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function editarUsuario(){
		$bd =  openDB();
		$sql = "UPDATE `usuario` SET `email`='{$_POST["email"]}',`senha`='{$_POST["senha"]}',`telefone`='{$_POST["telefone"]}',`tipo`='{$_POST["tipo"]}' WHERE `id`='{$_POST["id"]}'";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function deleteUsuario(){
		$bd =  openDB();
		$sql = "DELETE FROM usuario WHERE `id`='{$_POST["id"]}'";
		$bd->query($sql);
		$bd->close();
		backFirst();
	}
	function selectAllUsuario(){
		$database = openDB();
		$sql = "SELECT * FROM usuario ORDER BY email";
		$resultado = $database->query($sql);
		$database->close();
		while ($row = mysqli_fetch_array($resultado)) {
			$ordem[] = $row;
		}
		return $ordem;
	}
		function selectIdUsuario($id){
		$database = openDB();
		$sql = "SELECT * FROM usuario WHERE id =".$id;
		$resultado = $database->query($sql);
		$database->close();
		$key = mysqli_fetch_assoc($resultado);
		return $key;
	}
	function backFirst(){
		header("Location:dados-usuario.php");
	}
