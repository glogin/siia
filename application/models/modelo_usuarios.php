<?php
class Modelo_usuarios extends CI_model{				   		
	public function checaUsuario($cve_usuario,$contrasena){		
	   	$sql='select id_usuario,nombre_contacto, cve_ingreso, nip,id_perfil from _seg_usuarios';
	   	$sql.=' where cve_ingreso="'.$cve_usuario.'" and contrasena=MD5("'.$contrasena.'")';	      
	   	$consulta=$this->db->query($sql);	   
	   	if($consulta -> num_rows() == 1) {	   		
	   		$arregloSesion = array(
	   			'id_usuario' => '',
                'nom_usuario' => '',
                'cve_ingreso' => '',
                'nip' => '',
                'id_perfil' => ''                
            );
            foreach ($consulta->result() as $datosUsuario) {
            	$arregloSesion['nombre_contacto']=$datosUsuario->nombre_contacto;
            	$arregloSesion['cve_ingreso']=$datosUsuario->cve_ingreso;
            	$arregloSesion['id_perfil']=$datosUsuario->id_perfil;
            	$arregloSesion['nip']=$datosUsuario->nip;            	
            	$arregloSesion['id_usuario']=$datosUsuario->id_usuario;            	
            }
                       
			$this->session->set_userdata($arregloSesion);
	   		return true;
	   	}
	   	else{
	    	return false;
	   	}	
	}		
}
?>