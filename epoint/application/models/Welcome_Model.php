<?php

class Welcome_Model extends CI_Model {
    //put your code here
    
    public function select_all_published_category()
    {
        $this->db->select('*')
                ->from('tbl_category')
                ->where('publication_status',1);
        
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_published_manufacturer()
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('publication_status',1);
        
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
}