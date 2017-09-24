<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		nota_logged_in();

		$this->load->model('M_User');
	}

	public function index()
	{
		
		$data['count_user'] = $this->M_User->user_count()->result();
		$this->load->view('user/Vm_dashboard', $data);
	}

	/*=============================================== MODULES user =============================================================*/
 //    //READ
	// public function read_user()
	// {
	// 	$data['data_user'] = $this->M_User->tb_user()->result();
 //        $this->load->view('member/Vm_member-read', $data);
	// }


    //UPDATE
	public function update_user($user_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_user'] = $this->M_User->user_id($user_id)->row();
        $this->load->view('user/Vm_user-profile', $data);
	}
	public function update_user_process()
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
			$this->load->view('user/Vm_user-profile');
		}
		else
		{
			$data['user_nama'] 	= $this->input->post('fullname');
			$data['user_username'] 	= $this->input->post('username');  
			$data['user_pass'] 	= $this->input->post('password');
			// $data['pm_pass'] 	= md5($this->input->post('password'));
			$data['user_almt'] 	= $this->input->post('address');
			// $data['member_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['user_tlpn'] 	= $this->input->post('tlpn');
			$user_id 	 			= $this->input->post('user_id');
        	$this->M_User->update_user($user_id, $data);
        	echo "<script>alert('Data Sukses Diupdate');window.location.href='index','refresh';</script>";
					redirect('user/C_User','refresh');
			// redirect(site_url('user/C_User'));
		}
	}


	public function nota_user($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_user'] = $this->M_User->nota($nota)->row();
        $this->load->view('user/Vm_user-nota', $data);
	}



	/*==================== MODULES cekservis ===================================================================================*/

	public function cekservis()
	{
		$this->load->library('pagination');//1
		$this->load->database();//memanggil pengaturan database dan mengaktifkannya
        $this->load->model('M_User');//memanggil model m_data_produk
        
		$pencarian = $this->input->post('pencarian');
		$offset = $this->uri->segment(2, 0);
		$total = 1;

		

		$result = $this->M_User->list_data($pencarian,$offset,$total);
		$config['uri_segment'] = 2;
		$config['base_url'] = site_url('C_User');
		$config['per_page'] = $total;
		$config['total_rows'] = $result['total_rows'];
		$this->pagination->initialize($config); 
		$data['pagination'] =  $this->pagination->create_links();
		$data['C_User'] = $result['data'];
		
		
		$this->load->view('user/Vm_user-read',$data);
		
		// $this->load->view('bawah');
	}

	/*==================== MODULES cekservis ===================================================================================*/

	public function komplain($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_user']          = $this->M_User->nota($nota)->row();
		$data['data_komplain']		= $this->M_User->tb_komplain()->result();

		$this->load->view('user/Va_komplain-create', $data);
	}



	// public function komplain1($user_id)
	// {
	// 	//GET REQUIRED DATA FROM DB
	// 	$data['data_user'] = $this->M_User->user_id($user_id)->row();
	// 	$data['data_komplain']		= $this->M_User->tb_komplain()->result();

	// 	$this->load->view('user/Va_komplain-create', $data);
	// }

	public function create_komplain_process()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->form_validation->set_rules('nota_lama','NOTA LAMA','required');
    	$this->form_validation->set_rules('namabrg','NAMA BARANG','required');
    	$this->form_validation->set_rules('no_tlpn','NOMOR TLPN','required');
    	$this->form_validation->set_rules('nama_pemilik','NAMA PEMILIK','required');
    	$this->form_validation->set_rules('teknisi_id','TEKNISI','required');
    	$this->form_validation->set_rules('isikomplain','KOMPLAIN','required');

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_pm-create');
		}
		else
		{
			$data['nota_lama']   	= $this->input->post('nota_lama');  
			$data['namabrg'] 	    = $this->input->post('namabrg');
			$data['nama_pemilik'] 	= $this->input->post('nama_pemilik');
			$data['user_id'] 	    = $this->input->post('user_id');
			$data['teknisi_id'] 	= $this->input->post('teknisi_id');
			$data['no_tlpn']     	= $this->input->post('no_tlpn');
			$data['tgl_komplain'] 	= date("Y-m-d ");
			$data['isikomplain'] 	= $this->input->post('isikomplain');
			$this->M_User->create_komplain($data);
			echo "<script>alert('Komplain Servis Sukses Terkirim dan Akan Diproses Jika Tidak Melebihi 5 Hari Setelah Barang Diambil');window.location.href='index','refresh';</script>";
					redirect('user/C_User/komplain','refresh');
			// redirect(site_url('user/C_User/komplain'));
		}
	}


}
?>