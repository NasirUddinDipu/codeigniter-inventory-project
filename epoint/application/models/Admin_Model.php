<?php

class Admin_Model extends CI_Model {
    //put your code here
    public function admin_login_check_info($admin_email,$password)
    {
        $password=  md5($password);
        $this->db->select('*')
                ->from('tbl_admin')
                ->where('admin_email',$admin_email)
                ->where('admin_password',$password);
                
        $query_result=$this->db->get();
        $result=$query_result->row();
//        echo '<pre>';
//        print_r($result);
        return $result;
    }
}
