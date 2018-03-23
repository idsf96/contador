<?php 
class Contador
{

	function __construct(){
		$this->con = new Conexion;
	}

	public function set($atributo, $parametro){
		$this->$atributo = $parametro;
	}

	public function get($atributo){
		return $this-$atributo;
	}
	
	public function cont()
	{

		$array = array("false","false","true");

		foreach ($array as $key) {
			$cont=1;
			$sql = "SELECT * FROM contador.contador";
			$query = $this->con->returnConsulta($sql);
			$array = mysqli_fetch_array($query);
			$data = $array['data'];

			if ($key=="false") {
				$cont=$cont+1;
				$insert = $data . $cont . ",";
				$sql = "UPDATE `contador` SET `data`='$insert' WHERE idcontador = 1";
				$query = $this->con->consulta($sql);
				if ($query) {
					echo "Consulta exitosa";
				}else{
					echo "No";
				}
			}else{
				$cont;
				$insert = $data . $cont . ",";
				$sql = "UPDATE `contador` SET `data`='$insert' WHERE idcontador = 1";
				$query = $this->con->consulta($sql);
				if ($query) {
					echo "Consulta exitosa";
				}else{
					echo "No";
				}
			}
		}
	}

}
