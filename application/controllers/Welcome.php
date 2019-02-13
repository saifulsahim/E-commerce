<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_model');
    }

    public function index()
    {

        $data = array();

        $data['title'] = "Home";

        $data['slider'] = $this->load->view('pages/slider', '', true);

        $data['all_active_product'] = $this->welcome_model->all_active_product();

        //$data['categories']= $this->products_model->find($id);


        /*
         * Start Pagination
         */
//
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/E-commerce/';
        $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = 1;
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';


        $this->pagination->initialize($config);
        $data['all_published_product'] = $this->welcome_model->all_published_product_info($config['per_page'], $this->uri->segment(3));


        /*
         * End pagination
         */


        $data['featured_product'] = $this->load->view('pages/featured_product', $data, true);

        $data['category'] = $this->load->view('pages/category', $data, true);

        $data['recommend'] = $this->load->view('pages/recommend', $data, true);

        $this->load->view('master', $data);
    }


    public function accounts()
    {

        $data = array();

        $data['title'] = "Accounts";

        $data['slider'] = '';

        $data['featured_product'] = $this->load->view('pages/featured_product', '', true);
//        "<h1 align='center'>Accounts Page Content Here.....</h1>";

        $data['category'] = $this->load->view('pages/category', $data, true);

        $data['recommend'] = $this->load->view('pages/recommend', $data, true);

        $this->load->view('master', $data);

    }

    public function admin_dashboard()
    {


    }

    public function product_details($product_id)
    {

        $data = array();

        $data['title'] = "Product Details";

        $data['slider'] = '';

        $data['product_info'] = $this->welcome_model->select_product_by_id($product_id);

        $data['featured_product'] = $this->load->view('pages/product_details', $data, true);

        $data['category'] = $this->load->view('pages/category', $data, true);

        $data['recommend'] = $this->load->view('pages/recommend', $data, true);

        $data['manufacturer'] = '';

        $data['price_range'] = '';

        $this->load->view('master', $data);
    }

    public function search_product()
    {
        $data = array();
        $data['title'] = "Home";
        $data['slider'] = $this->load->view('pages/slider', '', true);
// $data['featured_product']=  $this->load->view('pages/product_details',$data,true);


        $data['manufacturer'] = '';
        $search_text = $this->input->post('search_text');


//        echo '<pre>';
//        print_r($data);
//        exit();

        $data['all_active_product'] = $this->welcome_model->all_active_product();

        $data['all_search_product'] = $this->welcome_model->search_product($search_text);

        $data['featured_product'] = $this->load->view('pages/search_list', $data, true);

        $data['category'] = $this->load->view('pages/category', '', true);
        $data['recommend'] = $this->load->view('pages/recommend', '', true);
//$data['featured_product']= $this->load->view('pages/featured_product',$data,true);


// $data['category']=  $this->load->view('pages/category','',true);

// $data['recommend']=  $this->load->view('pages/recommend','',true);

// $this->load->view('pages/search_list',$data,true);

        $this->load->view('master', $data);

    }


//    public function category($id)
//    {
//        $data['title'] = 'Catgeory';
//        $data['slider'] = '';
//
//        $data['featured_product'] = '';
//
//        $data['category'] = $this->load->view('pages/category', $data, true);
//
//        $data['recommend'] = '';
//
//        //$data['page'] = 'pages/category';
//        $data['categories'] = $this->products_model->find($id);
//
//        $data['products'] = $this->products_model->findByCategory($id);
////        echo '<pre>';
////        print_r($data);
////        exit();
//        $this->load->view('master', $data);
//
//    }

}

//{
//    $data =array();
//
//    $search_text = $this->input->post('search_text');
//
//    $data['title']= "Home";
//
//    $data['slider']= $this->load->view('pages/slider','',true);
//
//    $data['all_active_product']= $this->welcome_model->all_active_product();
//
//    $data['all_search_product']= $this->welcome_model->search_product($search_text);
//
////        echo '<pre>';
////        print_r($data);
////        exit();
//
//    $data['featured_product']= $this->load->view('pages/featured_product',$data,true);
//
//    $data['category']=  $this->load->view('pages/category','',true);
//
//    $data['recommend']=  $this->load->view('pages/recommend','',true);
//
//    $this->load->view('master',$data);
//
//}



