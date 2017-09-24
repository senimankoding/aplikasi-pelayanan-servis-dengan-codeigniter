<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	public function index()
	{
		$this->load->model('model_data');
		$data['data'] = $this->model_data->tampil();
		
		// ob_start();
		// $content = $this->load->view('admin/data',$data);
		// $content = ob_get_clean();		
		// $this->load->library('html2pdf');
		// try
		// {
		// 	$html2pdf = new HTML2PDF('L', 'F4', 'fr');
		// 	$html2pdf->pdf->SetDisplayMode('fullpage');
		// 	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		// 	$html2pdf->Output('print.pdf');
		// }
		// catch(HTML2PDF_exception $e) {
		// 	echo $e;
		// 	exit;
		// }
		$this->load->view('admin/data', $data);
		
	}
	
	public function cetak()
	{
		$this->load->model('model_data');
		$data['data'] = $this->model_data->tampil();
		$this->load->view('admin/data',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */