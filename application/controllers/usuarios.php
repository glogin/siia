<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Este controlador muestra la pagina principal.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_usuarios');
			$this->load->model('modelo_menu');
	}

	public function index()
	{
			$variablesPlantilla=array(
						'menu' => '',
						'contenido' => 'bienvenido',
						'menuNavegacion' => array('Acceso' => 'Acceso'),						
					);
				$this->load->view('plantilla',$variablesPlantilla);
	}

	public function acceso()
	{			 
	    $result=$this->modelo_usuarios->checaUsuario($this->input->post('cve_usuario'),$this->input->post('contrasena'));
	    if ($result)
	    {	             
	       	$menuPrincipal=$this->modelo_menu->obtieneMenu();
	       	$variablesPlantilla=array(
				'menu'=>$menuPrincipal,
				'contenido'=>'principal'						
			);
		    $this->load->view('plantilla',$variablesPlantilla);		           
	    }
	    else
	    {
	        $this->index();
	    }
	}	    
}

/* fin de archivo principal.php */
/* Ubicacion: ./application/controllers/principal.php */