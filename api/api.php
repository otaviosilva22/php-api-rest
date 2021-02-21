<?php	
	header("Content-Type: application/json; charset=utf-8");
	header("Acess-Control-Allow-Origin: *");
	header("Acess-Control-Allow-Methods: POST");
	header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type, Acess-Control-Allow-Methods, Authorization");

	class Estoque{
		public function produto(){
			//require de configurações de conexão com banco
			require_once '../dbconfig/dbconfig.php';
			
			if (!$conn){
				die ("Connection failed: ".mysqli_connect_error());
			}

			//query de consulta
			$sql = "SELECT * FROM produto ORDER BY id ASC";
			$result_sql = mysqli_query($conn, $sql);
			
			$resultados = array();

			while($row = mysqli_fetch_assoc($result_sql)) {
				$resultados[] = $row;
			}

			if (count($resultados) == 0) {
				throw new Exception("Nenhum produto encontrado!");
			}
            return $resultados;
		}
		
		public function read($parametros){
			require_once '../dbconfig/dbconfig.php';
			
			if (!$conn){
				die ("Connection failed: ".mysqli_connect_error());
			}

			$nome = $parametros[0];

			$query = "SELECT * FROM produto WHERE nome LIKE '$nome'";
			$result_sql = mysqli_query($conn, $query);
			
			$resultados = array();

			while($row = mysqli_fetch_assoc($result_sql)) {
				$resultados[] = $row;
			}

			if (count($resultados) == 0) {
				throw new Exception("Nenhum produto encontrado!");
			}
            return $resultados;
		}
	}
?>