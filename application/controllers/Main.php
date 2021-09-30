<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('website/home');
	}

	public function signup(){
		if(!$this->security->xss_clean($this->session->userdata('searchme_login'))){
			$this->load->view('website/sign');
		}else{
			redirect('main/search');
		}

	}

	public function form_addon(){
		if(!$this->security->xss_clean($this->session->userdata('searchme_login'))){
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
		}else{
			redirect('main/search');
		}
		
	} 

	public function resetpass(){
		if(!$this->security->xss_clean($this->session->userdata('searchme_login'))){
			$this->load->view('website/forgetPass');
		}else{
			redirect('main/search');
		}
	}

	public function user_profile(){ 
		if($this->security->xss_clean($this->session->userdata('searchme_login'))){
			$this->load->view('website/user_account');
		}else{
			redirect('signup');
		}
	}

	public function search(){
		$this->load->view('website/search');
	}

	public function search_filter(){
		$this->load->view('website/search_filter');
	}

	public function aboutus(){
		
		$this->load->view('website/about');
	}


	public function logout() {
		$this->session->unset_userdata("searchme_login");
		redirect("");
	}

}
