<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Teknisi extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	

	//SELECT * FROM TABLES
	function tb_teknisi()
	{
		$this->db->select('*')
				 ->from('teknisi')
				 ->order_by('teknisi_user','asc');
		return $this->db->get();
	}

	function teknisi_count()
	{
		$this->db->select('COUNT(teknisi_id) AS teknisi_count')
				 ->from('teknisi');
		return $this->db->get();
	}

	function teknisi_id($teknisi_id)
	{
		$this->db->select('*')
				 ->from('teknisi')
				 ->where('teknisi_id', $teknisi_id);
		return $this->db->get();
	}


	//UPDATE
	function update_teknisi($teknisi_id, $data)
	{
		$this->db->where(array('teknisi_id' => $teknisi_id, 'teknisi_id !=' => 1));
		$this->db->update('teknisi', $data);  
	}

	// // function yang digunakan oleh paginationsample
	// function select_all_paging($limit=array())
	// { 
	// 	$this->db->select('*');
	// 	$this->db->from('teknisi');
	// 	$this->db->order_by('teknisi_user', 'asc');
		        
	// 	if ($limit != NULL)
	// 	$this->db->limit($limit['perpage'], $limit['offset']);
		           
	// 	return $this->db->get();
	// }

	/*================================================== MODULES data servis ================================================*/

	//SELECT * FROM TABLES
	function tb_servis()
	{
		$this->db->select('*')
				 ->from('dataservis')
				 ->order_by('nota','desc');
		return $this->db->get();
	}

	function servis_count()
	{
		$this->db->select('COUNT(nota) AS komplain_count')
				 ->from('dataservis');
		return $this->db->get();
	}

	function nota($nota)
	{
		$this->db->select('*')
				 ->from('dataservis')
				 ->where('nota', $nota);
		return $this->db->get();
	}


	function delete_servis($nota)
	{ 
		$this->db->delete('dataservis', array(
							'nota' => $nota, 
							'nota !=' => 1
						));    
	}

	function update_servis($nota, $data)
	{
		$this->db->where(array('nota' => $nota, 'nota !=' => 1));
		$this->db->update('dataservis', $data);  
	}

	// Used for paginationsample
	function paging_servis($limit=array())
	{ 
		$this->db->select('*');
		$this->db->from('dataservis');
		// $this->db->order_by('user_username', 'asc');
		        
		if ($limit != NULL)
		$this->db->limit($limit['perpage'], $limit['offset']);
		           
		return $this->db->get();
	}
}
?>
    