<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        //$this->load->model('Admin_Model');
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id !=NULL)
        {
            redirect('Dashboard');
        }
    }
    
    public function index()
    {
        $this->load->view('admin/admin_login');
    }
    public function admin_login_check()
    {
//        echo '<pre>';
//        print_r($_POST);
//        exit();
        $admin_email=  $this->input->post('admin_email',TRUE);
        $password=  $this->input->post('password',TRUE);
                
        $result=$this->Admin_Model->admin_login_check_info($admin_email,$password);
        $sdata=array();
        if($result)
        {
            //$this->load->view('admin/admin_master');
            $sdata['admin_id']=$result->admin_id;
            $sdata['admin_name']=$result->admin_name;
            $this->session->set_userdata($sdata);
            redirect('Dashboard');
        }
        else {
            $sdata['exception']="Your Email or Password is Invalide !!";
            $this->session->set_userdata($sdata);
            redirect('admin/index');
        }
    }
    
            
    
}
