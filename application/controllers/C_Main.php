<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Main');
		$this->load->model('M_Admin');
	}

	public function index()
	{
		//Check session
		if($this->session->userdata('admin_user'))
		{
			$this->load->view('admin/Va_dashboard');
		}
		elseif($this->session->userdata('teknisi_user'))
		{
			$this->load->view('teknisi/Vt_dashboard');
		}
		elseif($this->session->userdata('pm_user'))
		{
			$this->load->view('pm/Vm_dasboard');
		}
		elseif($this->session->userdata('nota'))
		{
			$this->load->view('user/Vm_dashboard');
		}
		else
		{
			$this->load->view('V_Login');
		}
	}

	public function login()
	{
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');
		// $password  = md5($this->input->post('password'));

		$cek_admin = $this->M_Main->get_admin($username,$password);
		$cek_pm = $this->M_Main->get_pm($username,$password);
		$cek_user = $this->M_Main->get_user($username,$password);
		$cek_teknisi = $this->M_Main->get_teknisi($username,$password);

		if($cek_admin->num_rows() == 1)
		{
			foreach($cek_admin->result_array() as $row)
			{
				$pass_auth = $row['admin_pass'];

				if($password == $pass_auth)
				{
					$row_data = array(
						'admin_id' 	 => $row['admin_id'],
						'admin_user' => $row['admin_user']
					);
					$this->session->set_userdata($row_data);
					redirect('admin/C_Admin');
				}
				else
				{
					echo "<script>alert('Login gagal, pastikan username dan password anda benar');window.location.href='index','refresh';</script>";
					redirect('V_Login','refresh');
					//$data['error']='Wrong Password!';
					// $this->load->view('V_Login');
				}

			}
		}
		elseif($cek_user->num_rows() == 1)
		{
			foreach($cek_user->result_array() as $row)
			{
				$pass_auth = $row['nota'];

				if($password == $pass_auth)
				{
					$row_data = array(
						'nota'   => $row['nota'],
						'nmpemilik' => $row['nmpemilik']
					);
					$this->session->set_userdata($row_data);
					redirect('user/C_User');
				}
				else
				{
					echo "<script>alert('Login gagal, pastikan username dan password anda benar');window.location.href='index','refresh';</script>";
					redirect('V_Login','refresh');
					//$data['error']='Wrong Password!';
					// $this->load->view('V_Login');
				}

			}
		}
		elseif($cek_pm->num_rows() == 1)
		{
			foreach($cek_pm->result_array() as $row)
			{
				$pass_auth = $row['pm_pass'];

				if($password == $pass_auth)
				{
					$row_data = array(
						'pm_id'   => $row['pm_id'],
						'pm_user' => $row['pm_user']
					);
					$this->session->set_userdata($row_data);
					redirect('pm/C_Pm');
				}
				else
				{
					echo "<script>alert('Login gagal, pastikan username dan password anda benar');window.location.href='index','refresh';</script>";
					redirect('V_Login','refresh');
					//$data['error']='Wrong Password!';
					// $this->load->view('V_Login');
				}

			}
		}
		elseif($cek_teknisi->num_rows() == 1)
		{
			foreach($cek_teknisi->result_array() as $row)
			{
				$pass_auth = $row['teknisi_pass'];

				if($password == $pass_auth)
				{
					$row_data = array(
						'teknisi_id'   => $row['teknisi_id'],
						'teknisi_user' => $row['teknisi_user']
					);
					$this->session->set_userdata($row_data);
					redirect('teknisi/C_Teknisi');
				}
				else
				{
					echo "<script>alert('Login gagal, pastikan username dan password anda benar');window.location.href='index','refresh';</script>";
					redirect('V_Login','refresh');
					//$data['error']='Wrong Password!';
					// $this->load->view('V_Login');
				}

			}
		}
		else
		{
			echo "<script>alert('Login gagal, pastikan username dan password anda benar');window.location.href='index','refresh';</script>";
					redirect('V_Login','refresh');
					//$data['error']='Wrong Password!';
					// $this->load->view('V_Login');
		}
	
	}

    public function register()
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
			$this->load->view('V_Register');
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
			$pesan['success']  = "Registrasion Success!";  
			$this->load->view('V_Login2',$pesan);
		}
	}  

    public function logout(){  
        $this->session->unset_userdata('admin_id');  
        $this->session->unset_userdata('admin_user');  
        $this->session->unset_userdata('user_id');  
        $this->session->unset_userdata('nota'); 
        $this->session->unset_userdata('pm_id');  
        $this->session->unset_userdata('pm_user'); 
        $this->session->unset_userdata('teknisi_id');  
        $this->session->unset_userdata('teknisi_user'); 
        redirect(site_url(''));  
    }  

}

?>