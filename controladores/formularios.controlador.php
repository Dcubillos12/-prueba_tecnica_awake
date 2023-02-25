<?php 

class ControladorFormularios{
	/*==============================
	REGISTRO
	 ===============================*/

	 static public function ctrRegistro(){
	 	if (isset($_POST['registroNombre'])) {	 		
	 	
	 	$tabla = "registros";
		$datos = array(	"nombre" => $_POST['registroNombre'],
						"email" => $_POST['registroEmail'],
						"password" => $_POST['registroPassword']);
		$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
		return $respuesta;
		}
	 }

	 /*==============================
	SELECIONAR REGISTRO
	 ===============================*/

	 static public function ctrSeleccionarRegistros(){
	 	$tabla = "peliculas";

	 	$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla);
	 	return $respuesta;
	 }
 }


