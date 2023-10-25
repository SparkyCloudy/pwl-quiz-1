<?php

class Mdaftar extends CI_Model
{
	public function save(array $data): bool
	{
		return $this->db->insert('tbdosen', $data);
	}
	
	public function getDataForm(): array
	{
		$nik = $this->input->post('nik');
		$namaLengkap = $this->input->post('namaLengkap');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$jenisKelamin = $this->input->post('jenisKelamin');
		$tanggalLahir = $this->input->post('tanggalLahir');
		$nomerTelp = $this->input->post('nomerTelp');
		$alamat = $this->input->post('alamat');
		$statusDosen = $this->input->post('statusDosen');
		$pendidikanTerakhir = $this->input->post('pendidikanTerakhir');
		
		return array(
			'Nik' => $nik,
			'Nama_lengkap' => $namaLengkap,
			'Password' => $password,
			'Jenis_kelamin' => $jenisKelamin,
			'Tanggal_lahir' => $tanggalLahir,
			'Nomer_telp' => $nomerTelp,
			'Alamat' => $alamat,
			'Email' => $email,
			'Status_dosen' => $statusDosen,
			'Pendidikan_terakhir' => $pendidikanTerakhir,
		);
	}
}

