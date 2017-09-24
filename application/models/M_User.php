<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	

	//SELECT * FROM TABLES
	function tb_komplain()
	{
		$this->db->select('*')
				 ->from('komplain')
				 ->order_by('komplain_id','DESC');
		return $this->db->get();

	// 	$this->db->order_by('nama_pemilik', 'desc');
 //        $query = $this->db->get('komplain');
 //        return $query->result();
	}

	function create_komplain($data)
	{
		$this->db->insert('komplain', $data);
	}	 

	function user_count()
	{
		$this->db->select('COUNT(nota) AS user_count')
				 ->from('dataservis');
		return $this->db->get();
	}

	function user_id($user_id)
	{
		$this->db->select('*')
				 ->from('user')
				 ->where('user_id', $user_id);
		return $this->db->get();
	}

	function nota($nota)
	{
		$this->db->select('*')
				 ->from('dataservis')
				 ->where('md5(nota)', $nota);
		return $this->db->get();
	}


	//UPDATE
	function update_user($user_id, $data)
	{
		$this->db->where(array('user_id' => $user_id, 'user_id !=' => 1));
		$this->db->update('user', $data);  
	}

	// function yang digunakan oleh paginationsample
	function select_all_paging($limit=array())
	{ 
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('user_username', 'asc');
		        
		if ($limit != NULL)
		$this->db->limit($limit['perpage'], $limit['offset']);
		           
		return $this->db->get();
	}


	/*==================== MODULES cekservis ===================================================================================*/

	 function list_data($pencarian,$offset,$total)
	 {
        if ($pencarian)
        {
			$this->db->like('nota',$pencarian);
		}     
		$result['total_rows'] = $this->db->count_all_results('dataservis');
		
		if ($pencarian)
		{
			$this->db->like('nota',$pencarian);
		}
		$query = $this->db->get('dataservis',$total,$offset);
        
		$result['data'] = $query->result(); 
		return $result;
    }

}
?>
    