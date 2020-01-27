<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin Model
 */
class Admin_model extends CI_Model{
	public function getAllData($table)
	{
		return $this->db->get($table)->result_array();
	}

	public function deleteData($table, $id)
	{
		$this->db->delete($table, ['id' => $id]);
		return $this->db->affected_rows();
	}

	public function getAllDataByStatus($table)
	{
		return $this->db->get_where($table, ['status_confirm' => 0])->result_array();
	}

	public function getAllDataByStatus1($table)
	{
		return $this->db->get_where($table, ['status_confirm' => 1])->result_array();
	}

	public function getDataById($table, $id)
	{
		return $this->db->get_where($table, ['id' => $id])->row_array();
	}

	public function confirmInv($table, $id)
	{
		$this->db->set('status_confirm', 2);
		$this->db->where('id', $id);
		return $this->db->update($table);
	}

	public function rejectInv($table, $id, $foto)
	{
		unlink(FCPATH . 'resources/data/data-investor-pribadi/fotoktp/' . $foto);
		$this->db->delete($table, ['id' => $id]);
		return $this->db->affected_rows();
	}

	public function downloadFile($dir, $type, $id)
	{
		force_download($dir, $id);
	}




}