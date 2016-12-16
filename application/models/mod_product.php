<?php

class mod_product extends CI_Model{
    function get(){
        //$barang = array('sandal','sepatu','pundak','lutut','kaki');
        //$product = $this->db->query('select * from table_product')->result();
        //$product = $this->db->get('table_product')->result();
        $this->db->select('table_product.*','table_category.category_name')
                ->from('table_product')
                ->join('table_category','table_category.category_id=table_product.category_id');
        $product = $this->db->get()->result();
        return $product;
    }
    
    function save(){
        $name = $this->input->post('product_name');
        $price = $this->input->post('price');
        $category_id = $this->input->post('category_id');
        $param = array('product_name'=>$name,'price'=>$price,'category_id'=>$category_id);
        $this->db->insert('table_product',$param);
    }
}