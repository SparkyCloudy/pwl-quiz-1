<?php

/**
 * @property Msession $currentSession
 */

class Cdashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->language('pesan', 'indonesia');
		$this->load->model('Msession', 'currentSession');
		
		$valid = $this->currentSession->isValidSession();
		if (!$valid) {
			echo $this->lang->line('alert_harap_login');
			redirect('halaman/masuk', 'refresh');
		}
	}
	
	public function dashDosen(): void
	{
		$this->load->view('halaman_dashboard_dosen');
	}
	
	public function keluar(): void
	{
		$this->currentSession->removeCurrentSession();
		redirect('halaman/masuk', 'refresh');
	}
}
