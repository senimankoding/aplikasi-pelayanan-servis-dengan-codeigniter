<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Pm extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		pm_logged_in();

		$this->load->model('M_Pm');

	}

	public function index()
	{
		
		$data['count_pm'] = $this->M_Pm->pm_count()->result();
		$this->load->view('pm/Vm_dasboard', $data);
	}

	/*================================================== MODULES user ===========================================================*/
    //READ
	public function read_pm()
	{
		$data['data_pm'] = $this->M_Pm->tb_pm()->result();
        $this->load->view('pm/Vm_pm-read', $data);
	}


    //UPDATE
	public function update_pm($pm_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_pm'] = $this->M_Pm->pm_id($pm_id)->row();
        $this->load->view('pm/Vm_pm-profile', $data);
	}
	public function update_pm_process()
	{
		$this->form_validation->set_rules('fullname','FULL NAME','required');
    	$this->form_validation->set_rules('username','USERNAME','required');  
    	$this->form_validation->set_rules('address','ADDRESS','required');
    	$this->form_validation->set_rules('tlpn','NO. TLPN','required');
    	// $this->form_validation->set_rules('email','EMAIL','required|trim|valid_email'); 
    	$this->form_validation->set_rules('password','PASSWORD|max_length[30]|callback_pword_check|xss_clean');   
    	// $this->form_validation->set_rules('password','PASSWORD','|min_length[5]|max_length[20]');  
    	// $this->form_validation->set_rules('passconf','CONFIRM PASSWORD','|matches[password]');  

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('pm/Vm_pm-profile');
		}
		else
		{
			$data['pm_nama'] 	= $this->input->post('fullname');
			$data['pm_user'] 	= $this->input->post('username');  
			$data['pm_pass'] 	= $this->input->post('password');
			// $data['pm_pass'] 	= md5($this->input->post('password'));
			$data['pm_almt'] 	= $this->input->post('address');
			// $data['member_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['pm_tlpn'] 	= $this->input->post('tlpn');
			$pm_id 	 			= $this->input->post('pm_id');
        	$this->M_Pm->update_pm($pm_id, $data);
        	echo "<script>alert('Data Sukses Diupdate');window.location.href='index','refresh';</script>";
					redirect('pm/C_Pm','refresh');
			// redirect(site_url('user/C_User'));
		}
	}



	/*================================================ MODULES data servis ==================================================*/
	
    //READ
	public function read_servis()
	{
		$data['data_servis'] = $this->M_Pm->tb_servis()->result();
        $this->load->view('pm/Vm_servis-read', $data);
	}

	//ZOOM SERVIS
	public function zoom_servis($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_servis'] = $this->M_Pm->nota($nota)->row();
        $this->load->view('pm/Vm_servis-zoom', $data);
	}


	
	/*================================================ MODULES penerimaan barang ===============================================*/
	public function penerimaan_barang()
	{
		$data=array(
            // 'title'=>'Tambah Penjualan Barang',
            // 'active_penjualan'=>'active',
            'nota'=>$this->M_Pm->getKodeOtomatis(),
            // 'data_barang'=>$this->model_app->getBarangJual(),
            // 'data_pelanggan'=>$this->model_app->getAllData('tbl_pelanggan'),
        );
		$data['data_servis'] = $this->M_Pm->tb_servis()->result();
        $this->load->view('pm/Vm_penerimaan_barang', $data);
	}

	public function penerimaan_servis()
	{
		$data=array(
            // 'title'=>'Tambah Penjualan Barang',
            // 'active_penjualan'=>'active',
            'nota'=>$this->M_Pm->getKodeOtomatis(),
            // 'data_barang'=>$this->model_app->getBarangJual(),
            // 'data_pelanggan'=>$this->model_app->getAllData('tbl_pelanggan'),
        );
		$data['data_servis'] = $this->M_Pm->tb_servis()->result();
        $this->load->view('pm/Vm_penerimaan_servis');
	}

	public function create_transaksi()
	{ 
		date_default_timezone_set('Asia/Jakarta');
		$this->form_validation->set_rules('nmbarang','required');
    	$this->form_validation->set_rules('nmpemilik','required');
    	$this->form_validation->set_rules('alamat','required');
    	$this->form_validation->set_rules('tlpn','required');
    	$this->form_validation->set_rules('kerusakan','required');
    	$this->form_validation->set_rules('kelengkapan','required'); 
    	$this->form_validation->set_rules('status_servis','required');
    	$this->form_validation->set_rules('status_expired','required');
    	$this->form_validation->set_rules('pm_id','required'); 

		if($this->form_validation->run() == FALSE)
		{  
		//   	$this->load->view('pm/Vm_nota_penerimaan');
		//   }
		// else
		//   {
			$data['nmbarang'] 	    = $this->input->post('nmbarang');  
			$data['nmpemilik']   	= $this->input->post('nmpemilik');
			$data['alamat'] 	    = $this->input->post('alamat');
			$data['tlpn']    	    = $this->input->post('tlpn');
			$data['kerusakan']  	= $this->input->post('kerusakan');
			$data['kelengkapan'] 	= $this->input->post('kelengkapan');
			$data['status_servis']  = $this->input->post('status_servis');
			$data['status_expired'] = $this->input->post('status_expired');
			$data['pm_id']      	= $this->input->post('pm_id');
			$data['tglditerima'] 	=date("Y-m-d ");
			$this->M_Pm->create_transaksi($data);
			//$this->load->view('pm/Vm_nota_penerimaan');
			echo "<script>
					alert('Data Penerimaan Barang Sukses Tersimpan');
					window.location.href='penerimaan_barang';
				  </script>";
					
		}
	}

	public function print_servis($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_servis'] = $this->M_Pm->nota($nota)->row();
        $this->load->view('pm/Vm_servis-print', $data);
	}

	 //DELETE
	public function delete_servis($nota)
	{
        $this->M_Pm->delete_servis($nota);
		redirect(site_url('pm/C_Pm/penerimaan_barang'));     
	}

	/*================================================ MODULES pengembalian barang ===============================================*/
	//read
	public function pengembalian_barang()
	{
		$data['data_servis'] = $this->M_Pm->tb_servis()->result();
        $this->load->view('pm/Vm_pengembalian_barang', $data);
	}

	//update
	public function update_pengembalian($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_servis'] = $this->M_Pm->nota($nota)->row();
        $this->load->view('pm/Vm_update_pengembalian', $data);
	}

	public function pengembalian_servis_proses()
	{
		date_default_timezone_set('Asia/Jakarta');
        
    	$this->form_validation->set_rules('penyerah','required');
    	$this->form_validation->set_rules('status_servis','required'); 
    	$this->form_validation->set_rules('status_expired','required');

		if($this->form_validation->run() == FALSE)
		 {  
			$data['status_servis']  = $this->input->post('status_servis');
			$data['penyerah']   	= $this->input->post('penyerah');               
			$data['status_expired'] = $this->input->post('status_expired');
			$data['tglambil']   	= date("Y-m-d ");
			$nota 	 	      	    = $this->input->post('nota');
			$this->M_Pm->update_servis($nota, $data);
			$this->load->view('pm/Vm_nota_pengembalian_barang');
			
		}
	}

	public function print_pengembalian($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_servis'] = $this->M_Pm->nota($nota)->row();
        $this->load->view('pm/Vm_servis_pengembalian-print', $data);
	}

	


        	
}
?>