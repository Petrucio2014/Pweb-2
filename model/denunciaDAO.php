<?php 
	include_once "conexao.php";
	class denunciaDAO{
		var $conexao;
		var $tipo;
		var $descricao;
		var $data;
		var $hora;
		var $local;
		var $imagem;
		var $video;
		function denunciaDAO(){
			$this->conexao = new conexao();
		}
		function inserir($denuncia){
			$this->tipo = $denuncia->tipo_denuncia;
			$this->descricao = $denuncia->descricao;
			$this->data = $denuncia->data;
			$this->hora = $denuncia->hora;
			$this->local = $denuncia->local;
			$this->imagem = $denuncia->imagem;
			$this->video = $denuncia->video;

			return $this->conexao->exeSql("INSERT INTO denuncia(tipo_denuncia, descricao_denuncia, data_denuncia, hora_denuncia, local_denuncia, 
				imagem, video) 
				VALUES
				('arroz1','feijao2',null,null,'42','43','44')",true);
		}
	}
?>
