<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pm extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	

	//SELECT * FROM TABLES
	function tb_pm()
	{
		$this->db->select('*')
				 ->from('pramuniaga')
				 ->order_by('pm_nama','asc');
		return $this->db->get();
	}

	function pm_count()
	{
		$this->db->select('COUNT(pm_id) AS pm_count')
				 ->from('pramuniaga');
		return $this->db->get();
	}

	function pm_id($pm_id)
	{
		$this->db->select('*')
				 ->from('pramuniaga')
				 ->where('pm_id', $pm_id);
		return $this->db->get();
	}

	//CREATE, UPDATE, DELETE
	function create_pm($data)
	{
		$this->db->insert('pramuniaga', $data);
	}	  	   
	    
	function update_pm($pm_id, $data)
	{
		$this->db->where(array('pm_id' => $pm_id, 'pm_id !=' => 1));
		$this->db->update('pramuniaga', $data);  
	}

	// function update_pm_pass($pm_id, $data)
	// {
	// 	$this->db->where(array('pm_id' => $pm_id, 'pm_id !=' => 1));
	// 	$this->db->update('pramuniaga', $data);  
	// }

	function delete_pm($pm_id)
	{ 
		$this->db->delete('pramuniaga', array(
							'pm_id' => $pm_id, 
							'pm_id !=' => 1
						));    
	}


	// Used for paginationsample
	function paging_pm($limit=array())
	{ 
		$this->db->select('*');
		$this->db->from('pramuniaga');
		$this->db->order_by('pm_user', 'asc');
		        
		if ($limit != NULL)
		$this->db->limit($limit['perpage'], $limit['offset']);
		           
		return $this->db->get();
	}

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


	/*=============================================== MODULES penerimaan barang ================================================*/
	function create_transaksi($data)
	{
		$this->db->insert('dataservis', $data);
	}	

	/*=============================================== MODULES penyerahan barang ================================================*/

	function update_servis($nota, $data)
	{
		$this->db->where(array('nota' => $nota, 'nota !=' => 1));
		$this->db->update('dataservis', $data);  
	}

	/*=============================================== MODULES Kode Otomatis ================================================*/
	 public function getKodeOtomatis()
    {
        $q = $this->db->query("select MAX(RIGHT(nota,3)) as kd_max from dataservis");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%01s", $tmp);
            }
        }
        else
        {
            $kd = "1";
        }
        return "".$kd;
    }
}
?>
    