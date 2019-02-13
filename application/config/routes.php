<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


    $route['add-manufacturer']= 'manufacturer/add_manufacturer';
    $route['manage-manufacturer']='manufacturer/manage_manufacturer';
    $route['change-manufacturer-status/(.+)/(.+)']= 'manufacturer/change_manufacturer_status/$1/$2';
    $route['edit-manufacturer/(.+)']= 'manufacturer/edit_manufacturer/$1';



    $route['add-product']= 'products/add_product';
    $route['manage-product']='products/manage_product';
    $route['product-published/(.+)']= 'products/product_published/$1';
    $route['product-unpublished/(.+)']= 'products/product_unpublished/$1';
    $route['product-delete/(.+)']= 'products/product_delete/$1';
    $route['product-edit/(.+)']= 'products/product_edit/$1';
    $route['update-product/']= 'products/update_product/';


    $route['edit-category/(.+)']= 'products/edit_category/$1';
    $route['change-category-status/(.+)/(.+)']= 'products/change_category_status/$1/$2';
    $route['all-category']= 'products/show_all_category';
    $route['add-category']= 'products/show_add_category_form';



    $route['register-admin']= 'admin/show_admin_register_form';
    $route['manage-admin']='admin/manage_admin';
    $route['change-user-status/(.+)/(.+)']='admin/change_user_status/$1/$2';
    $route['edit-user/(.+)']= 'admin/edit_user/$1';
    $route['update-user']= 'admin/update_user';


    $route['admin-logout']= 'admin_login/check_admin_logout';
    $route['admin-dashboard']='admin/show_dashboard';
    $route['admin-login']='admin_login/check_admin_login';
    $route['admin']='admin_login';

    $route['product-details/(.+)']='Welcome/product_details/$1';

    /*
     * Start Cart
     */

    $route['add-to-cart']='cart/add_to_cart';
    $route['show-cart']='cart/show_cart';
    $route['delete-to-cart/(.+)']= 'cart/delete_to_cart/$1';
    $route['update-cart-product-quantity']='cart/update_cart_product_quantity';

    /*
     * CheckOut Routes
     *
     */

    $route['checkout']='checkout/index';
    $route['customer-registration']='checkout/customer_registration';
    $route['login'] = 'checkout/customer_login_check';
    $route['logout'] = 'checkout/logout';
    $route['billing'] = 'checkout/billing';
    $route['update-billing'] ='checkout/update_billing';
    $route['shipping'] = 'checkout/shipping';
    $route['save-shipping'] = 'checkout/save_shipping';
    $route['payment'] = 'checkout/payment';
    $route['place-order'] ='checkout/place_order';
    $route['success']= 'checkout/success';
    $route['fail']= 'checkout/fail';
    $route['cancel']= 'checkout/cancel';
    $route['order-successful'] ='checkout/order_successful';


    $route['manage-invoice'] = 'invoice/manage_invoice';
    $route['edit-invoice/(.+)']='invoice/edit_invoice/$1';
    $route['delete-invoice/(.+)'] = 'invoice/delete_invoice/$1';
    $route['update-invoice']='invoice/update_invoice';



    /*
     * End Cart
     */


    $route['default_controller'] = 'Welcome';
    $route['404_override'] = '';
    $route['translate_uri_dashes'] = FALSE;
