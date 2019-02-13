<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart_model extends CI_Model{

    public function select_product_info_by_product_id($product_id)
    {
        $product_info = $this->db->select('*')
            ->from('product')
            ->where('product_id',$product_id)
            ->get()->row();
//            echo '<pre>';
//            print_r($product_info);
//            exit();
        return $product_info;
    }

//    public function get_all(){
//        $query=$this->db->query("SELECT p.*
//                                 FROM product p
//                                 ORDER BY p.id ASC");
//        return $query->result_array();
//    }
}


