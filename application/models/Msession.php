<?php

class Msession extends CI_Model
{
	public function isValidSession(): bool
	{
		return !empty($this->session->userdata('Username'));
	}
	
	public function removeCurrentSession(): void
	{
		$this->session->sess_destroy();
	}
}
