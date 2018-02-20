<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Users extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			// $this->load->model('user');	
			
		}
		public function login(){
			$data = array();
			if($this->session->userdata('success_msg')){
				$data['success_msg'] = $this->session->userdata('success_msg');
				$this->session->unset_userdata('success_msg');
			}
			if($this->session->userdata('error_msg')){
				$data['error_msg'] = $this->session->userdata('error_msg');
				$this->session->unset_userdata('error_msg');
			}

			if($this->input->post('login')){
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');

				
				if ($this->form_validation->run() == TRUE) {
					$con['returnType'] = 'single';
					$con['conditions'] = array(
						'username'=>$this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'status' => '1'
					);
					$checkLogin = $this->user->getRows($con);
					if($checkLogin){
						$this->session->set_userdata('isUserLoggedIn',TRUE);
						$this->session->set_userdata('userId',$checkLogin['id']);
						
						redirect('users/home');
					} else {
						$data['error_msg'] = 'Wrong Username or password, please try again.';
					}
				}	
			}
			$this->load->view('users/login');
		}
	}
?>
