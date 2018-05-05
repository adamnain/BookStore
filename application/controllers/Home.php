
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login_user"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data['barang'] = $this->m_data->ambil_data('barang')->result();
		$data['content'] = ('home/index.php');
		$this->load->view('home/header', $data);
	}

	function chart(){
		$username = $this->session->userdata('nama');
		$where = array(
			'status_pembayaran' => 1,
			'username' => $username
		);
		$data['pesanan'] = $this->m_data->ambil_data_kondisi('pesanan', $where)->result();
		$data['content'] = ('home/chart.php');
		$this->load->view('home/header', $data);
	}

	function order(){
		$data['pesanan'] = $this->m_data->ambil_data('pesanan')->result();
		$data['content'] = ('home/order.php');
		$this->load->view('home/header', $data);
	}

	function update_chart(){
		 $username = $this->session->userdata('nama');
		 $where = array(
			 'status_pembayaran' => 1,
			 'username' => $username
		 );
		 $data = array(
			 'status_pembayaran' => 2
		 );
		 $this->m_data->update_data_chart($where,$data,'pesanan');
		 redirect('home/invoice');
	}

	function tambah_chart(){
		$username = $this->session->userdata('nama');
		$data = [
			'username' => $username,
		  'nama_barang' => set_value('nama'),
		  'harga' => set_value('harga'),
		  'jumlah' => 1,
		  'status_pembayaran' => 1
		 ];
			$this->m_data->input_data($data, 'pesanan');
			redirect('home/chart');
	}

	function contact(){
		$data['content'] = ('home/contact.php');
		$this->load->view('home/header', $data);
	}

	function tambah_pesan_aksi(){
		// $username = $this->session->userdata('nama');
		$data = [
			'nama_user' => set_value('nama_user'),
			'isi_pesan' => set_value('isi_pesan')
		 ];

		$this->m_data->input_data($data, 'pesan');
		redirect('home/index');
	}

	function invoice(){
		$username = $this->session->userdata('nama');
		$where = array(
			'status_pembayaran' => 2,
			'username' => $username
		);
		$data['pesanan'] = $this->m_data->ambil_data_kondisi('pesanan', $where)->result();
		$data['content'] = ('home/invoice.php');
		$this->load->view('home/header', $data);
	}

	function selesai_bayar(){
		$username = $this->session->userdata('nama');
		$where = array(
			'status_pembayaran' => 2,
			'username' => $username
		);
		$data = array(
			'status_pembayaran' => 3,
		);
		$this->m_data->update_data_chart($where, $data,'pesanan');
		$data['content'] = ('home/invoice.php');
		$this->load->view('home/header', $data);
		redirect('home/index');
	}

	function about(){
		$data['content'] = ('home/about.php');
		$this->load->view('home/header', $data);
	}

	function search(){
		$keyword = $this->input->post('judul');
		$where = array('nama' => $keyword);
		$data['barang'] = $this->m_data->ambil_data_kondisi('barang', $where)->result();
		$data['content'] = ('home/search.php');
		$this->load->view('home/header.php', $data);
		// $keyword = $this->input->post('judul');
		// $data['barang'] = $this->m_data->search($keyword)->result();
		// $data['content'] = ('home/search.php');
		// $this->load->view('home/header', $data);
	}



}
