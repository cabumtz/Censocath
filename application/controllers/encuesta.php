<?php

class Encuesta extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["themeName"] = 
		$data["encuestadores"] = $this->db->get("Encuestador")->result();
		
		$this->template->write_view("datosEncuesta", "encuesta/datosencuesta_view", $data, TRUE);
		$this->template->write_view("datosFamilias", "encuesta/datosfamilias_view", $data, TRUE);
		$this->template->write_view("datosIntegrantes", "encuesta/datosintegrantes_view", $data, TRUE);
		
		$this->template->render();
	}
}

?>
