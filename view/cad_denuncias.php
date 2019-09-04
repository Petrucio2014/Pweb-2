<!DOCTYPE html>
<html>

	<head>

		<title> Cadastro de denúncia</title>
		<meta charset="utf-8" name='viewport' content='width-device-width, initial-scale-1.0'/>
		<link href='../css/bootstrap.min.css' rel ='stylesheet' type='text/css'/>
		<link rel ='stylesheet' type='text/css' href='../css/formcad.css'>
		<script type= 'text/javascript' src='../js/jquery-3.4.1.min.js'></script>
		<script type= 'text/javascript' src='../js/bootstrap.min.js'></script>



	</head>

	<body>


		<section class = "container-fluid">
			<section class= "row justify-content-center">
					<form class='form-container' action="../controller/controller.php?cadastrar=true" method="POST">					  
								<div class="form-group">
							  <label for="sel1">Tipo de ocorrência:</label>
							  <select class="form-control" id="ocorrencia" name="ocorrencia">
							    <option>Furto</option>
							    <option>Roubo</option>
							    <option>Agressão</option>
							    <option>Ofensa</option>
							    <option>Dano</option>
							    <option>Perda</option>
							    <option>Abigeato</option>
							    <option>Pertubação</option>
							    <option>Ameaça</option>
							    <option>Localização</option>
							    <option>Vias de fato</option>
							    <option>Violação de domicílio</option>
							    <option>Localização de pessoa</option>
							    <option>Desaparecimento de pessoa</option>
							    <option>Acidentes de trânsito sem feridos</option>
							    <option>Maus-tratos contra animais</option>
							    <option>Dano causado por fenômenos da natureza</option>
							  </select>
							</div>
						<div class="form-group">
						  <label for="descricao">Descrição do fato:</label>
						  <textarea class="form-control" rows="5" id="descricao" name="descricao"></textarea>
						</div>
						<div class="form-group">
					    <label for="data">Data:</label>
					    <input type="date" class="form-control" id="data" name="data" placeholder="data">
					  </div>
						<div class="form-group">
					    <label for="hora">Hora:</label>
					    <input type="time" class="form-control" id="hora" name="hora" placeholder="hora">
					  <div class="form-group">
						  <label for="local">Descreva o local:</label>
						  <textarea class="form-control" rows="2" id="local" name="local"></textarea>
						</div>
						<div class="form-group">
					    <label for="imagem">Inserir imagens do ocorrido:</label>
					    <input type="text" class="form-control" id="imagem" name="imagem" placeholder="imagem">
					  </div>
						<div class="form-group">
					    <label for="video">Inserir vídeos do evento:</label>
					    <input type="text" class="form-control" id="video" name="video" placeholder="video">
					  </div>

					  <button type="submit" class="btn btn-outline-dark btn-block">Cadastrar a denúncia</button><br>
						<a href = "../index.php" class="alert-link" id="cadastroLink"> Voltar ao  menu </a>
					</form>
				</section>
		</section>


	</body>

</html>
