<?php

require 'model/dados.php';

if ( isset($_POST['cadastrar']) ) { 
	
	$dir_imagens = '../view/imagens/';

	if(!is_dir('../view/imagens'))
	{
		mkdir($dir_imagens);
	}

	require 'controller/consist_cadastro.php';	

	$id = gravar_usuario( $_POST['nome'], $_POST['email'], $_POST['senha']);
	
	if ( $id ) {

		if(isset($_FILES['foto']))
		{
			if($_FILES['foto']['error'] == 0 )
			{
				$nome_explodido = explode('.', $_FILES['foto']['name']);
				$ext = end($nome_explodido);
				$nome_imagem = 'foto_'. md5(rand(0, 999999999)) . '_' . $id . '.' . $ext;

				$temp_file = $_FILES['foto']['tmp_name'];
				$destino = $dir_imagens . $nome_imagem;

				move_uploaded_file($temp_file, $destino);

				vincula_img($id, $nome_imagem);
			}
		}

		session_start();

		$_SESSION['login'] = $_POST['email'];
		$_SESSION['id'] = $id;

		header('Location: ../');

	} else {

		$erros = ['Não foi possível criar o usuário'];
	}

} else {

	$erros = [];
}

include 'view/cadastro_tpl.php';