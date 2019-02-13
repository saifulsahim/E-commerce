<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model
{

    function save_category()
    {

        $data['category_name'] = $this->input->post('categoryName', TRUE);
        $data['category_short_desc'] = $this->input->post('categoryShortDesc', TRUE);
        $data['category_long_desc'] = $this->input->post('categoryLongDesc', TRUE);
        $data['category_status'] = 1;

        $this->db->insert('category', $data);

//            echo '<pre>';
//            print_r($data);
//            echo '</pre>';

    }


    function get_all_category()
    {

        $data = $this->db->select('*')->from('category')->get()->result();
        return $data;

    }

    function change_category_status($category_id, $status)
    {
        $data['category_status'] = $status;
        $this->db->where('category_id', $category_id);
        $this->db->update('category', $data);
    }

    function get_category_details($category_id)
    {

        $result = $this->db->select('*')->from('category')
            ->where('category_id', $category_id)
            ->get()->row();

        return $result;

    }

    function update_category()
    {
        $data['category_name'] = $this->input->post('categoryName', TRUE);
        $data['category_short_desc'] = $this->input->post('categoryShortDesc', TRUE);
        $data['category_long_desc'] = $this->input->post('categoryLongDesc', TRUE);
        //$data = $this->input->post(NULL,TRUE);

//        echo '<pre>';
//        print_r($data);
        $category_id = $this->input->post('categoryId', TRUE);
//
//        unset($data['category_id']);
        $this->db->where('category_id', $category_id)->update('category', $data);
    }

    function get_all_active_category()
    {

        $result = $this->db->select('*')
            ->from('category')
            ->where('category_status', 1)
            ->get()->result();
        return $result;
    }


//    private function upload_product_image(){
//
//        $config['upload_path']   = './uploads/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size']      = '10000';//kb
//        $config['max_width']     = '2024';
//        $config['max_height']    = '1000';
//
//
//        $this->load->library('upload',$config);
//        if($this->upload->do_upload('productImage')){
//            $data = $this->upload->data();
//            $image_path= "uploads/$data[file_name]";
//            return $image_path;
//
//        }else{
//           $error=  $this->upload->display_errors();
//            print_r($error);
//        }
//    }


    function save_product($product_image)
    {
//        $top_product =$this->input->post('topProduct',TRUE);
//        echo '------'.$top_product;
//        exit();

        $product_data['product_name'] = $this->input->post('productName', TRUE);
        $product_data['product_price'] = $this->input->post('productPrice', TRUE);
        $product_data['product_short_desc'] = $this->input->post('productShortDesc', TRUE);
        $product_data['product_long_desc'] = $this->input->post('productLongDesc', TRUE);
        $product_data['category_id'] = $this->input->post('categoryId', TRUE);
        $product_data['manufacturer_id '] = $this->input->post('manufacturerId', TRUE);

        $product_data['product_quantity'] = $this->input->post('productQuantity', TRUE);

        $product_data['top_product'] = $this->input->post('topProduct', TRUE);
        if ($product_data['top_product'] == NULL) {
            $product_data['top_product'] = 0;
        }

        if ($product_data['top_product'] == 'on') {
            $product_data['top_product'] = 1;
        }
        //$product_data['product_status']= 1;
        //$product_data['product_image']= $this->upload_product_image();
//
//        echo '<pre>';
//        print_r($product_data);
//        exit();

//        echo '<pre>';
//            print_r($_FILES);
//           exit();
        //$product_data['product_image'] = $this->upload_product_image();
        $product_data['product_image'] = $product_image;
        $this->db->insert('product', $product_data);

    }

    function select_all_product()
    {

        $result = $this->db->select('*')
            ->from('product')
            ->get()->result();
        return $result;
    }

    function select_top_product()
    {
        $result = $this->db->select('*')
            ->from('product')
            ->where('top_product', 1)
            ->where('product_status', 1)
            ->get()->result();
        return $result;

    }

    function product_published_by_id($product_id)
    {

        $this->db->set('product_status', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('product');
    }

    function product_unpublished_by_id($product_id)
    {

        $this->db->set('product_status', 2);
        $this->db->where('product_id', $product_id);
        $this->db->update('product');
    }

    function product_delete_by_id($product_id)
    {
        $this->db->set('product_status', 3);
        $this->db->where('product_id', $product_id);
        $this->db->update('product');

    }

    function product_info_by_id($product_id)
    {

        $result = $this->db->select('*')
            ->from('product')
            ->where('product_id', $product_id)
            ->get()->row();
        return $result;
    }

    function update_product($product_image)
    {

        $data = array();
        $product_id = $this->input->post('productId', TRUE);
        $data['category_id'] = $this->input->post('categoryId', TRUE);
        $data['manufacturer_id'] = $this->input->post('manufacturerId', TRUE);
        $data['product_name'] = $this->input->post('productName', TRUE);
        $data['product_price'] = $this->input->post('productPrice', TRUE);
        $data['product_short_desc'] = $this->input->post('productShortDesc', TRUE);
        $data['product_long_desc'] = $this->input->post('productLongDesc', TRUE);
        $data['product_quantity'] = $this->input->post('productQuantity', TRUE);
        $data['product_image'] = $product_image;

        $top_product = $this->input->post('topProduct', TRUE);
//        echo $top_product;
//        exit();

        if ($top_product == NULL) {
            $data['top_product'] = 0;
        }

        if ($top_product == 'on') {
            $data['top_product'] = 1;
        }

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->db->where('product_id', $product_id);
        $this->db->update('product', $data);

    }

//    public function  findByCategory($category_id)
//    {
//
//        $this->db->where('category_id',$category_id);
//        return $this->db->get('product')->result();
//    }
//
//    public function find($id)
//    {
//        $this->db->where('category_id',$id);
//        return $this->db->get('category')->row();
//    }

    public function brand_cat_filter($brand_id, $category_id)
    {
        $this->db->select();
        if ($brand_id != '') {
            $this->db->where('product.manufacturer_id', $brand_id);
        }


        if ($category_id != '') {
            $this->db->where('product.category_id', $category_id);
        }


        $query = $this->db->get('product');

        return $query->result();
    }

    public function search_filter_by_name($val)
    {
        $query = $this->db->select()
            ->like('product_name', $val)
            ->get('product');

        return $query->result();
    }
}