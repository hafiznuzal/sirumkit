<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."/third_party/PHPExcel.php";

class Admin extends CI_Controller
{
	public $sesi;
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

        $this->load->library('session');
		
		if(!$this->session->userdata('logged_in')){
			redirect(site_url()."login");
		}
		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$this->sesi['tahun']=getdate()['year'];
			$this->sesi['bulan']=getdate()['mon'];
			$this->sesi['hari']=getdate()['weekday'];
			$this->sesi['tanggal']=getdate()['mday'];
			
			// $this->sesi['bulan']=getdate()['month'];
			// $this->sesi['hari']=getdate()['weekday'];
			$this->sesi['hak'] = $session_data['hak'];
			
		}
		else{
			$this->sesi['tahun']=getdate()['year'];
			$this->sesi['bulan']=getdate()['mon'];


		}

		
	}
	public function create_dummy($tahun,$triwulan,$jumlah)
	{
		$this->load->model('type_model');
		$this->type_model->create_dummy($tahun,$triwulan,$jumlah);
		echo "string";
	}
	public function index()
	{
		if($this->session->userdata('logged_in')){
			

			// echo $data['jumlah_pengembang'][0]->jumlah_pengembang;
			$this->load->view('template/admin_header',$this->sesi);
			$this->load->view('admin/admin_home', $data);
			$this->load->view('template/admin_footer');
		}
		else redirect(site_url()."admin/login");
	}
	
	
	public function logout() {
     	//remove all session data
     	$this->session->unset_userdata('logged_in');
     	$this->session->sess_destroy();
     	redirect(site_url()."login");
     }
	
	public function pasien()
	{
		if($this->session->userdata('logged_in')){
			// $data['daftar_perumahan'] = $this->perumahan_model->get_all();
			// $data['daftar_lokasi'] = $this->perumahan_model->get_all_dummy();
			// $data['daftar_pengembang'] = $this->perumahan_model->get_pengembang_dummy();
			$this->load->view('template/admin_header',$this->sesi);
			$this->load->view('form-transaksi');
			$this->load->view('template/admin_footer');
		}
		else redirect(site_url()."admin/login");
	}

	
	public function report_lahan()
	{
		$this->load->model('proyek_model');
        $data['lokasi'] = $this->proyek_model->get_data_lokasi_all();
        $this->load->view('/admin/admin_report_lahan',$data);
	}

	
}