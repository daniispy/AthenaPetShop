<?php

function select_servico() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tabela_servico");
	$sth->execute();
	return $sth->fetchAll();
}

function inserir_usuario() {
	global $conn;
	$sth = $conn->prepare("INSERT INTO `tab_usuario` (`id_usuario`, `email_usuario`, `nome_usuario`, `pet_usuario`, `data_usuario`, `horario_usuario`, `tel_usuario`, `servico_usuario`, `comentarios_usuario`, `zapzap_usuario`) VALUES (NULL, :email, :nome, :pet, :data, :hora, :tel, :servico, :comentario, :zapzap)");
	$sth->bindParam(':email', $_POST['email']);
	$sth->bindParam(':nome', $_POST['nome']);
	$sth->bindParam(':pet', $_POST['nomepet']);
	$sth->bindParam(':data', $_POST['data']);
	$sth->bindParam(':hora', $_POST['horario']);
	$sth->bindParam(':tel', $_POST['telefone']);
	$sth->bindParam(':servico', $_POST['tipobanho']);
	$sth->bindParam(':comentario', $_POST['comentario']);
	$sth->bindParam(':zapzap', $_POST['zapzap']);
	$sth->execute();
	return $sth->fetchAll();
}

function select_usuario()
{
	global $conn;
	$sth = $conn->prepare("SELECT * FROM tabela_servico INNER JOIN tab_usuario WHERE tabela_servico.id_servico = tab_usuario.servico_usuario;");
	$sth->execute();
	return $sth->fetchAll();
}

function delete(){
	global $conn;
	$sth = $conn->prepare("DELETE FROM tab_usuario WHERE `tab_usuario`.`id_usuario` = :id");
	$sth->bindParam(':id', $_POST['id']);
	$sth->execute();
	return $sth->fetchAll();
}
	
?>
