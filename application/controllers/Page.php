<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$data['antrian'] =  $this->Model_page->total_proses('tbl_antri')->num_rows();
		$data['selesai'] =  $this->Model_page->total_diambil('tbl_antri')->num_rows();
		$data['title'] = 'Dashboard';
		$this->load->view('header', $data);
    $this->load->view('dashboard');
    $this->load->view('footer');
	} 

	public function antrian(){
		$data['hasil']= $this->Model_page->proses('tbl_antri')->result();
		$data['title'] = 'Antrian';
		$this->load->view('header', $data);
    $this->load->view('antri');
    $this->load->view('footer');
	}

	public function selesai(){
		$data['hasil']= $this->Model_page->diambil('tbl_antri')->result();
		$data['title'] = 'Antrian Selesai';
		$this->load->view('header', $data);
    $this->load->view('selesai');
    $this->load->view('footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Barang';
		$this->load->view('header', $data);
    $this->load->view('tambah');
    $this->load->view('footer');
	}

	public function proses()
	{
		$nama = $_POST['nama'];
		$kode = $_POST['kode'];
		$hp = $_POST['hp'];
		$alamat = $_POST['alamat'];
		$status = 1;
		$data = array(
			'kode'=>$kode,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'hp'=>$hp,
			'status'=>$status
			);
		$this->Model_page->tambah('tbl_antri',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon mt-4">
		<div class="alert-icon"><i class="mdi mdi-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success !!</div>
			Data antrian berhasil diinput
		</div>
		</div>'
		);
		redirect(base_url('page/antrian'));
	}

	public function panggil($id)
	{
		$status = 2;
		$tgl = date("Y-m-d h:i:sa");

		$data = array(
			'status'=>$status,
			'tgl'=>$tgl
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Model_page->ambil($where,$data,'tbl_antri');
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon mt-4">
		<div class="alert-icon"><i class="mdi mdi-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success !!</div>
			antrian selesai
		</div>
		</div>'
		);
		redirect(base_url('page/selesai'));
	}

	function cancel($id)
	{
		$where = array('id'=>$id);
		$this->Model_page->cancel('tbl_antri',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon mt-4">
		<div class="alert-icon"><i class="mdi mdi-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success !!</div>
			Antrian berhasil dicancel
		</div>
		</div>'
		);
		redirect(base_url('page/antrian'));
	}

	public function print($id){
		$where = array('id' => $id);
		$data['data'] = $this->Model_page->detail($where,'tbl_antri')->row();
		$this->load->view('print', $data);
	}
}