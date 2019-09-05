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

			if($this->conexao->exeSql("INSERT INTO denuncia(tipo_denuncia, descricao_denuncia, data_denuncia, hora_denuncia, local_denuncia, 
				imagem, video) 
				VALUES
			('$this->tipo','$this->descricao','$this->data','$this->hora','$this->local','$this->imagem','$this->video')",true))
			{
				return true;
			} else return false;
		}

		function verLista(){
			return $this->conexao->exeSql("select * from denuncia");
		}
		function verDenuncia($ide){
			return $this->conexao->exeSql("select * from denuncia where id = $ide");
		}
	}
?>
