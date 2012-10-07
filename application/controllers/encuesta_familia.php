<?php

class Encuesta_familia extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		//echo "chale: " . $_POST["comentarios"];
		//$arrDate = date_parse_from_format( "d/m/Y", $_POST["fechaEncuesta"] );
		
		$encuesta = array(
				"Id" => null,
				"Fecha" =>  $_POST["fechaEncuesta"],
				"IdEncuestador" => $_POST["encuestador"],
				"Observacion" => $_POST["comentarios"]
				);
		$salida = $this->db->insert("Encuesta", $encuesta);
		
		
		$data["encuesta"] = $encuesta;
		$data["salida"] = $salida;
		
		//log_message("info", "saludos");
		
		//log_message("info", "desde aqui");
		
		//$data['encuestadores'] = $this->db->get('Encuestador')->result();
		$this->load->view("encuesta_familias_view", $data);
	}
}


?>
