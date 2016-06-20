<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data=array();
        $data['title']='Welcome to ePoint';
        $data['header']=TRUE;
        $data['slider']=TRUE;
        $data['category']=TRUE;
        $data['compareproducts']=TRUE;
        $data['bestsellers']=TRUE;
        $data['wishlist']=TRUE;            
        $data['tags']=TRUE;
        $data['productsbrand']=TRUE;
        $data['footer']=TRUE;
        $data['maincontent']=$this->load->view('pages/home_content',$data,true);
        $data['all_published_category']=$this->Welcome_Model->select_all_published_category();
        //$data['all_published_manufacturer']=$this->Welcome_Model->select_all_published_manufacturer();
        $this->load->view('master',$data);
    }

    public function contact()
    {
        $data=array();
        $data['title']='ePoint ~ Contact Us';
        $data['header']=TRUE;
        $data['category']=TRUE;
        $data['footer']=TRUE;
        $data['maincontent']=$this->load->view('pages/contact_content',$data,true);
        $this->load->view('master',$data);
    }
    
    public function checkout()
    {
        $data=array();
        $data['title']='ePoint ~ Checkout';
        $data['header']=TRUE;
        $data['category']=TRUE;
        $data['bestsellers']=TRUE;
        $data['footer']=TRUE;
        $data['maincontent']=$this->load->view('pages/checkout_content',$data,true);
        $this->load->view('master',$data);
    }
    
    public function wishlist()
    {
        $data=array();
        $data['title']='ePoint ~ Wishlist';
        $data['header']=TRUE;
        $data['category']=TRUE;
        $data['compareproducts']=TRUE;
        $data['bestsellers']=TRUE;
        $data['footer']=TRUE;
        $data['maincontent']=$this->load->view('pages/wishlist_content',$data,true);
        $this->load->view('master',$data);
    }
    
    public function manufacturers()
    {
        $data=array();
        $data['title']='ePoint ~ Manufacturers';
        $data['header']=TRUE;
        $data['bestsellers']=TRUE;
        $data['productsbrand']=TRUE;
        $data['footer']=TRUE;
        $data['maincontent']=$this->load->view('pages/manufacturer_content',$data,true);     
        $this->load->view('master',$data);
    }
}
