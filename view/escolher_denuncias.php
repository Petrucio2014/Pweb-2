<!DOCTYPE html>
<html>

	<head>

		<title> Escolha da denúncia</title>
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

						<tr>
							<th>ID</br></th>
							<th>TIPO DE OCORRÊNCIA</th>
						</tr>
						<?php
						require "../controller/controller.php";
						$controlador = new controller();
						$tabela = $controlador->verLista();

						foreach ($tabela as $key) {
							$aux = $key["id"];
							echo "<tr onclick=location.href='ver_denuncias.php?id=$aux'><td>". $key["id"]."</td><td>".$key["tipo_denuncia"]."</td></tr>";
						}

					?>
				</table>
						<a href = "../index.php" class="alert-link" id="cadastroLinkblack"> Voltar ao menu </a> <br>
				</section>
		</section>


</html>
