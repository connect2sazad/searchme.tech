<?php

class User_model extends CI_Model{

    public function submit_addon($input){

        $user_detail_table_array=[];
        $user_detail_table_array['first_name']=$input['first_name'];
        $user_detail_table_array['middle_name']=$input['middle_name'];
        $user_detail_table_array['last_name']=$input['last_name'];
        $user_detail_table_array['dob']=$input['dob'];
        $user_detail_table_array['gender']=$input['gender'];

        $a=$this->db->where('sn',$input['user_id'])->update('user_detail',$user_detail_table_array);

        $user_addon_data_table_array=[];
        $user_addon_data_table_array['user_id']=$input['user_id'];
        $user_addon_data_table_array['reg_no']=$input['reg_no'];
        $user_addon_data_table_array['roll_no']=$input['roll_no'];
        $user_addon_data_table_array['university']=$input['university'];
        $user_addon_data_table_array['college']=$input['college'];
        $user_addon_data_table_array['course']=$input['course'];
        $user_addon_data_table_array['branch']=$input['branch'];
        $user_addon_data_table_array['hostel_no']=$input['hostel_no'];
        $user_addon_data_table_array['room_no']=$input['room_no'];
        $user_addon_data_table_array['phone_no']=$input['phone_no'];
        $user_addon_data_table_array['alt_phone_no']=$input['alt_phone_no'];
        $user_addon_data_table_array['address1']=$input['add1'];
        $user_addon_data_table_array['city']=$input['city'];
        $user_addon_data_table_array['state']=$input['state'];

        $b=$this->db->insert("user_addon_data",$user_addon_data_table_array);

        return $a&&$b;

    }

}


?>