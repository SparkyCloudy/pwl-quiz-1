<?php

/**
 * @property Mmasuk $masuk
 * @property Msession $currentSession
 */

class Cmasuk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmasuk', 'masuk');
		$this->load->language('pesan', 'indonesia');
		$this->load->model('Msession', 'currentSession');
		
		$valid = $this->currentSession->isValidSession();
		if ($valid) {
			echo $this->lang->line('alert_telah_login');
			redirect('halaman/dashboard/dosen', 'refresh');
		}
	}
	
	public function panel(): void
	{
		$this->load->view('halaman_masuk_dosen');
	}
	
	public function prosesMasuk(): void
	{
		$dataQuery = $this->masuk->getDataForm();
		$valid = $this->masuk->isValid($dataQuery);
		
		if (!$valid) {
			$data['login_gagal'] = $this->lang->line('login_gagal');
			
			$this->load->view('halaman_masuk_dosen', $data);
			
			return;
		}
		
		redirect('halaman/dashboard/dosen', 'refresh');
	}
}
