<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_onoff extends CI_Model {

	public function getStatus()
	{
		return $this->db->get('onoff')->result_array();
	}

	public function update_status($status)
	{
		$onoff_id = $this->input->post('onoff_id');
		$this->db->where('onoff_id',$onoff_id);
		$this->db->update('onoff',$status);

		// $updateStatus = $this->db->query('UPDATE member SET mem_status ="'.$status.'" WHERE onoff_id ="'.$onoff_id.'" ');
		return true;
	}

}

/* End of file mdl_onoff.php */
/* Location: ./application/models/mdl_onoff.php */