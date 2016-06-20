<?php

class Dashboard extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_Model');
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id ==NULL)
        {
            redirect('admin');
        }
    }    
    public function index()
    {
        $data=array();
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/dashboard_content','',TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    
    //for Category 
    public function add_category()
    {
        $data=array();
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/add_category','',TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_category()
    {
        $data=array();
        $data['category_name']=  $this->input->post('category_name',TRUE);
        $data['category_description']=  $this->input->post('category_description',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
        $this->Dashboard_Model->save_category_info($data);
        $sdata=array();
        $sdata['message']="Save Category Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('Dashboard/add_category');
    }
    public function manage_category()
    {
        $data=array();
        $data['select_all_category']=  $this->Dashboard_Model->select_all_category();
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/manage_category',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublished_category($category_id)
    {
        $this->Dashboard_Model->unpublished_category_by_id($category_id);
        redirect('dashboard/manage_category');
    }
    
    public function published_category($category_id)
    {
        $this->Dashboard_Model->published_category_by_id($category_id);
        redirect('dashboard/manage_category');
    }
    public function delete_category($category_id)
    {
        $this->Dashboard_Model->delete_category_by_id($category_id);
        redirect('dashboard/manage_category');
    }
    public function edit_category($category_id)
    {
        $data=array();
        $data['category_info_by_id']=  $this->Dashboard_Model->category_info_by_id($category_id);
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/edit_category',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_category()
    {
        $data=array();
        $category_id=  $this->input->post('category_id',TRUE);
        $data['category_name']=  $this->input->post('category_name',TRUE);
        $data['category_description']=  $this->input->post('category_description',TRUE);

        $this->Dashboard_Model->update_category_info($data,$category_id);
        $sdata=array();
        $sdata['message']="Update Category Information Successfully !";
        $this->session->set_userdata($sdata);
        //redirect('Dashboard/edit_category/'.$category_id);
        redirect('Dashboard/manage_category/');
    }
    
    //for Manufacturer
    public function add_manufacturer()
    {
        $data=array();
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/add_manufacturer','',TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_manufacturer()
    {
        $data=array();
        $data['manufacturer_name']=  $this->input->post('manufacturer_name',TRUE);
        $data['manufacturer_description']=  $this->input->post('manufacturer_description',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
        $this->Dashboard_Model->save_manufacturer_info($data);
        $sdata=array();
        $sdata['message']="Save Manufacturer Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('Dashboard/add_manufacturer');
    }
    public function manage_manufacturer()
    {
        $data=array();
        $data['select_all_manufacturer']=  $this->Dashboard_Model->select_all_manufacturer();
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/manage_manufacturer',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublished_manufacturer($manufacturer_id)
    {
        $this->Dashboard_Model->unpublished_manufacturer_by_id($manufacturer_id);
        redirect('dashboard/manage_manufacturer');
    }
    
    public function published_manufacturer($manufacturer_id)
    {
        $this->Dashboard_Model->published_manufacturer_by_id($manufacturer_id);
        redirect('dashboard/manage_manufacturer');
    }
    public function delete_manufacturer($manufacturer_id)
    {
        $this->Dashboard_Model->delete_manufacturer_by_id($manufacturer_id);
        redirect('dashboard/manage_manufacturer');
    }
    public function edit_manufacturer($manufacturer_id)
    {
        $data=array();
        $data['manufacturer_info_by_id']=  $this->Dashboard_Model->manufacturer_info_by_id($manufacturer_id);
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/edit_manufacturer',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_manufacturer()
    {
        $data=array();
        $manufacturer_id=  $this->input->post('manufacturer_id',TRUE);
        $data['manufacturer_name']=  $this->input->post('manufacturer_name',TRUE);
        $data['manufacturer_description']=  $this->input->post('manufacturer_description',TRUE);

        $this->Dashboard_Model->update_manufacturer_info($data,$manufacturer_id);
        $sdata=array();
        $sdata['message']="Update Category Information Successfully !";
        $this->session->set_userdata($sdata);
        //redirect('Dashboard/edit_manufacturer/'.$manufacturer_id);
        redirect('Dashboard/manage_manufacturer');
    }
    
    //for Product
    public function add_product()
    {
        $data=array();
        $data['all_published_category']=  $this->Welcome_Model->select_all_published_category();
        $data['all_published_manufacturer']=  $this->Welcome_Model->select_all_published_manufacturer();
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/add_product',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_product()
    {
        $data=array();
        $data['product_name']=  $this->input->post('product_name',TRUE);
        $data['category_id']=  $this->input->post('category_id',TRUE);
        $data['manufacturer_id']=  $this->input->post('manufacturer_id',TRUE);
        $data['product_price']=  $this->input->post('product_price',TRUE);
        $data['product_quantity']=  $this->input->post('product_quantity',TRUE);
        $data['product_short_description']=  $this->input->post('product_short_description',TRUE);
        $data['product_long_description']=  $this->input->post('product_long_description',TRUE);
        
        $data['publication_status']=  $this->input->post('publication_status',TRUE);        
        /*
         * Start Image Upload
         */
        $error=array();
        $fdata=array();
        $config['upload_path']          = 'product_images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 300;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('product_image'))
        {
            $error = $this->upload->display_errors();
            echo $error;
        }
        else
        {
            $fdata = $this->upload->data();
            $data['product_image']=  $config['upload_path'].$fdata['file_name'];
        }     
        
        /*
         * End Image Upload
         */        
        $this->Dashboard_Model->save_product_info($data);
        $sdata=array();
        $sdata['message']="Save Product Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('Dashboard/add_product');
    }
    
    public function manage_product()
    {
        $data=array();
        $data['select_all_product']=  $this->Dashboard_Model->select_all_product();
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/manage_product',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublished_product($product_id)
    {
        $this->Dashboard_Model->unpublished_product_by_id($product_id);
        redirect('dashboard/manage_product');
    }
    
    public function published_product($product_id)
    {
        $this->Dashboard_Model->published_product_by_id($product_id);
        redirect('dashboard/manage_product');
    }
    public function delete_product($product_id)
    {
        $this->Dashboard_Model->delete_product_by_id($product_id);
        redirect('dashboard/manage_product');
    }
    public function edit_product($product_id)
    {
        $data=array();
        $data['product_info_by_id']=  $this->Dashboard_Model->product_info_by_id($product_id);
        $data['admin_maincontent']=  $this->load->view('admin/admin_pages/edit_product',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_product()
    {
        $data=array();
        $product_id=  $this->input->post('product_id',TRUE);
        $data['product_name']=  $this->input->post('product_name',TRUE);
        $data['product_price']=  $this->input->post('product_price',TRUE);
        $data['product_short_description']=  $this->input->post('product_short_description',TRUE);
        $data['product_long_description']=  $this->input->post('product_long_description',TRUE);
        $data['product_image']=  $this->input->post('product_image',TRUE);

        $this->Dashboard_Model->update_product_info($data,$product_id);
        $sdata=array();
        $sdata['message']="Update Product Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('Dashboard/edit_product/'.$product_id);
        //redirect('Dashboard/manage_product');
    }
        public function logout()
    {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $sdata=array();
        $sdata['message']="You are Successfully Logout";
        $this->session->set_userdata($sdata);
        redirect('admin/index');
    }
}
