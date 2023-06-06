<h2>Formulário de Contato</h2>

<?php
	var_dump($_POST);
?>

<form action="frm_contato.php" method="POST">
	Nome <input type="text" name="nome"> <br>
	Mensagem <textarea name="mensagem"></textarea>
	<input type="submit" name="enviar" value="Enviar"> <br> <br>
</form>