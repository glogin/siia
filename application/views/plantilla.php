<?php	
	(isset($variablesPlantilla)) ? $this->load->view('plantilla/cabecera',$variablesPlantilla) : $this->load->view('plantilla/cabecera');
	(isset($variablesPlantilla)) ? $this->load->view($contenido,$variablesPlantilla) : $this->load->view($contenido);	
	(isset($ayuda)) ? $this->load->view($ayuda) : '';	
	(isset($variablesPlantilla)) ? $this->load->view('plantilla/pie',$variablesPlantilla) : $this->load->view('plantilla/pie');
?>