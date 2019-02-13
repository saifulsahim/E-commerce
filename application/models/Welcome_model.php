<?php

    class Welcome_model extends CI_Model{


        public function all_active_product(){
            $result = $this->db->select('*')
                ->from('product')
                ->where('product_status',1)
                ->get()->result();
            return $result;
        }

        public  function select_product_by_id($product_id)
        {
            $product_info = $this->db->select('*')
                ->from('product')
                ->join('manufacturer', 'manufacturer.manufacturer_id = product.manufacturer_id')
                ->where('product_id',$product_id)
                ->get()->row();
//            echo '<pre>';
//            print_r($product_info);
//            exit();
            return $product_info;
        }

        public function all_published_product_info($per_page,$offset){

            if($offset == NULL)

            {
                $offset = 0;
                //upper_limit = $per_page;
            }
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('product_status',1);
            $this->db->limit($per_page,$offset);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }

        public function search_product($search_text)
        {

            return $this->db->like('product_name',$search_text)
               // ->or_like('product_short_desc',$search_text)
              //  ->or_like('product_long_desc',$search_text)

                ->get('product')->result();
//            $result = $this->db->select('*')
//                ->from('product')
//                ->where('product_status',1);
//                $this->db->like('product_name', $search_text, 'both')
//                ->get()->result();
//            return $result;

        }
    }