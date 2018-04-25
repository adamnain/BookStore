
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data['barang'] = $this->m_data->ambil_data('barang')->result();
		$this->load->view('v_list_dashboard.php', $data);
	}

	function tambah(){
		$data['kategori'] = $this->m_data->ambil_data('kategori')->result();
		$this->load->view('v_input_barang', $data);
	}

	function tambah_aksi(){
		//get Kategori
		$data['kategori'] = $this->m_data->ambil_data('kategori')->result();
		//membuat konfigurasi
		 $config = [
			 'upload_path' => './assets/images/',
			 'allowed_types' => 'gif|jpg|png',
			 'max_size' => 1000, 'max_width' => 1000,
			 'max_height' => 1000
		 ];
		 $this->load->library('upload', $config);
		 if (!$this->upload->do_upload()) //jika gagal upload
		 {
			 $error = array('error' => $this->upload->display_errors()); //tampilkan error
			 $this->load->view('dashboard/index', $error);
		 } else{
			 //jika berhasil upload
			 $file = $this->upload->data();
			 $data = [
				'nama' => set_value('nama'),
				'harga' => set_value('harga'),
				'stock' => set_value('stock'),
				'kategori' => set_value('kategori'),
				'foto' => $file['file_name']
			];
			 $this->m_data->input_data($data, 'barang'); //memasukan data ke database
			 redirect('dashboard/index');
		 }
	}

	function hapus($id){
		$where = array('id' => $id);
		//unlink("assets/".$foto);
		$this->m_data->hapus_data($where,'barang');
		redirect('dashboard/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'barang')->result();
		$this->load->view('v_update_barang',$data);
	}

	function update(){
		 	$id = $this->input->post('id');
			$config = [
				'upload_path' => './assets/images/',
				'allowed_types' => 'gif|jpg|png',
				'max_size' => 1000, 'max_width' => 1000,
				'max_height' => 1000
			];
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload()) //jika gagal upload
			{
				$error = array('error' => $this->upload->display_errors()); //tampilkan error
				$this->load->view('dashboard/index', $error);
			} else{
				//jika berhasil upload
				$file = $this->upload->data();
				$data = [
				 'nama' => set_value('nama'),
				 'harga' => set_value('harga'),
				 'stock' => set_value('stock'),
				 'kategori' => set_value('kategori'),
				 'foto' => $file['file_name']
			 ];
				$this->m_data->update_data($id, $data,'barang');
				redirect('dashboard/index');
			}
		}

}
