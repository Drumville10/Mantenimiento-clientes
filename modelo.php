<?php
//en este caso que el MODELO va a ser utilizado por varias paginas en distintas funciones metodos, se tiene que escribir el codigo de forma que cualquier tabla de base de datos, y diferentes bases de datos puedan acceder sin ningun problema, por este motivo las varibles tienen que ser generalizádas

//CLASE
class ClaseModelo{
	//ATRIBUTO
	public $cn;
	//METODOS
	function conectar($db){
		$this-> mysqli_connect("localhost","root","1234567890","$db");
	}
	///METODO DE LECTURA
	function LeerTabla($tabla){
		$consulta="Select * from $tabla";
		$rs =mysqli_query($this->cn,$consulta); //rs significa result set y es la variable que va a tener el resultado
		//primero se ejecuta la base de datos $this->cn
		//ya ejecutada la base de datos se realiza la consulta, declarada antes "Select * from $tabla"
		return $rs;
	}
	///METODO PARA GENERAR CODIGO
	function GenerarCodigo($tabla,$codigo){
		$rs = mysqli_query($this->cn,"Select max($codigo) as maxcod from $tabla");
		$resultado =mysqli_fetch_array($rs);
		$codigo=substr($resultado['maxcod'],-3,3)+1;
		$new=strtoupper(substr($tabla,0,3)).substr("000".$codigo,-3,3);
		return $new;
	}
	///METODO PARA AGREGAR NUEVOS DATOS A LA TABLA EN LA BASE DE DATOS
	function AgregarRegistro($tabla,$registro){
		foreach($registro as $reg){
			if($cadena){
				$cadena="'".$reg."'";
			}else{
				$cadena=$cadena.",'".$reg."'";
			}
		}
		$consulta="insert into $tabla values($cadena)";
		if(mysqli_query($this->cn,$consulta)){
			echo "Registro Agregado";
		}else{
			echo mysqli_error($this->cn);
		}
	}
}
?>