<?php
	include('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Meu Novo Site PHP</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="pagina">
			<div id="topo">
				<a href="index.php"><img src="php.png" alt="" width="200" border="0"></a>
			</div>
			<div id="menu">
				<ul>
					<li>
						<a href="index.php">Início</a>
					</li>
					<li>
						<a href="index.php?pagina=empresa">Sobre a Empresa</a>
					</li>
					<li>
						<a href="index.php?pagina=produtos">Produtos</a>
					</li>
					<li>
						<a href="index.php?pagina=servicos">Serviços</a>
					</li>
					<li>
						<a href="index.php?pagina=contato">Fale Conosco</a>
					</li>
					<li>
						<a href="index.php?pagina=form1">Form 1</a>
					</li>
				</ul>
			</div>
			<div id="conteudo">
			<?php
				// testar o parâmetro vindo do GET e incluir o arquivo referente a área
				//echo "inc_{$_GET['pagina']}.php";
				if(file_exists("inc_{$_GET['pagina']}.php"))
					include("inc_{$_GET['pagina']}.php");
				else
					include('inc_inicial.php');
			?>
			</div>
			<div id="rodape">Desenvolvido na disciplina de LPWEB &copy; 2019</div>
		</div>
	</body>
</html>