<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends MY_Controller
{
	/* private $permisos; */
	public function __construct()
	{
		parent::__construct();
		//  	if (!$this->session->userdata("login")) {
		// 	redirect(base_url()."auth");
		// } 
		// $this->load->model("gdsnet/Dashboard_model");
		// $this->load->model("gdsnet/clientes/Clientes_model");
		// $this->load->model("gdsnet/clientes/Regionales_model");
		// $this->load->model("gdsnet/clientes/Oficinas_model");
		// $this->load->model("gdsnet/clientes/Ubicaciones_model");
		// $this->load->model("gdsnet/clientes/Departamentos_model");
		// $this->load->model("gdsnet/equipo/Status_model");
		// $this->load->library('form_validation');
		// $this->load->library('encryption');
		if (!$this->require_min_level(2)) {
			redirect(base_url());
		}	

			// Form and URL helpers always loaded (just for convenience)
			$this->load->helper('url');
			$this->load->helper('form');
			
	
	
			// Load resources
			$this->load->helper('auth');
			$this->load->model('examples/examples_model');
			$this->load->model('examples/validation_callables');
			$this->load->library('form_validation');



	}
	public function index()
	{

		if ($this->require_min_level(1)) {
			$data=array();

			$this->load->view('layouts/header');
			$this->load->view('layouts/asside');
			$this->load->view("gdsnet/dashboard/view", $data);
			$this->load->view('layouts/footer');
		} else {
			redirect(base_url());
		}





		// $dataStatus  = array(
		// 	'equipoStatus' => $this->Status_model->getStatus(),
		// );
		//  $data  = array(
		//  	'usuarios' => $this->Dashboard_model->getUsuarios(),
		//  	'equipos' => $this->Dashboard_model->getEquipos(),		
		//  );
		// $data=array();
		//  $this->load->view("layouts/header");
		//  $this->load->view("layouts/asside");
		// $this->load->view("gdsnet/dashboard/view", $data);
		// $this->load->view("layouts/footer");
	}
		// public function cliente($id_cliente)
		// {
		// 	$dataStatus  = array(
		// 		'equipoStatus' => $this->Status_model->getStatus(),
		// 	);
		// 	$data  = array(
		// 		'cliente' => $this->Clientes_model->getCliente($id_cliente),
		// 		'usuarios' => $this->Dashboard_model->getUsuariosCliente($id_cliente),
		// 		'equipos' => $this->Dashboard_model->getEquiposCliente($id_cliente),
		// 	);
		// 	$this->load->view("layouts/header");
		// 	$this->load->view("layouts/aside", $dataStatus);
		// 	$this->load->view("gdsnet/dashboard/cliente", $data);
		// 	$this->load->view("layouts/footer");
		// }
		// public function regional($id_regional)
		// {
		// 	$dataStatus  = array(
		// 		'equipoStatus' => $this->Status_model->getStatus(),
		// 	);
		// 	$data  = array(
		// 		'regional' => $this->Regionales_model->getRegional($id_regional),
		// 		'usuarios' => $this->Dashboard_model->getUsuariosRegional($id_regional),
		// 		'equipos' => $this->Dashboard_model->getEquiposRegional($id_regional),
		// 	);
		// 	$this->load->view("layouts/header");
		// 	$this->load->view("layouts/aside", $dataStatus);
		// 	$this->load->view("gdsnet/dashboard/regional", $data);
		// 	$this->load->view("layouts/footer");
		// }
		// public function oficina($id_oficina)
		// {
		// 	$dataStatus  = array(
		// 		'equipoStatus' => $this->Status_model->getStatus(),
		// 	);
		// 	$data  = array(
		// 		'oficina' => $this->Oficinas_model->getOficina($id_oficina),
		// 		'usuarios' => $this->Dashboard_model->getUsuariosOficina($id_oficina),
		// 		'equipos' => $this->Dashboard_model->getEquiposOficina($id_oficina),
		// 	);
		// 	$this->load->view("layouts/header");
		// 	$this->load->view("layouts/aside", $dataStatus);
		// 	$this->load->view("gdsnet/dashboard/oficina", $data);
		// 	$this->load->view("layouts/footer");
		// }
		// public function ubicacion($id_ubicacion)
		// {
		// 	$dataStatus  = array(
		// 		'equipoStatus' => $this->Status_model->getStatus(),
		// 	);
		// 	$data  = array(
		// 		'ubicacion' => $this->Ubicaciones_model->getUbicacion($id_ubicacion),
		// 		'usuarios' => $this->Dashboard_model->getUsuariosUbicacion($id_ubicacion),
		// 		'equipos' => $this->Dashboard_model->getEquiposUbicacion($id_ubicacion),
		// 	);
		// 	$this->load->view("layouts/header");
		// 	$this->load->view("layouts/aside", $dataStatus);
		// 	$this->load->view("gdsnet/dashboard/ubicacion", $data);
		// 	$this->load->view("layouts/footer");
		// }
		// public function departamento($id_departamento)
		// {
		// 	$dataStatus  = array(
		// 		'equipoStatus' => $this->Status_model->getStatus(),
		// 	);
		// 	$data  = array(
		// 		'departamento' => $this->Departamentos_model->getDepartamento($id_departamento),
		// 		'usuarios' => $this->Dashboard_model->getUsuariosDepartamento($id_departamento),
		// 		'equipos' => $this->Dashboard_model->getEquiposDepartamento($id_departamento),
		// 	);
		// 	$this->load->view("layouts/header");
		// 	$this->load->view("layouts/aside", $dataStatus);
		// 	$this->load->view("gdsnet/dashboard/departamento", $data);
		// 	$this->load->view("layouts/footer");
		// }
}
