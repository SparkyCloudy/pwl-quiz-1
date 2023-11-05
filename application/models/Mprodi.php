<?php

class Mprodi extends CI_Model
{
	function save($data): void
	{
		$this->db->insert('tbprodi', $data);
	}
	
	function delete($id): void
	{
		$this->db->where('Kode_prodi', $id);
		$this->db->delete('tbprodi');
	}
	
	function edit($data, $id): void
	{
		$this->db->where('Kode_prodi', $id);
		$this->db->update('tbprodi', $data);
	}
	
	function getDataForm($index = null): array
	{
		$data = $this->input->post($index, true);
		
		if (!is_null($index)) {
			return $data[$index];
		}
		
		return $data;
	}
	
	function setDataForm($id): object
	{
		$this->db->where('Kode_prodi', $id);
		
		return $this->db->get('tbprodi')->row();
	}
	
	function getDataQuery(): array
	{
		return $this->db->get('tbprodi')->result();
	}
}
