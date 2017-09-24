<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		admin_logged_in();

		$this->load->model('M_Admin');
		$this->load->helper('currency_format_helper');
	}

	public function index()
	{
		
		$data['count_admin']  = $this->M_Admin->admin_count()->result();
		$data['data_pm']	= $this->M_Admin->tb_pm()->result();
		$data['data_teknisi']	= $this->M_Admin->tb_teknisi()->result();
		$data['count_user'] = $this->M_Admin->user_count()->result();
		$this->load->view('admin/Va_dashboard', $data);
	}

	/*==================== MODULES ADMIN ===================================================================================*/
	//CREATE
	public function create_admin()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->M_Admin->tb_admin()->result();
		$data['data_user']	= $this->M_Admin->tb_user()->result();

		$this->load->view('admin/Va_admin-create', $data);
	}
	public function create_admin_process()
	{
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[admin.admin_user]',
					    		array(
					                'is_unique' => 'This %s already exists.'
					        	));  
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');  
    	$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]'); 

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_admin-create');
		}
		else
		{
			$data['admin_user'] = $this->input->post('username');
			// $data['admin_user'] = str_replace(' ', '', $this->input->post('username'));  
			$data['admin_pass'] = $this->input->post('password');
			$this->M_Admin->create_admin($data);
			redirect(site_url('admin/C_Admin/read_admin'));
		}
	}


    //READ
	public function read_admin()
	{
		$data['data_admin'] = $this->M_Admin->tb_admin()->result();
        $this->load->view('admin/Va_admin-read', $data);
	}


    //UPDATE
	public function update_admin($admin_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin'] = $this->M_Admin->admin_id($admin_id)->row();
        $this->load->view('admin/Va_admin-update', $data);
	}
	public function update_admin_process()
	{
    	$this->form_validation->set_rules('username','USERNAME','required|min_length[5]|max_length[20]');  
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');  
    	 $this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');  

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_admin-create');
		}
		else
		{
			$data['admin_user'] = str_replace(' ', '', $this->input->post('username'));  
			$data['admin_pass'] = $this->input->post('password');
			$admin_id 	 		= $this->input->post('admin_id');
        	$this->M_Admin->update_admin($admin_id, $data);
			redirect(site_url('admin/C_Admin/read_admin'));
		}
	}


    //DELETE
	public function delete_admin($admin_id)
	{
        $this->M_Admin->delete_admin($admin_id);
		redirect(site_url('admin/C_Admin/read_admin'));     
	}


	/*====================================================== MODULES pramuniaga ==================================================*/
	//CREATE
	public function create_pm()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->M_Admin->tb_admin()->result();
		$data['data_pm']	= $this->M_Admin->tb_pm()->result();
		$data['data_teknisi']	= $this->M_Admin->tb_teknisi()->result();
		$data['data_user']	= $this->M_Admin->tb_user()->result();

		$this->load->view('admin/Va_pm-create', $data);
	}
	public function create_pm_process()
	{
		$this->form_validation->set_rules('fullname','USER NAME','required');
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[pramuniaga.pm_user]',
					    		array(
					                'is_unique' => 'This %s already exists.'
					        	));  
    	$this->form_validation->set_rules('address','ALAMAT','required');
    	$this->form_validation->set_rules('tlpn','NO. TLPN','required');
    	// $this->form_validation->set_rules('email','EMAIL','required|trim|valid_email|is_unique[member.member_email]',
					//     		array(
					//     			'required' => 'Not valid EMAIL address, must be username@domain.com',
					//                 'is_unique' => 'This %s already exists.'
					//         	));  
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');  
    	$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');  

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_pm-create');
		}
		else
		{
			$data['pm_user'] 	= $this->input->post('username');  
			$data['pm_pass'] 	= $this->input->post('password');
			// $data['pm_pass'] 	= md5($this->input->post('password'));
			$data['pm_nama'] 	= $this->input->post('fullname');
			$data['pm_almt'] 	= $this->input->post('address');
			// $data['member_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['pm_tlpn'] 	= $this->input->post('tlpn');
			$this->M_Admin->create_pm($data);
			// redirect(site_url('admin/C_Admin/read_pm'));
			echo "<script>
					alert('Data Pramuniaga Sukses Tersimpan');
					window.location.href='read_pm';
				  </script>";
		}
	}


    //READ
	public function read_pm()
	{
		$data['data_pm'] = $this->M_Admin->tb_pm()->result();
        $this->load->view('admin/Va_pm-read', $data);
	}


    //UPDATE
	public function update_pm($pm_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_pm'] = $this->M_Admin->pm_id($pm_id)->row();
        $this->load->view('admin/Va_pm-update', $data);
	}
	public function update_pm_process()
	{
		$this->form_validation->set_rules('fullname','FULL NAME','required');
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]');  
    	$this->form_validation->set_rules('address','ADDRESS','required');
    	$this->form_validation->set_rules('tlpn','NO. TLPN','required');
    	// $this->form_validation->set_rules('email','EMAIL','required|trim|valid_email');  
    	$this->form_validation->set_rules('password|max_length[30]|callback_pword_check|xss_clean');  
    	// $this->form_validation->set_rules('passconf','CONFIRM PASSWORD','|matches[password]');  

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_pm-create');
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
        	$this->M_Admin->update_pm($pm_id, $data);
			// redirect(site_url('admin/C_Admin/read_pm'));
			echo "<script>
					alert('Edit Data Pramuniaga Sukses Tersimpan');
					window.location.href='read_pm';
				  </script>";
		}
	}


    //DELETE
	public function delete_pm($pm_id)
	{
        $this->M_Admin->delete_pm($pm_id);
		redirect(site_url('admin/C_Admin/read_pm'));     
	}






	/*====================================================== MODULES teknisi ==================================================*/
	//CREATE
	public function create_teknisi()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->M_Admin->tb_admin()->result();
		$data['data_pm']	= $this->M_Admin->tb_pm()->result();
		$data['data_teknisi']	= $this->M_Admin->tb_teknisi()->result();
		$data['data_user']	= $this->M_Admin->tb_user()->result();

		$this->load->view('admin/Va_teknisi-create', $data);
	}
	public function create_teknisi_process()
	{
		$this->form_validation->set_rules('fullname','USER NAME','required');
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[teknisi.teknisi_user]',
					    		array(
					                'is_unique' => 'This %s already exists.'
					        	));  
    	$this->form_validation->set_rules('address','ALAMAT','required');
    	$this->form_validation->set_rules('tlpn','NO. TLPN','required');
    	// $this->form_validation->set_rules('email','EMAIL','required|trim|valid_email|is_unique[member.member_email]',
					//     		array(
					//     			'required' => 'Not valid EMAIL address, must be username@domain.com',
					//                 'is_unique' => 'This %s already exists.'
					//         	));  
    	
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');  
    	$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');  

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_teknisi-create');
		}
		else
		{
			$data['teknisi_user'] 	= $this->input->post('username');  
			$data['teknisi_pass'] 	= $this->input->post('password');
			// $data['pm_pass'] 	= md5($this->input->post('password'));
			$data['teknisi_nama'] 	= $this->input->post('fullname');
			$data['teknisi_almt'] 	= $this->input->post('address');
			// $data['member_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['teknisi_tlpn'] 	= $this->input->post('tlpn');
			$this->M_Admin->create_teknisi($data);
			// redirect(site_url('admin/C_Admin/read_teknisi'));
			echo "<script>
					alert('Data Teknisi Sukses Tersimpan');
					window.location.href='read_teknisi';
				  </script>";
		}
	}


    //READ
	public function read_teknisi()
	{
		$data['data_teknisi'] = $this->M_Admin->tb_teknisi()->result();
        $this->load->view('admin/Va_teknisi-read', $data);
	}


    //UPDATE
	public function update_teknisi($teknisi_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_teknisi'] = $this->M_Admin->teknisi_id($teknisi_id)->row();
        $this->load->view('admin/Va_teknisi-update', $data);
	}
	public function update_teknisi_process()
	{
		$this->form_validation->set_rules('fullname','FULL NAME','required');
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]');  
    	$this->form_validation->set_rules('address','ADDRESS','required');
    	$this->form_validation->set_rules('tlpn','NO. TLPN','required');
    	// $this->form_validation->set_rules('email','EMAIL','required|trim|valid_email');
    	$this->form_validation->set_rules('password','PASSWORD|max_length[30]|callback_pword_check|xss_clean');   
    	// $this->form_validation->set_rules('password','PASSWORD','|min_length[5]|max_length[20]');  
    	// $this->form_validation->set_rules('passconf','CONFIRM PASSWORD','|matches[password]');  

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_teknisi-create');
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
        	$this->M_Admin->update_teknisi($teknisi_id, $data);
			// redirect(site_url('admin/C_Admin/read_teknisi'));
			echo "<script>
					alert('Edit Data Teknisi Sukses Tersimpan');
					window.location.href='read_teknisi';
				  </script>";
		}
	}


    //DELETE
	public function delete_teknisi($teknisi_id)
	{
        $this->M_Admin->delete_teknisi($teknisi_id);
		redirect(site_url('admin/C_Admin/read_teknisi'));     
	}




	/*====================================================== MODULES user ==================================================*/
	//CREATE
	public function create_user()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->M_Admin->tb_admin()->result();
		$data['data_pm']	= $this->M_Admin->tb_pm()->result();
		$data['data_teknisi']	= $this->M_Admin->tb_teknisi()->result();
		$data['data_user']	= $this->M_Admin->tb_user()->result();

		$this->load->view('admin/Va_user-create', $data);
	}
	public function create_user_process()
	{
		$this->form_validation->set_rules('fullname','USER NAME','required');
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[user.user_username]',
					    		array(
					                'is_unique' => 'This %s already exists.'
					        	));  
    	$this->form_validation->set_rules('address','ALAMAT','required');
    	$this->form_validation->set_rules('tlpn','NO. TLPN','required');
    	// $this->form_validation->set_rules('email','EMAIL','required|trim|valid_email|is_unique[member.member_email]',
					//     		array(
					//     			'required' => 'Not valid EMAIL address, must be username@domain.com',
					//                 'is_unique' => 'This %s already exists.'
					//         	));  
    	 
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');  
        $this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');  

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_user-create');
		}
		else
		{
			$data['user_username'] 	= $this->input->post('username');  
			$data['user_pass'] 	= $this->input->post('password');
			// $data['pm_pass'] 	= md5($this->input->post('password'));
			$data['user_nama'] 	= $this->input->post('fullname');
			$data['user_almt'] 	= $this->input->post('address');
			// $data['member_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['user_tlpn'] 	= $this->input->post('tlpn');
			$this->M_Admin->create_user($data);
			redirect(site_url('admin/C_Admin/read_user'));
		}
	}


    //READ
	public function read_user()
	{
		$data['data_user'] = $this->M_Admin->tb_user()->result();
        $this->load->view('admin/Va_user-read', $data);
	}


    //UPDATE
	public function update_user($user_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_user'] = $this->M_Admin->user_id($user_id)->row();
        $this->load->view('admin/Va_user-update', $data);
	}
	public function update_user_process()
	{
		$this->form_validation->set_rules('fullname','FULL NAME','required');
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]');  
    	$this->form_validation->set_rules('address','ADDRESS','required');
    	$this->form_validation->set_rules('tlpn','NO. TLPN','required');
    	// $this->form_validation->set_rules('email','EMAIL','required|trim|valid_email'); 
    	$this->form_validation->set_rules('password','PASSWORD|max_length[30]|callback_pword_check|xss_clean');  
    	// $this->form_validation->set_rules('password','PASSWORD','|min_length[5]|max_length[20]');  
    	// $this->form_validation->set_rules('passconf','CONFIRM PASSWORD','|matches[password]');  

		if($this->form_validation->run() == FALSE)
		{  
			$this->load->view('admin/Va_user-create');
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
        	$this->M_Admin->update_user($user_id, $data);
			redirect(site_url('admin/C_Admin/read_user'));
		}
	}


    //DELETE
	public function delete_user($user_id)
	{
        $this->M_Admin->delete_user($user_id);
		redirect(site_url('admin/C_Admin/read_user'));     
	}


	/*====================================================== MODULES komplain ==================================================*/
	
    //READ
	public function read_komplain()
	{
		$data['data_komplain'] = $this->M_Admin->tb_komplain()->result();
        $this->load->view('admin/Va_komplain-read', $data);
	}
	
    //DELETE
	public function delete_komplain($komplain_id)
	{
        $this->M_Admin->delete_komplain($komplain_id);
		redirect(site_url('admin/C_Admin/read_komplain'));     
	}


	/*================================================ MODULES data servis ==================================================*/
	
    //READ
	public function read_servis()
	{
		$data['data_servis'] = $this->M_Admin->tb_servis()->result();
        $this->load->view('admin/Va_servis-read', $data);
	}
	
    //DELETE
	public function delete_servis($nota)
	{
        $this->M_Admin->delete_servis($nota);
		redirect(site_url('admin/C_Admin/read_servis'));     
	}

	//ZOOM SERVIS
	public function zoom_servis($nota)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_servis'] = $this->M_Admin->nota($nota)->row();
        $this->load->view('admin/Va_servis-zoom', $data);
	}

	


	/*================================================ MODULES laporan ========================================================*/
	function periode(){
        $data=array(
            'title'=>'Laporan Transaksi Servis',
            'active_laporan'=>'active',
            // 'data_penjualan'=>$this->M_Admin->getAllDataLaporan(),
        );
        $this->session->unset_userdata('tgl_awal');
        $this->session->unset_userdata('tgl_akhir');

        $this->load->view('admin/Va_laporan-read');
    }

    function cari(){
        $tgl_awal= date("Y-m-d",strtotime($this->input->post('tgl_awal')));
        $tgl_akhir= date("Y-m-d",strtotime($this->input->post('tgl_akhir')));
        $sess_data=array(
            'tgl_awal'=>$tgl_awal,
            'tgl_akhir'=>$tgl_akhir
        );
        $this->session->set_userdata($sess_data);
        $data=array(
            'dt_result'=> $this->M_Admin->getLapPenjualan($tgl_awal,$tgl_akhir),
            'tgl_awal'=>date("d M Y",strtotime($this->session->userdata('tgl_awal'))),
            'tgl_akhir'=>date("d M Y",strtotime($this->session->userdata('tgl_akhir'))),
        );
        $this->load->view('admin/v_result_laporan',$data);
    }


    
}
?>