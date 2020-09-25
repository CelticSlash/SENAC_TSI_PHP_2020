<html>
	<head></head>
	<body>
		<center>
			<a href='listaContato.php'>Listar</a> 
			<a href='listaContato.php'>Editar</a> 
			<a href='listaContato.php'>Apagar</a><br><br>
			<h1>Edite seu contato</h1>
			<br>
			<?php 
			if ( isset($msg) ) echo $msg; 
			?>
			<br><br>
			<form method="post" action="editaContato.php">
				Nome: <input type="text" name="nm" value="<?php echo $contato['nome'] ?>"> 
				Whatsapp: <input type="text" name="whats" value="<?php echo $contato['whatsapp'] ?>">
				<input type="hidden" name="id" value="<?php echo $contato['id'] ?>">
				<br><br>
				<input type="submit" value="Gravar">
			</form>
		</center>
	</body>
</html>