<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

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
			//$this->load->model('modelo_clientes');
			$this->load->model('modelo_menu');
	}


	public function fisica()
	{			 
	    $menuPrincipal=$this->modelo_menu->obtieneMenu();
		$variablesPlantilla=array(
			'menu'=>$menuPrincipal,
			'contenido'=>'clientes/fisica'						
		);
		$this->load->view('plantilla',$variablesPlantilla);
	}	    
}

/* fin de archivo principal.php */
/* Ubicacion: ./application/controllers/principal.php */