<?php

class Dashboard_Model extends CI_Model {
    
    //for Category    
    public function save_category_info($data)
    {
        $this->db->insert('tbl_category',$data);        
    }
    public function select_all_category()
    {
        $this->db->select('*')
                ->from('tbl_category');
                
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function unpublished_category_by_id($category_id)
    {
        $this->db->set('publication_status',0)
                 ->where('category_id',$category_id)
                 ->update('tbl_category');
    }    
    public function published_category_by_id($category_id)
    {
        $this->db->set('publication_status',1)
                 ->where('category_id',$category_id)
                 ->update('tbl_category');
    }
    public function delete_category_by_id($category_id)
    {
        $this->db->where('category_id',$category_id)
                 ->delete('tbl_category');
    }
    public function category_info_by_id($category_id)
    {
        $this->db->select('*')
                ->from('tbl_category')
                ->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_category_info($data,$category_id)
    {
        $this->db->where('category_id',$category_id)
                 ->update('tbl_category',$data);
    }
    
    //for Manufacturer
    public function save_manufacturer_info($data)
    {
        $this->db->insert('tbl_manufacturer',$data);        
    }
    public function select_all_manufacturer()
    {
        $this->db->select('*')
                ->from('tbl_manufacturer');
                
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function unpublished_manufacturer_by_id($manufacturer_id)
    {
        $this->db->set('publication_status',0)
                 ->where('manufacturer_id',$manufacturer_id)
                 ->update('tbl_manufacturer');
    }    
    public function published_manufacturer_by_id($manufacturer_id)
    {
        $this->db->set('publication_status',1)
                 ->where('manufacturer_id',$manufacturer_id)
                 ->update('tbl_manufacturer');
    }
    public function delete_manufacturer_by_id($manufacturer_id)
    {
        $this->db->where('manufacturer_id',$manufacturer_id)
                 ->delete('tbl_manufacturer');
    }
    public function manufacturer_info_by_id($manufacturer_id)
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('manufacturer_id',$manufacturer_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_manufacturer_info($data,$manufacturer_id)
    {
        $this->db->where('manufacturer_id',$manufacturer_id)
                 ->update('tbl_manufacturer',$data);
    }
    
    //for Product
    public function save_product_info($data)
    {
        $this->db->insert('tbl_product',$data);
    }
    public function select_all_product()
    {
        $this->db->select('*')
                ->from('tbl_product');
                
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function unpublished_product_by_id($product_id)
    {
        $this->db->set('publication_status',0)
                 ->where('product_id',$product_id)
                 ->update('tbl_product');
    }    
    public function published_product_by_id($product_id)
    {
        $this->db->set('publication_status',1)
                 ->where('product_id',$product_id)
                 ->update('tbl_product');
    }
    public function delete_product_by_id($product_id)
    {
        $this->db->where('product_id',$product_id)
                 ->delete('tbl_product');
    }
    public function product_info_by_id($product_id)
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('product_id',$product_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_product_info($data,$product_id)
    {
        $this->db->where('product_id',$product_id)
                 ->update('tbl_product',$data);
    }
}
