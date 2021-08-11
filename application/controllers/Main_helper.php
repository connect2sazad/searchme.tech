<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Main_helper extends CI_Controller {

	public function otpSend_registerUser(){
		$input=$this->security->xss_clean($this->input->post());
		// $input['email']="resf@djf.com";	

		$compare_time=date('Y-m-d H:i:s',strtotime(date('Y-m-d H:i:s'))-600);
		// echo "<br>".date("'Y-m-d H:i:s'");
		$otp_key=$this->db->select('otp,date_time')->where(['email'=>$input['email'],'date_time > '=>$compare_time])->get('otp_verification')->row();
		// echo "<br>".date('Y-m-d H:i:s')."<br>";
		// $s=strtotime(date('Y-m-d H:i:s'))-strtotime($otp_key->date_time);
		// print_r($s);
		// $data['data']=$otp_key;

		if($otp_key==null){
			
			$random_val=rand(1000,9999);
			// $data['otp_value']=$random_val;
		

			/*$headers = 'From: Multirater Surveys <searchmeweb@gmail.com>' . "\n";
		
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			$returnpath = '-f searchmeweb@gmail.com';

			$success=1;
			
			$success = mail($input['email'], 'Otp Verification SearchMe', "your Verification code is: ".$random_val);*/

			$success = $this->_send_mail($input['email'],$random_val);

			$this->db->insert('otp_verification',['email'=>$input['email'],'otp'=>$random_val,'date_time'=>date('Y-m-d H:i:s')]);
			if($success==1){
				// $this->db->insert('otp_verification',['email'=>$input['email'],'otp'=>$random_val,'date_time'=>date('Y-m-d H:i:s')]);
				$data['mail']=1;
			}else{
				$data['mail']=-1;
			}

		}else{
			$data['mail']=0;
			$this->_send_mail($input['email'],$otp_key->otp);
			// $data['otp_value']=$otp_key->otp;
		}
		$data['key']=$this->security->get_csrf_hash(); 
		$data['otp']=$random_val;

		echo json_encode($data);


//mail sending starts
		

//mail sending ends
		
	}

private function _send_mail($email,$random_val){
	$headers = 'From: Multirater Surveys <searchmeweb@gmail.com>' . "\n";
		
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			$returnpath = '-f searchmeweb@gmail.com';

			$success=1;
			
			$success = mail($email, 'Otp Verification SearchMe', "your Verification code is: ".$random_val);
			return $success;
}	

	public function email_validation(){
		$this->load->library('form_validation');
		$input=$this->security->xss_clean($this->input->post());

		$this->form_validation->set_rules('email','Email', 'required|valid_email|is_unique[user_detail.email]');

		$this->form_validation->set_message('valid_email', '*Invalid E-Mail');
		$this->form_validation->set_message('required', '*Enter E-Mail');
		$this->form_validation->set_message('is_unique', '*Already Registed');

		
		$this->form_validation->set_error_delimiters('', '');
		
		$this->form_validation->run();

		$data['data']=form_error('email');

		$data['key']=$this->security->get_csrf_hash();
		
		echo json_encode($data);
	}


//opt validation
	public function verify_otp(){
		$input=$this->security->xss_clean($this->input->post());

		// $password_old=$input['password'];
		// $email=$input['email'];
		// $password_new=$email."//".$password_old;
		
		// $password_new_hash=password_hash($password_new,PASSWORD_BCRYPT);

		$this->load->model('password_model');
		$password_new_hash=$this->password_model->create_hash($input['email'],$input['password']);

		// $input['otp']="1234";

		$otp_selected=$this->db->select('otp')->where('email',$input['email'])->order_by('id','DESC')->get("otp_verification")->row();
		if($otp_selected->otp==$input['otp']){
			// $data['data']=1;

			$data['data']=$this->db->insert('user_detail',['email'=>$input['email'],'password'=>$password_new_hash,'account_created_date'=>date('Y-m-d H:i:s'),'otp_verify_status'=>1,'user_verified_status'=>0,'last_login'=>date('Y-m-d H:i:s')]);
			$inserted_id=$this->db->insert_id();
			$this->session->set_userdata('searchme_login_id_verify_otp',$inserted_id);
			// $data['insert_error']=$this->db->last_query();
		}else{
			$data['data']=0;
		}
		// $data['fetched_otp']=$otp_selected->otp;
		$data['session']=$this->session->userdata('searchme_login_id_verify_otp');
		$data['key']=$this->security->get_csrf_hash();

		echo json_encode($data);
	}


//login code|
//          V
//login code|
//          V
//login code|
//          V

	public function check_login_detail(){
		$input=$this->security->xss_clean($this->input->post());

// $input['email']="searchmeweb@gmail.com";
// $input['password']="12345678";

		$password_old=$input['password'];
		$email=$input['email'];		

		
		$get_data=$this->db->select('sn,password,first_name,otp_verify_status')->where('email',$email)->get('user_detail')->row();

		$data['status']=0;
		if($get_data!='' && password_verify($email."//".$password_old,$get_data->password)){
			// $data['status']=1;
			if($get_data->first_name!=""){
				$data['status']=1;
				$this->session->set_userdata('searchme_login',$get_data->sn);
			}else{
				$this->session->set_userdata('searchme_login_id_verify_otp',$get_data->sn);
				$data['status']=2;
			}
		}
		$data['key']=$this->security->get_csrf_hash();

		echo json_encode($data);
	}


//Reset Password	
//Reset Password	
//Reset Password	
//Reset Password	

public function reset_pass(){
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->where('email',$input['email'])->count_all_results('user_detail');

	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);
}

public function reset_match_otp(){
	$input=$this->security->xss_clean($this->input->post());

	// $input['email']="dirosweb@gmail.com";
	// $input['otp']='1234';

	$otp_selected=$this->db->select('otp')->where('email',$input['email'])->order_by('id','DESC')->get("otp_verification")->row();
	// print_r($otp_selected->otp);
	$data['data']=($otp_selected && $input['otp']==$otp_selected->otp);

	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);
}

public function reset_password_modify(){
	$input=$this->security->xss_clean($this->input->post());

	$this->load->model('password_model');
	$password_hash=$this->password_model->create_hash($input['email'],$input['password']);

	$data['data']=$this->db->where('email',$input['email'])->update("user_detail",['password'=>$password_hash]);
	
	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);	
}


public function submit_addon_data(){
	$input=$this->security->xss_clean($this->input->post());
	$this->load->model('user_model');
	$data['data']=$this->user_model->submit_addon($input);
	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);	
}


public function get_user_account_data(){
	$input=$this->security->xss_clean($this->input->post());

	$this->db->select('a.email,a.first_name,a.middle_name,a.last_name,a.gender,b.reg_no,b.roll_no,b.university,b.college,b.course,b.hostel_no,b.branch,b.room_no,b.phone_no,b.alt_phone_no,b.address1,b.city,b.state');
	$this->db->from("user_detail as a")->where('sn',$input['user_id']);
	$this->db->join("user_addon_data as b","a.sn=b.user_id");
	$data['data']=$this->db->get()->row();

	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);	

}


}
