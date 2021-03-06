<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');

	}

	function index(){
		$data['content'] = ('v_login.php');
		$this->load->view('home/header', $data);
	}

	function admin(){
		$data['content'] = ('v_login_admin');
		$this->load->view('home/header', $data);
	}

	function aksi_login_admin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'role' => 1,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("userdata",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login_admin"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("dashboard"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function aksi_login_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'role' => 0,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("userdata",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login_user"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("home"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}

	function register(){
		$data['content'] = ('v_register');
		$this->load->view('home/header', $data);
	}

	function register_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'role' => 0
			);
		$this->m_login->input_data($data,'userdata');
		redirect('login/index');
	}
}
