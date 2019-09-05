<!DOCTYPE html>
<html>

	<head>

		<title> Visualizar denúncia</title>
		<meta charset="utf-8" name='viewport' content='width-device-width, initial-scale-1.0'/>
		<link href='../css/bootstrap.min.css' rel ='stylesheet' type='text/css'/>
		<link rel ='stylesheet' type='text/css' href='../css/form.css'>
		<script type= 'text/javascript' src='../js/jquery-3.4.1.min.js'></script>
		<script type= 'text/javascript' src='../js/bootstrap.min.js'></script>

	</head>

	<body>

		<section class = "container-fluid">
			<section class= "row justify-content-center">

				<table class="table table-hover" >
						<?php
						require "../controller/controller.php";
						$controlador = new controller();
						$tabela = $controlador->verDenuncia($_GET['id']);
						foreach ($tabela as $key) {
							echo "<tr><th>Tipo de ocorrência:</th></tr>";
							echo "<tr><td>". $key["tipo_denuncia"]."</td></tr>";
							echo "<tr><th>Descrição:</th></tr>";
							echo "<tr><td>". $key["descricao_denuncia"]."</td></tr>";
							echo "<tr><th>Data:</th></tr>";
							echo "<tr><td>". $key["data_denuncia"]."</td></tr>";
							echo "<tr><th>Hora:</th></tr>";
							echo "<tr><td>". $key["hora_denuncia"]."</td></tr>";
							echo "<tr><th>Local:</th></tr>";
							echo "<tr><td>". $key["local_denuncia"]."</td></tr>";
							echo "<tr><th>Imagens:</th></tr>";
							echo "<tr><td>". $key["imagem"]."</td></tr>";
							echo "<tr><th>Vídeos:</th></tr>";
							echo "<tr><td>". $key["video"]."</td></tr>";
					}
					?>						
				</table>
				<a href = "../index.php" class="alert-link" id="cadastroLinkblack"> Voltar ao menu </a>
				</section>
		</section>




</html>
