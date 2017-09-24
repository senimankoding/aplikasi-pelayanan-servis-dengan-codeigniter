<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Teknisi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		teknisi_logged_in();

		$this->load->model('M_Teknisi');
		// $this->load->helper('apifunction_helper');
	}

	public function index()
	{
		
		$data['count_teknisi'] = $this->M_Teknisi->teknisi_count()->result();
		$this->load->view('teknisi/Vt_dashboard', $data);
	}

	/*=============================================== MODULES teknisi =============================================================*/
 //    //READ
	// public function read_user()
	// {
	// 	$data['data_user'] = $this->M_User->tb_user()->result();
 //        $this->load->view('teknisi/Vt_teknisi-read', $data);
	// }


    //UPDATE
	public function update_teknisi($teknisi_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_teknisi'] = $this->M_Teknisi->teknisi_id($teknisi_id)->row();
        $this->load->view('teknisi/Vt_teknisi-profile', $data);
	}

	public function update_teknisi_process()
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
			$this->load->view('user/Vt_teknisi-profile');
		}
		else
		{
			$data['teknisi_nama'] 	= $this->input->post('fullname');
			$data['teknisi_user'] 	= $this->input->post('username');  
			$data['teknisi_pass'] 	= $this->input->post('password');
			// $data['pm_pass'] 	= md5($this->input->post('password'));
			$data['teknisi_almt'] 	= $this->input->post('address');
			// $data['member_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['teknisi_tlpn'] 	= $this->input->post('tlpn');
			$teknisi_id 	 			= $this->input->post('teknisi_id');
        	$this->M_Teknisi->update_teknisi($teknisi_id, $data);
        	echo "<script>alert('Data Sukses Diupdate');window.location.href='index','refresh';</script>";
					redirect('user/C_Teknisi','refresh');
			// redirect(site_url('user/C_User'));
		}
	}

	/*================================================ MODULES data servis ==================================================*/
	
    //READ
	public function read_servis()
	{
		$data['data_servis'] = $this->M_Teknisi->tb_servis()->result();
        $this->load->view('teknisi/Vt_servis-read', $data);
	}

	//ZOOM SERVIS
	public function zoom_servis($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_servis'] = $this->M_Teknisi->nota($nota)->row();
        $this->load->view('teknisi/Vt_servis-zoom', $data);
	}

	/*================================================ MODULES transaksi servis ===============================================*/
	//read
	public function pengembalian_barang()
	{
		$data['data_servis'] = $this->M_Teknisi->tb_servis()->result();
        $this->load->view('teknisi/Vt_kondisi_barang', $data);
	}

	//update
	public function update_pengembalian($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_servis'] = $this->M_Teknisi->nota($nota)->row();
        $this->load->view('teknisi/Vt_update_kondisi', $data);
	}

	public function pengembalian_servis_proses()
	{
		$this->load->helper('apifunction_helper');
		$this->form_validation->set_rules('tlpn','required');
		$this->form_validation->set_rules('kondisibrg','required');
        $this->form_validation->set_rules('biaya','required');
    	$this->form_validation->set_rules('teknisi_id','required');
    	$this->form_validation->set_rules('status_servis','required'); 

		if($this->form_validation->run() == FALSE)
		 {  
			$data['tlpn']       	= $this->input->post('tlpn');
			$data['kondisibrg']   	= $this->input->post('kondisibrg');
			$data['biaya']   	    = $this->input->post('biaya');
			$data['teknisi_id']   	= $this->input->post('teknisi_id');
			$data['status_servis']  = $this->input->post('status_servis');
			$nota 	 	      	    = $this->input->post('nota');

			// echo $data['tlpn'];
			// echo $nota;
			// echo $data['kondisibrg'];
			// echo $data['biaya'];
			// echo $data['teknisi_id'];

			sendsms($data['tlpn'], $nota, $data['kondisibrg'], $data['biaya']);
			$this->M_Teknisi->update_servis($nota, $data);
			echo "<script>
					alert('Data Sukses Terupdate dan Laporan Sms Terkirim');
					window.location.href='pengembalian_barang';
				  </script>";
			// redirect(site_url('teknisi/C_Teknisi/pengembalian_barang'));
		}
	}


	public function sms()
	{
		// $data['data_servis'] = $this->M_Teknisi->nota($nota)->row();
		$this->load->view('teknisi/Vt_sms');
	}


    function send(){
        if(isset($_POST['submit'])){
        	$this->load->helper('apifunction_helper');
            $tlpn            = $this->input->post('tlpn');
            $pesan           = $this->input->post('pesan');
           
           	echo $tlpn;
           	echo $pesan;
            sendsms($tlpn, $pesan);
            // redirect('teknisi/C_Teknisi');
        }else{
            redirect('teknisi/C_Teknisi');
        }
    }

	

}
?>