<?php

/**
 * @property Mprodi $prodi
 * @property Msession $msession
 */

class Cprodi extends CI_Controller
{
	private array $result;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mprodi', 'prodi');
		$this->load->model('Msession', 'msession');
	}
	
	function getView(): void
	{
		$dataTable['hasil'] = $this->prodi->getDataQuery();
		$dataForm['hasil'] = null;
		
		if (!empty($this->result['fill_form_id'])) {
			$dataForm['hasil'] = $this->result['fill_form_id'];
		}
		
		$data['konten'] = $this->load->view('halaman_prodi', $dataForm, true);
		$data['table'] = $this->load->view('halaman_table_prodi', $dataTable, true);
		$this->load->view('halaman_dashboard_dosen', $data);
	}
	
	function prosesSimpan(): void
	{
		$data = $this->prodi->getDataForm();
		$this->prodi->save($data);
		redirect('halaman/dashboard/dosen/data_prodi');
	}
	
	function prosesEdit($id): void
	{
		$data = $this->prodi->getDataForm();
		$this->prodi->edit($data, $id);
		redirect('halaman/dashboard/dosen/data_prodi');
	}
	
	function fillFormWith($id): void
	{
		$this->result['fill_form_id'] = $this->prodi->setDataForm($id);
		$this->getView();
	}
	
	function prosesDelete($id): void
	{
		$this->prodi->delete($id);
		$this->getView();
	}
}
