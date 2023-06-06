<h1>NOME DA SÉRIE: HOUSE OF CARDS</h1>
<h3>TOTAL DE TEMPORADAS: <?=$_POST['total_temporadas']?></h3>
<h3>TOTAL DE EPISÓDIOS: <?=$_POST['total_episodios']?></h3>
<?php
	//var_dump($_POST);
	include('funcoes.php');
	$faltam = $_POST['total_episodios'] - $_POST['qtd'];
	
	echo "<p>NOME DO TELESPECTADOR: <strong>{$_POST['nome']}</strong></p>";
	echo "<p>IDADE: <strong>".calculaIdade($_POST['dtanasc'])."</strong></p>";
	echo "<p>QUANTIDADE DE EPISÓDIOS ASSISTIDOS: <strong>{$_POST['qtd']}</strong></p>";
	echo "<p>FALTAM <strong>{$faltam}</strong> EPISÓDIOS PARA VOCÊ ASSISTIR TODA A SÉRIE</p>";

	echo "<p><a href='index.php?pagina=form1'>voltar</a></p>";
?>