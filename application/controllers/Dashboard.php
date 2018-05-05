
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login_admin"){
			redirect('login/admin');

		}
	}

	function index(){
		$data['barang'] = $this->m_data->ambil_data('barang')->result();
		$data['content'] = ('v_list_dashboard.php');
		$this->load->view('sidebar.php', $data);
	}

	function tambah(){
		$data['kategori'] = $this->m_data->ambil_data('kategori')->result();
		$data['content'] = ('v_input_barang.php');
		$this->load->view('sidebar.php', $data);

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
		$data['content'] = ('v_update_barang');
		$data['kategori'] = $this->m_data->ambil_data('kategori')->result();
		$data['barang'] = $this->m_data->edit_data($where,'barang')->result();
		$this->load->view('sidebar.php', $data);

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

		//kategori buku
		function kategori(){
			$data['kategori'] = $this->m_data->ambil_data('kategori')->result();
			$data['content'] = ('kategori/v_list_kategori.php');
			$this->load->view('sidebar.php', $data);
		}

		function tambah_kategori(){
			$data['content'] = ('kategori/v_input_kategori.php');
			$this->load->view('sidebar.php', $data);
		}

		function tambah_kategori_aksi(){
			$nama_kategori = $this->input->post('nama_kategori');

			$data = array(
				'nama_kategori' => $nama_kategori
				);
			$this->m_data->input_data($data,'kategori');
			redirect('dashboard/kategori');
		}

		function edit_kategori($id){
			$where = array('id' => $id);
			$data['kategori'] = $this->m_data->edit_data($where,'kategori')->result();
			$data['content'] = ('kategori/v_update_kategori.php');
			$this->load->view('sidebar.php', $data);
		}

		function edit_kategori_aksi(){
			$id = $this->input->post('id');
			$nama_kategori = $this->input->post('nama_kategori');

			$data = array(
				'id' => $id,
				'nama_kategori' => $nama_kategori
			);

			$this->m_data->update_data($id, $data,'kategori');
			redirect('dashboard/kategori');
		}

		function hapus_kategori($id){
			$where = array('id' => $id);
			$this->m_data->hapus_data($where,'kategori');
			redirect('dashboard/kategori');
		}

		function list_user(){
			$data['userdata'] = $this->m_data->ambil_data('userdata')->result();
			$data['content'] = ('kategori/v_list_user.php');
			$this->load->view('sidebar.php', $data);
		}

		function list_pesanan(){
			$where = array('status_pembayaran' => 3);
			$data['pesanan'] = $this->m_data->ambil_data_kondisi('pesanan', $where)->result();
			$data['content'] = ('kategori/v_list_pesanan.php');
			$this->load->view('sidebar.php', $data);
		}

		function inbox(){
			$data['pesan'] = $this->m_data->ambil_data('pesan')->result();
			$data['content'] = ('v_pesan_dashboard.php');
			$this->load->view('sidebar.php', $data);
		}



}
