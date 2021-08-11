<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('website/home');
	}

	public function signup(){
		$this->load->view('website/sign');

	}

	public function form_addon(){
		if($otp_session_id=$this->session->userdata('searchme_login_id_verify_otp')){
			$check_data_inserted=$this->db->select('first_name')->where('sn',$otp_session_id)->get('user_detail')->row();
			if($check_data_inserted->first_name){
				redirect('signup');
			}
			$this->load->view('website/signup_addon',['opt_session_id'=>$otp_session_id]);
		}else{
			echo 
			"<script>
				alert('You are not Allowed');
				location.href='".base_url()."';
			</script>";
			
		}
		
	}

	public function resetpass(){
		$this->load->view('website/forgetPass');
	}

	public function user_profile(){
		$this->load->view('website/user_account');
	}

	public function loggedIn(){
		echo "Acoount Created";
	}


}
