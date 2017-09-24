<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_data extends CI_Model
{
	function tampil()
	{
		$this->db->select('*')
				 ->from('dataservis')
				 ->order_by('nota','desc');
		return $this->db->get();
	}
}