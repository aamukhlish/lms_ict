<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		redirect(base_url('login'));
	}

	public function login()
	{
		if ($this->input->post('loginValidation')) {
			$login = $this->Home_model->loginValidation();
			if ($login->num_rows() > 0) {
				$account = $this->Home_model->getLoggedAccount();
				$dataSession = array(
					'login' => true,
					'id' => $account->id,
					'username' => $account->username,
					'password' => $account->password,
					'fullname' => $account->fullname,
					'email' => $account->email,
					'no_hp' => $account->no_hp,
					'status' => $account->status,
					'privilleges' => $account->privilleges
 				 );
				 $this->session->set_userdata($dataSession);
				 redirect(base_url('home'));
			} else {
				$this->load->view('notification/loginFailed');
				$this->load->view('login');
			}
		} else {
			$this->load->view('login');
		}
	}

	public function profile()
	{
		if ($this->input->post('updateAccount')) {
			$this->Home_model->updateAccount();
			$account = $this->Home_model->getUpdatedAccount();
			$dataSession = array(
				'login' => true,
				'id' => $account->id,
				'username' => $account->username,
				'password' => $account->password,
				'fullname' => $account->fullname,
				'email' => $account->email,
				'no_hp' => $account->no_hp,
				'status' => $account->status,
				'privilleges' => $account->privilleges
			 );
			 $this->session->set_userdata($dataSession);
			if($this->session->set_userdata($dataSession)){
			 	$this->session->set_flashdata('success', 'Data berhasil disimpan');
			 	redirect(base_url('profile'));
			 }
		} elseif ($this->input->post('updatePassword')) {
			$this->Home_model->updatePassword();
		}
//		$data['view_name'] = 'profile';
		$this->load->view('admin/profile');
		$this->session->set_flashdata('something','Data berhasil disimpan');
	}

	public function home()
	{
		//$data['view_name'] = 'admin/home';
		$this->load->view('admin/home');
	}

	public function logout()
	{
		// $this->session->session_destroy();
		session_destroy();
		redirect(base_url('login'));
	}
}
