<?php

class Cart extends CI_Controller {

    //put your code here

    public function add_to_cart($product_id) {
        $product_qty = $this->input->post('qty', TRUE);
        $product_info = $this->Welcome_Model->select_product_info_by_product_id($product_id);

        $data = array(
            'id' => $product_info->product_id,
            'qty' => $product_qty,
            'price' => $product_info->product_new_price,
            'name' => $product_info->product_name,
            'image' => $product_info->product_image,
            'sku' => $product_info->product_sku
        );

        $this->cart->insert($data);
        redirect('Cart/show_cart');
    }

    public function show_cart() {
        $data = array();
        $data['title'] = "Cart Page";
        $data['slider'] = FALSE;
        $data['banner'] = FALSE;
//        $data['all_product']=$this->Welcome_Model->select_all_published_product();
//        $data['all_new_product']=$this->Welcome_Model->select_all_published_new_product();
//        $data['all_manufacturer']=$this->Welcome_Model->select_all_published_manufacturer();
        $data['maincontent'] = $this->load->view('pages/cart_page', '', TRUE);
        $data['all_category'] = $this->Welcome_Model->select_all_published_category();
        $this->load->view('master', $data);
    }

    public function update_cart($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty' =>$this->input->post('quantity',TRUE)
        );

        $this->cart->update($data);
        redirect('Cart/show_cart');
    }
    
    public function delete_cart($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $this->cart->update($data);
        redirect('Cart/show_cart');
    }

}
