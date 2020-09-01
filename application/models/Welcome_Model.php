<?php

class Welcome_Model extends CI_Model {
    //put your code here
    
    
    public function select_all_published_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    public function select_all_published_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    public function select_all_published_new_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->order_by('product_id','desc');
        $this->db->limit(5);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    public function select_all_published_popular_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->order_by('product_hit_count','desc');
        $this->db->limit(5);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    public function select_all_published_best_seller_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->order_by('product_hit_count','aesc');
        $this->db->limit(5);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    
     public function select_all_published_manufacturer()
    {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    
    
    public function select_all_published_product_by_product_id($product_id)
    {
         $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->where('product_id',$product_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
    }
    public function select_all_published_category_product_by_category_id($category_id)
    {
         $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->where('category_id',$category_id);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    
    
    public function select_product_info_by_product_id($product_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->where('product_id',$product_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
    }
    
    public function update_hit_count($product_id,$hit_count)
    {
        $this->db->set('product_hit_count',$hit_count);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    
    
    
    public function select_all_published_slider()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
}
