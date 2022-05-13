<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Community Auth - Examples Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

class Administradores extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		// Force SSL
		//$this->force_ssl();

		// Form and URL helpers always loaded (just for convenience)
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model("Administradores_model");
	

		// Load resources
		$this->load->helper('auth');
		$this->load->model('examples/examples_model');
		$this->load->model('examples/validation_callables');
		$this->load->library('form_validation');
	}
	// -----------------------------------------------------------------------

	/**
	 * Demonstrate being redirected to login.
	 * If you are logged in and request this method,
	 * you'll see the message, otherwise you will be
	 * shown the login form. Once login is achieved,
	 * you will be redirected back to this method.
	 */
	public function index()
	{
		if ($this->require_min_level(1)) {
			$data  = array(
				'administradores' => $this->Administradores_model->getAdministradores(),
			);
			$this->load->view('layouts/header');
			$this->load->view('layouts/asside');
			$this->load->view('administradores/list', $data);
			$this->load->view('layouts/footer');
		} else {
			redirect(base_url());
		}
	}
	public function add()
	{

		if ($this->require_min_level(1)) {

			$data  = array(
				'niveles' => $this->Administradores_model->getMenuNiveles(),			
			);
			$this->load->view('layouts/header');
			$this->load->view('layouts/asside');
			$this->load->view('administradores/add', $data);
			$this->load->view('layouts/footer');
		} else {
			redirect(base_url());
		}
	}
	public function store()
	{
		if ($this->require_min_level(1)) {
			$nombre = $this->input->post("nombre");
			$username = $this->input->post("nick");
			$password = $this->input->post("password");
			$correo = $this->input->post("correo");
			$nivel = $this->input->post("nivel");			
			$data  = array(
				'nombre'   => $nombre,
				'username'   => $username,
				'passwd'     => $this->authentication->hash_passwd($password),
				'email'      => $correo,
				'auth_level' => $nivel, // 9 if you want to login @ examples/index.			
				'created_at' => date('Y-m-d H:i:s'),
				'user_id'   => $this->examples_model->get_unused_id(),
			);

			if ($this->Administradores_model->save($data)) {
				redirect(base_url() . "administradores");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "administradores/add");
			}
		} else {
			redirect(base_url());
		}
	}
	public function edit($id)
	{
		if ($this->require_min_level(1)) {
			$data  = array(
				'niveles' => $this->Administradores_model->getMenuNiveles(),
				'administrador' => $this->Administradores_model->getAdministrador($id),
			);
			$this->load->view('layouts/header');
			$this->load->view('layouts/asside');
			$this->load->view('administradores/edit', $data);
			$this->load->view('layouts/footer');
		} else {
			redirect(base_url());
		}
	}
	public function update($id)
	{
		if ($this->require_min_level(1)) {
			$nombre = $this->input->post("nombre");
			$username = $this->input->post("nick");
			$correo = $this->input->post("correo");
			$nivel = $this->input->post("nivel");		
			$data  = array(				
				'nombre'   => $nombre,
				'username'   => $username,
				'email'      => $correo,
				'auth_level' => $nivel, // 9 if you want to login @ examples/index.			
				'created_at' => date('Y-m-d H:i:s'),
			);
			if ($this->Administradores_model->update($id, $data)) {
				redirect(base_url() . "administradores");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "administradores/edit/" . $id);
			}
		} else {
			redirect(base_url());
		}
	}

	public function password($id)
	{
		$data  = array(
			'administrador' => $this->Administradores_model->getAdministrador($id),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/asside");
		$this->load->view("administradores/password", $data);
		$this->load->view("layouts/footer");
	}

	public function passwordupdate($id)
	{
		if ($this->require_min_level(6)) {
			//$password = password_hash($this->input->post("password_usuario"), PASSWORD_DEFAULT);
			//$passwd = $this->authentication->hash_passwd($this->input->post("password_usuario"));
			$password = $this->input->post("password_usuario");
			$passwd = $this->authentication->hash_passwd($password);

			$this->form_validation->set_rules('password_usuario', 'Password', 'required|min_length[5]|max_length[30]');
			$this->form_validation->set_rules('confirmacionPasword_usuario', 'Confirmation', 'required|matches[password_usuario]');
			if ($this->form_validation->run() == FALSE) {
				$this->password($id);
			} else {
				$data  = array(
					'passwd' => $passwd,
				);
				if ($this->Administradores_model->update($id, $data)) {
					redirect(base_url() . "administradores");
				} else {
					$this->session->set_flashdata("error", "No se pudo guardar la informacion");
					redirect(base_url() . "administradores/administradores/password/" . $id);
				}
				redirect(base_url());
			}
		} else {
			redirect(base_url());
		}
	}


	/**
	 * User recovery form
	 */
	public function recover()
	{


		/// If IP or posted email is on hold, display message
		if ($on_hold = $this->authentication->current_hold_status(TRUE)) {
			$view_data['disabled'] = 1;
		} else {
			// If the form post looks good
			if ($this->tokens->match && $this->input->post('email')) {
				if ($user_data = $this->examples_model->get_recovery_data($this->input->post('email'))) {
					// Check if user is banned
					if ($user_data->banned == '1') {
						// Log an error if banned
						$this->authentication->log_error($this->input->post('email', TRUE));

						// Show special message for banned user
						$view_data['banned'] = 1;
					} else {
						/**
						 * Use the authentication libraries salt generator for a random string
						 * that will be hashed and stored as the password recovery key.
						 * Method is called 4 times for a 88 character string, and then
						 * trimmed to 72 characters
						 */
						$recovery_code = substr($this->authentication->random_salt()
							. $this->authentication->random_salt()
							. $this->authentication->random_salt()
							. $this->authentication->random_salt(), 0, 72);

						// Update user record with recovery code and time
						$this->examples_model->update_user_raw_data(
							$user_data->user_id,
							[
								'passwd_recovery_code' => $this->authentication->hash_passwd($recovery_code),
								'passwd_recovery_date' => date('Y-m-d H:i:s')
							]
						);

						// Set the link protocol
						$link_protocol = USE_SSL ? 'https' : NULL;

						// Set URI of link
						$link_uri = 'examples/recovery_verification/' . $user_data->user_id . '/' . $recovery_code;

						$view_data['special_link'] = anchor(
							site_url($link_uri, $link_protocol),
							site_url($link_uri, $link_protocol),
							'target ="_blank"'
						);

						$view_data['confirmation'] = 1;
					}
				}

				// There was no match, log an error, and display a message
				else {
					// Log the error
					$this->authentication->log_error($this->input->post('email', TRUE));

					$view_data['no_match'] = 1;
				}
			}
		}

		// echo $this->load->view('examples/page_header', '', TRUE);

		// echo $this->load->view('examples/recover_form', (isset($view_data)) ? $view_data : '', TRUE);

		// echo $this->load->view('examples/page_footer', '', TRUE);


		echo $this->load->view('layouts/header', '', TRUE);
		echo $this->load->view('layouts/asside', '', TRUE);

		// echo $this->load->view('examples/recover_form', (isset($view_data)) ? $view_data : '', TRUE);

		echo $this->load->view('layouts/footer', '', TRUE);
	}
}

/* End of file Examples.php */
/* Location: /community_auth/controllers/Examples.php */
