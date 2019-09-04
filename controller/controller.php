<?php
	include_once "../model/denuncia.php";
	include_once "../model/denunciaDAO.php";
	class controller{
		function cadastrar(){
			$denuncia;
			$denunciaDAO;
			if(isset($_POST['ocorrencia']) && isset($_POST['descricao'])&& isset($_POST['data'])&& isset($_POST['hora'])&& isset($_POST['local'])&& isset($_POST['imagem'])&& isset($_POST['video']))
			{
				$this->denuncia = new denuncia($_POST['ocorrencia'], $_POST['descricao'], $_POST['data'], $_POST['hora'], $_POST['local'], $_POST['imagem'],$_POST['video']);
				$this->denunciaDAO = new denunciaDAO();
				$verificar = $this->denunciaDAO->inserir($this->denuncia);
				header("Location: ../view/cad_denuncias.php?denuncia=$verificar");
			}
		}
		function verLista(){}
		function verDenuncia(){}
	}
	$controlador = new  controller();
	if(isset($_GET['cadastrar']) && $_GET['cadastrar'])
		$controlador->cadastrar();
	if(isset($_GET['verLista']) && $_GET['verLista'])
		$controlador->verLista();
	if(isset($_GET['verDenuncia']) && $_GET['verDenuncia'])
		$controlador->verDenuncia();
?>