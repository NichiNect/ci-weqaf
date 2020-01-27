<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Produk_model extends CI_Model{
	public function getAllNazir()
	{
		return $this->db->get('data_nazir')->result_array();
	}
}