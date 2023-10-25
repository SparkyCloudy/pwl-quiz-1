<?php

/**
 * @property Msession $dosenSession
 */

class Mmasuk extends CI_Model
{
	public function isValid(array $data): bool
	{
		$result = $this->db->get_where('tbdosen', $data);
		
		if ($result->num_rows() > 0) {
			$this->load->model('Msession', 'dosenSession');
			$row = $result->row();
			
			$session = array(
				'Username' => $row->Nama_lengkap,
				'User_id' => $row->Nik
			);
			
			$this->session->set_userdata($session);
			
			return true;
		}
		
		return false;
	}
	
	public function getDataForm(): array
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		
		return array(
			'Nik' => $nik,
			'Password' => $password
		);
	}
}
