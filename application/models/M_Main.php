<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Main extends CI_Model
{
	public function get_admin($username,$password)
	{
		$query = $this->db->query("SELECT * FROM admin WHERE admin_user='$username' AND admin_pass='$password' ");
		return $query;
	}

	public function get_teknisi($username,$password)
	{
		$query = $this->db->query("SELECT * FROM teknisi WHERE teknisi_user='$username' AND teknisi_pass='$password' ");
		return $query;
	}

	public function get_pm($username,$password)
	{
		$query = $this->db->query("SELECT * FROM pramuniaga WHERE pm_user='$username' AND pm_pass='$password' ");
		return $query;
	}
	
	public function get_user($username,$password)
	{
		$query = $this->db->query("SELECT * FROM dataservis WHERE nmpemilik='$username' AND nota='$password' ");
		return $query;
	}
}

?>