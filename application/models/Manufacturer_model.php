<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer_model extends CI_Model{

    function save_manufacturer(){


        $manufacturer_data['manufacturer_name']= $this->input->post('manufacturerName',TRUE);
        $manufacturer_data['manufacturer_short_desc']= $this->input->post('manufacturerShortDesc',TRUE);
        $manufacturer_data['manufacturer_long_desc']= $this->input->post('manufacturerLongDesc',TRUE);
        $manufacturer_data['manufacturer_status']= 1;

//        echo '<pre>';
//        print_r($manufacturer_data);

        $this->db->insert('manufacturer',$manufacturer_data);

    }

    function  select_all_manufacturer(){

            $result =$this->db->select('*')
                 ->from('manufacturer')
                 ->get()->result();

            return $result;
    }

    function change_manufacturer_status($manufacturer_id,$status){
        $data['manufacturer_status'] =$status;
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('manufacturer',$data);
    }
    function get_manufacturer_details($manufacturer_id){
        $result = $this->db->select('*')->from('manufacturer')
                        ->where('manufacturer_id',$manufacturer_id)
                        ->get()->row();


        return $result;
    }

    function update_manufacturer(){
        $manufacturer_data['manufacturer_name']= $this->input->post('manufacturerName',TRUE);
        $manufacturer_data['manufacturer_short_desc']= $this->input->post('manufacturerShortDesc',TRUE);
        $manufacturer_data['manufacturer_long_desc']= $this->input->post('manufacturerLongDesc',TRUE);


        $manufacturer_id = $this->input->post('manufacturerId',TRUE);
//
//        unset($data['category_id']);
        $this->db->where('manufacturer_id',$manufacturer_id)
                 ->update('manufacturer',$manufacturer_data);
    }


    function  get_all_active_manufacturer(){

        $result = $this->db->select('*')
            ->from('manufacturer')
            ->where('manufacturer_status',1)
            ->get()->result();
        return $result;
    }
}