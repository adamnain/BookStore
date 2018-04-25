
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
			 'status_pembayaran' => 0
		 );
		 $this->m_data->update_data_chart($where,$data,'pesanan');
		 redirect('home/chart');
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



}
