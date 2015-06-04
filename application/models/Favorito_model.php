<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Favorito_Model extends CI_Controller
	{
		function agregarFavorito($data){				
			return $this->db->insert('favoritos', $data);			
		}		
		
		function dejarDeSeguir($data){
			return $this->db->delete('favoritos', $data);
		}

		function esFavorito($data){
			$esFavorito = false;
			if ($this->db->get('favoritos', $data)) {
				$esFavorito = true;
			}

			return $esFavorito;
		}
	}