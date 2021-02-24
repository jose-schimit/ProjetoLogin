<?php
	$usuario = $_POST['user'];
	$senha = $_POST['senha'];
	$altenticado = false;
	$usuarios  = array(
			array('email'=>'jose.@hotmail.com','senha'=>'12345'),
			array('email'=>'teste.@hotmail.com','senha'=>'1234')
		);
	foreach ($usuarios as $user){
		if($user['email'] == $usuario && $user['senha'] == $senha){
			$altenticado = true;
		}
	}
	if($altenticado){
		echo "Usuario altenticado com sucesso!";
	}else{
		header('Location:index.php?login=erro');
	}	
?>