<!DOCTYPE html>
<html>
<head>
	<title>Livraria</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
		}

		h1 {
			margin: 0;
			font-size: 32px;
			text-align: center;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
		}

		.livro {
			margin-bottom: 40px;
			border: 1px solid #ccc;
			padding: 20px;
			border-radius: 5px;
		}

		.livro h2 {
			margin-top: 0;
			font-size: 24px;
			margin-bottom: 10px;
		}

		.livro p {
			margin: 0;
			font-size: 18px;
			line-height: 1.5;
		}

		.livro .preco {
			font-size: 24px;
			font-weight: bold;
			color: #007bff;
			margin-top: 10px;
		}

		hr {
			border: none;
			border-top: 1px solid #ccc;
			margin: 20px 0;
		}
	</style>
</head>
<body>

<header>
	<h1>Loja de Livros</h1>
</header>

<div class="container">

<?php
	// Array de livros disponíveis
	$livros = array(
		array("titulo" => "O Pequeno Príncipe", "autor" => "Antoine de Saint-Exupéry", "preco" => 29.90),
		array("titulo" => "Harry Potter e a Pedra Filosofal", "autor" => "J.K. Rowling", "preco" => 39.90),
		array("titulo" => "Dom Casmurro", "autor" => "Machado de Assis", "preco" => 25.00),
		array("titulo" => "A Culpa é das Estrelas", "autor" => "John Green", "preco" => 34.50),
		array("titulo" => "O Senhor dos Anéis - A Sociedade do Anel", "autor" => "J.R.R. Tolkien", "preco" => 42.00)
	);

	// Loop através do array de livros e exibição dos resultados
	foreach ($livros as $livro) {
		echo "<div class='livro'>";
		echo "<h2>" . $livro["titulo"] . "</h2>";
		echo "<p>Autor: " . $livro["autor"] . "</p>";
		echo "<p class='preco'>R$ " . number_format($livro["preco"], 2, ',', '.') . "</p>";
		echo "</div>";
	}
?>

</div>

</body>
</html>
