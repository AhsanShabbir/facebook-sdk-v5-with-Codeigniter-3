<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
	Class Fb extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('facebook');
		}
		public function index(){
			/**
			 * check if user is logged in with facebook.
			 * if logged in.. user/profile veiw is opend up.
			 * if not..it will get login form view.
			 */
			if($this->facebook->logged_in()){
			// user is logged in.
			
				$this->load->view('user/profile');

			}else{
				// not logged in.
				$data = $this->facebook->loginUrl();
				$this->load->view('login/index', $data);
			}
		}
		public function user_login(){
			
			if($this->facebook->setSession()){
				redirect(base_url('index.php/fb/'));
			}else{
				$this->ins->load->view('user/failed');
			}

		}
		public function logout(){
			$this->facebook->logout();
		}

	}