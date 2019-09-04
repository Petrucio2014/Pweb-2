<?php 
	class denuncia{
		var $tipo_denuncia;
		var $descricao;
		var $data;
		var $hora;
		var $local;
		var $video;
		var $imagem;

		function denuncia( $tipo_denuncia, $descricao, $data, $hora, $local, $video, $imagem){
			$this->tipo_denuncia = $tipo_denuncia;
			$this->descricao = $descricao; 
			$this->data = $data;
			$this->hora = $hora;
			$this->local = $local;
			$this->video = $video; 
			$this->imagem = $imagem;
		}
	}
?>