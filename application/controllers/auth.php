<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	function __construct(){
  		parent::__construct();
  		$this->load->model('userlog_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function login()
  	{
	    if(isset($_POST['submit'])){
		    $username = $this->input->post('username');
		    $password = $this->input->post('password');
		    $berhasil = $this->userlog_model->login($username,$password);
		    if($berhasil == 1){
	        	$this->session->set_userdata(array('status_login'=>'sukses', 'username'=>'username'));
	        	// redirect('showbuku');
	      	}
	      	else
	      	{
	        	echo "<script> alert('Login Gagal!'); window.location.href='" . base_url() . "auth'; </script>";
	      	}
  		}
	}

	function logout(){
		$date = array('last_login'=>date('d-m-y h:i:s'));
		$this->userlog_model->logout($date);
	    $this->session->sess_destroy();
	    echo "<script> alert('Anda berhasil log out!'); window.location.href='" . base_url() . "auth'; </script>";
	}
}
?>
