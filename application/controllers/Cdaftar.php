<?php

/**
 * @property Mdaftar $daftar
 */

class Cdaftar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdaftar', 'daftar');
		$this->load->language('pesan', 'indonesia');
	}
	
	public function panel(): void
	{
		$this->load->view('halaman_daftar_dosen');
	}

	public function prosesDaftar(): void
	{
		$data = $this->daftar->getDataForm();
		$this->daftar->save($data);
		echo $this->lang->line('alert_berhasil_daftar');
		
		redirect('halaman/daftar', 'refresh');
	}
}
