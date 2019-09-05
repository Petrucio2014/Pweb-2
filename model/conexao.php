<?php
	class conexao{
		var $pdo;
		function conectar(){
			$dsn='mysql:host=localhost;dbname=pweb2';
			$user='root';
			$pass='';				
			try {
				$this->pdo = new pdo($dsn,$user,$pass); 	
			} catch (PDOException $e) {
				echo "erro da conexão".$e->getMessage();
			}
		}

		function exeSql($query, $res=false){
			$this->conectar();
			try {
				$result = $this->pdo->prepare($query);
				$result->execute();

					if($res){

						if($result->rowCount() > 0)
							return true;
						else
							return false;
					} else {
						return $result;
					}
			} catch (Exception $e) {
				print_r($e);
			}
			$this->desconectar();
		}

		function desconectar(){
			$this->pdo = null;
		}
	}
?>