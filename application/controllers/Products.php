<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
    }

    function show_add_category_form()
    {

        $data['dashboard'] = $this->load->view('admin/admin_pages/add_category_form', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    function save_category()
    {

        $this->products_model->save_category();
        $this->show_all_category();
    }

    function show_all_category()
    {

        $category_data['all_category'] = $this->products_model->get_all_category();
        $data['dashboard'] = $this->load->view('admin/admin_pages/all_category', $category_data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    function change_category_status($category_id, $status)
    {

        $this->products_model->change_category_status($category_id, $status);
        redirect('all-category');

        //$this->show_all_category();

//        echo $category_id.'<br>';
//        echo $status;

    }

    function edit_category($category_id)
    {

        $data['category_data'] = $this->products_model->get_category_details($category_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_category_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);

    }

    function update_category()
    {

        $this->products_model->update_category();
        redirect('all-category');
//
    }


    function add_product()
    {
        $data['manufacturer_info'] = $this->manufacturer_model->get_all_active_manufacturer();
        $data['category_info'] = $this->products_model->get_all_active_category();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_product_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);

    }

    private function upload_product_image()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';//kb
        $config['max_width'] = '2024';
        $config['max_height'] = '1000';


        $this->load->library('upload', $config);
        if ($this->upload->do_upload('productImage')) {
            $data = $this->upload->data();
            $image_path = "uploads/$data[file_name]";
            return $image_path;

        } else {
            $error = $this->upload->display_errors();
            print_r($error);
        }
    }

    function save_product()
    {
//        $product_data= array();
        $product_image = $this->upload_product_image();
        $this->products_model->save_product($product_image);
        $this->session->set_userdata('message', 'Product saved successfully');
        $this->add_product();
    }

    function manage_product()
    {

        $data = array();
        $data['all_product'] = $this->products_model->select_all_product();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_product', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    function product_published($product_id)
    {

        $this->products_model->product_published_by_id($product_id);
        redirect('manage-product');

    }

    function product_unpublished($product_id)
    {

        $this->products_model->product_unpublished_by_id($product_id);
        redirect('manage-product');

    }

    function product_delete($product_id)
    {

        $this->products_model->product_delete_by_id($product_id);
        redirect('manage-product');

    }

    function product_edit($product_id)
    {
        $data['manufacturer_info'] = $this->manufacturer_model->get_all_active_manufacturer();
        $data['category_info'] = $this->products_model->get_all_active_category();
        $data['product_info'] = $this->products_model->product_info_by_id($product_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_product_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);

    }

    function update_product()
    {
//
//        echo '<pre>';
//        print_r($_FILES);
//        exit();
        if ($_FILES['productImage']['name'] == '' || $_FILES['productImage']['size'] == 0) {
            $product_image = $this->input->post('productOldImage', true);
            $this->products_model->update_product($product_image);
            $sdata = array();
            $sdata['message'] = "Update Product Information Successfully !";
            $this->session->set_userdata($sdata);
            $product_id = $this->input->post('productId', true);
            redirect('product-edit/' . $product_id);

        } else {

            $product_image = $this->upload_product_image();
            $this->products_model->update_product($product_image);
            unlink($this->input->post('productOldImage', true));
            $sdata = array();
            $sdata['message'] = "Update Product Information Successfully !";
            $this->session->set_userdata($sdata);
            $product_id = $this->input->post('productId', true);
            redirect('product-edit/' . $product_id);
        }

    }


    public function category($id)
    {
        $data['title'] = 'Catgeory';
        $data['slider'] = '';

        $data['featured_product'] = '';

        $data['category'] = $this->load->view('pages/category', $data, true);

        $data['recommend'] = '';

        //$data['page'] = 'pages/category';
        $data['categories'] = $this->products_model->find($id);

        $data['products'] = $this->products_model->findByCategory($id);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('master', $data);

    }

    public function brand_cat_filter()
    {
        $brand_id = $this->input->post('b_id');
        $category_id = $this->input->post('c_id');

        $result = $this->products_model->brand_cat_filter($brand_id, $category_id);
//        print_r($result);
//        die();
        $output = "";
        $i = 1;
        if ($result) {
            $output .= '
    <h2 class="title text-center">Features Items</h2>';


            foreach ($result as $v_product) {
                $output .= '<div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">';

                $output .= ' <img src="' . base_url() . $v_product->product_image . '" alt="" height="140">';
                $output .= '<h2>' . $v_product->product_price . '</h2>'
                    . ' <p>' . $v_product->product_short_desc . '</p>
            <a href = "javascript:void(0)" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart" ></i > Add
                        to cart </a >
                </div >
                <div class="product-overlay" >
                    <div class="overlay-content" >' .
                    '<h2> ' . $v_product->product_price . '</h2>


                        <a href="javascript:void(0)" class="btn btn-default add-to-cart" data-id="' . $v_product->product_id . '" data-name="' . $v_product->product_name . '"

                               data-price="' . $v_product->product_price . '" data-image="' . $v_product->product_image . '"

                        ><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            
            
        </div>
   
    
    <script>
//    $(document).ready(function () {
//    $(".add-to-cart' . $i . '").on("click",function(){
//
//            var $btn = $(this);
//            $btn.button(\'loading\');
//            // simulating a timeout
//            setTimeout(function () {
//                $btn.button(\'reset\');
//            }, 1000);
//
//            var id = $(this).data(\'id\');
//            var name = $(this).data(\'name\');
//            var price = $(this).data(\'price\');
//            var image = $(this).data(\'image\');
//
//            $.ajax({
//                url: \'cart/add_product\',
//                method: "POST",
//                data: {\'id\': id, \'name\': name, \'price\':price,\'image\' :image},
//                cache: false,
//                success: function (data) {
//                    //alert(data);
//                    alert("Product Added into Cart");
//
//                    console.log(data);
////                    var data = $.parseJSON(msg);
////                    $(\'.due\').html(data);
//                },
//                error: function () {
//                    alert(\'Error Occur...\');
//                }
//            });
//});
//
//        });
    </script>
    
    ';
                $i++;

            }

        } else {
            $output = "<h3>No Product Found</h3>";
        }
        echo $output;
    }


    public function search_filter()
    {
        $val = $this->input->post('search_val');

        $result = $this->products_model->search_filter_by_name($val);

        $output = "";
        $i = 1;
        if ($result) {
            $output .= '
    <h2 class="title text-center">Features Items</h2>';


            foreach ($result as $v_product) {
                $output .= '<div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">';

                $output .= ' <img src="' . base_url() . $v_product->product_image . '" alt="" height="140">';
                $output .= '<h2>' . $v_product->product_price . '</h2>'
                    . ' <p>' . $v_product->product_short_desc . '</p>
            <a href = "javascript:void(0)" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart" ></i > Add
                        to cart </a >
                </div >
                <div class="product-overlay" >
                    <div class="overlay-content" >' .
                    '<h2> ' . $v_product->product_price . '</h2>


                        <a href="javascript:void(0)" class="btn btn-default add-to-cart" data-id="' . $v_product->product_id . '" data-name="' . $v_product->product_name . '"

                               data-price="' . $v_product->product_price . '" data-image="' . $v_product->product_image . '"

                        ><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            
            
        </div>
    
                <script>
//                $(document).ready(function () {
//                $(".add-to-cart' . $i . '").on("click",function(){
//
//                    var $btn = $(this);
//                    $btn.button(\'loading\');
//            // simulating a timeout
//            setTimeout(function () {
//                $btn.button(\'reset\');
//            }, 1000);
//
//            var id = $(this).data(\'id\');
//            var name = $(this).data(\'name\');
//            var price = $(this).data(\'price\');
//            var image = $(this).data(\'image\');
//            
////            alert(id);
////            alert(name);
////            alert(price);
////            alert(image);
//
//            $.ajax({
//                url: \'cart/add_product\',
//                method: "POST",
//                data: {\'id\': id, \'name\': name, \'price\':price,\'image\' :image},
//                cache: false,
//                success: function (data) {
//                    //alert(data);
//                    alert("Product Added into Cart");
//
//                    console.log(data);
////                    var data = $.parseJSON(msg);
////                    $(\'.due\').html(data);
//                },
//                error: function () {
//                    alert(\'Error Occur...\');
//                }
//            });
//
//});
//        });
    </script>
    
    ';
                $i++;

            }

        } else {
            $output = "<h3>No Product Found</h3>";
        }
        echo $output;
    }
}