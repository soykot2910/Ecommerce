<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['title'] = "Home Page";
        $data['slider']=TRUE;
        $data['banner']=TRUE;
        $data['all_product']=$this->Welcome_Model->select_all_published_product();
        $data['all_new_product']=$this->Welcome_Model->select_all_published_new_product();
        $data['popular_product']=$this->Welcome_Model->select_all_published_popular_product();
        $data['seller_product']=$this->Welcome_Model->select_all_published_best_seller_product();
        $data['all_manufacturer']=$this->Welcome_Model->select_all_published_manufacturer();
        $data['all_category']=$this->Welcome_Model->select_all_published_category();
        $data['maincontent']=$this->load->view('pages/home_page',$data,TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_published_category();
        $data['all_slider']=$this->Welcome_Model->select_all_published_slider();
        $this->load->view('master',$data);
    }
    
    
    public function product_details($product_id,$category_id)
    {
        $data = array();
        $data['title'] = "Product Details Page";
        $data['slider']=FALSE;
        $data['banner']=FALSE;
        $product_info=$this->Welcome_Model->select_product_info_by_product_id($product_id);
        
        $hit_count=$product_info->product_hit_count+1;
        $this->Welcome_Model->update_hit_count($product_id,$hit_count);
        
        $data['select_product']=$this->Welcome_Model->select_all_published_product_by_product_id($product_id);
        $data['related_product']=$this->Welcome_Model->select_all_published_category_product_by_category_id($category_id);
        $data['all_new_product']=$this->Welcome_Model->select_all_published_new_product();
        $data['all_manufacturer']=$this->Welcome_Model->select_all_published_manufacturer();
        $data['maincontent']=$this->load->view('pages/product_details_page',$data,TRUE);
        
        $data['all_category']=$this->Welcome_Model->select_all_published_category();
        $this->load->view('master',$data);
    }
    

}
