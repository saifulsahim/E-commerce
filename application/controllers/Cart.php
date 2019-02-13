<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model');
        $this->load->library('cart');
    }

    public function add_to_cart()
    {

        $product_id = $this->input->post('productId', true);

        $quantity = $this->input->post('productQuantity', true);
        $product_info = $this->Cart_model->select_product_info_by_product_id($product_id);

        $data = array(
            'id' => $product_info->product_id,
            'qty' => $quantity,
            'price' => $product_info->product_price,
            'name' => $product_info->product_name,
            'options' => array('image' => $product_info->product_image)
        );

//        echo '<pre>';
//                print_r($data);
//                exit();

        $this->cart->insert($data);


        return redirect('show-cart');
    }

//    public function  show_cart(){
//
//        $data =array();
//
//
//        $data['title']= "Product Details";
//
//        $data['slider']= '';
//
//
//        $data['featured_product']=  $this->load->view('pages/view_cart',$data,true);
////
////        $data['category']=  $this->load->view('pages/category',$data,true);
////
////        $data['recommend']=  $this->load->view('pages/recommend',$data,true);
//
//        $data['category']= '';
//
//        $data['manufacturer']= '';
//
//        $data['price_range']= '';
//
//        $data['recommend']=  '';
//
//        $this->load->view('master',$data);
//
//    }

    public function delete_to_cart($rowid)
    {

        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $this->cart->update($data);
        return redirect('show-cart');
    }

    public function update_cart_product_quantity()
    {
        $quantity = $this->input->post('quantity', true);
        $row_id = $this->input->post('rowId', true);

        $data = array(
            'rowid' => $row_id,
            'qty' => $quantity
        );

        $this->cart->update($data);
        return redirect('show-cart');
    }


    public function add_product()
    {

        //$this->load->library('cart');
        // $product_id= $this->input->post('productId',true);
//        echo '<pre>';
//        print_r($product_id);
//        exit();

        // $product_info = $this->Cart_model->select_product_info_by_product_id($product_id);


//        print_r($product_info);
//        exit();


        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $image = $this->input->post('image');
        $price = $this->input->post('price');


        $data = array(
            'id' => $id,
            'qty' => 1,
            'price' => $price,
            'name' => $name,
            'image' => $image,
            //'options' => array('image' => $product_info->product_image)

        );

//        echo '<pre>';
        /*print_r($data);
        exit();*/


        if ($this->cart->insert($data)) {

            echo "Record Successfully Inserted In Cart";
            //echo $fefe = count($this->cart->contents());
        } else {
            echo "try again";

        }
        exit();

    }

    public function show_cart()
    {


        $this->load->library('cart');
        $data = array();


        $data['title'] = "View Cart";

        $data['slider'] = '';

        $data['cart_content'] = $this->cart->contents();


        foreach ($data['cart_content'] as $v_content){

            $data['product_exists'][$v_content['id']] = $this->products_model->product_info_by_id($v_content['id'])->product_quantity;

        }



//        echo '<pre>';
//        print_r($data['product_exists']);
//        exit();

        $data['featured_product'] = $this->load->view('pages/show_cart', $data, true);
//
//        $data['category']=  $this->load->view('pages/category',$data,true);
//
//        $data['recommend']=  $this->load->view('pages/recommend',$data,true);

        $data['category'] = '';

        $data['manufacturer'] = '';

        $data['price_range'] = '';

        $data['recommend'] = '';

        $this->load->view('master', $data);
        //$this->load->view('pages/show_cart');
    }

    public function delete_product()
    {
        $this->load->library('cart');
        $id = $this->input->post('id');


        $data = array(
            'rowid' => $id,
            'qty' => 0
        );

        $this->cart->update($data);

        echo "Successfully Updated Cart";
        exit();

    }

    public function update_cart()
    {
        $this->load->library('cart');
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('quantity');
        $data = array();
        $i = 0;
        foreach ($rowid as $key => $value) {

            $data = array(
                'rowid' => $value,
                'qty' => $qty[$i]
            );

            $this->cart->update($data);
            $i++;
        }
//        if($data['qty'] > 5)
//        {
//
//        }

        return redirect('show-cart');
//        echo '<pre>';
//        print_r($this->cart->contents());
//        exit();
    }

}