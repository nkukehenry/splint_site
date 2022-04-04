<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pricing extends CI_Model 
{
    public function all_pricing()
    {
        $query = $this->db->query("SELECT * FROM tbl_pricing_table ORDER BY id ASC");
        return $query->row_array();
    }
    public function get_all_pricing()
    {
        $query = $this->db->query("SELECT * FROM tbl_pricing_table ORDER BY id ASC");
        return $query->result_array();
    }

    public function all_pricing_items()
    {
        $query = $this->db->query("SELECT * FROM pricing_item WHERE discription='Member Benefit Item' ORDER BY item_id ASC");
        return $query->result_array();
    }

    function show_all_pricing_one() { //Gold
        $query = $this->db->query("SELECT * FROM tbl_pricing_table WHERE id=1");
        return $query->row_array();
    }
    function show_all_pricing_two() { //Gold
        $query = $this->db->query("SELECT * FROM tbl_pricing_table  WHERE id=2");
        return $query->row_array();
    }
    function show_all_pricing_three() { //Gold
        $query = $this->db->query("SELECT * FROM tbl_pricing_table  WHERE id=3");
        return $query->row_array();
    }
    function show_all_pricing_four() { //Gold
        $query = $this->db->query("SELECT * FROM tbl_pricing_table  WHERE id=4");
        return $query->row_array();
    }

    function getPackageIds($results){
         $res = array();
        foreach($results as $row){
            array_push($res, $row->pi_id);
        }
        return $res;
    }

    function packageArray($package) { //Basic / Free
        //$query = $this->db->query("SELECT pi_id FROM pricing_category_item  WHERE  pc_id=$package AND status=1 ORDER BY status DESC");

        $query = $this->db->query("SELECT pricing_category_item.pi_id FROM pricing_category_item JOIN pricing_item ON pricing_item.item_id=pricing_category_item.pi_id WHERE pricing_category_item.pc_id=$package AND pricing_category_item.status=1 AND pricing_item.discription='Member Benefit Item' ORDER BY pricing_item.item_id ASC");

        

        return $this->getPackageIds($query->result());
    }

     function show_pricing_item_one() { //Basic / Free
        $query = $this->db->query("SELECT * FROM pricing_category_item JOIN pricing_item ON pricing_item.item_id=pricing_category_item.pi_id WHERE pricing_category_item.pc_id=1 AND pricing_item.discription='Member Benefit Item' ORDER BY pricing_category_item.status DESC");
        return $query->result_array();
    }

    function show_pricing_items() { //Basic / Free
        $query = $this->db->query("SELECT * FROM pricing_category_item JOIN pricing_item ON pricing_item.item_id=pricing_category_item.pi_id WHERE pricing_category_item.pc_id=1 AND pricing_item.discription='Member Benefit Item' ORDER BY pricing_category_item.status DESC");
        return $query->result_array();
    }


    function show_pricing_item_two() { //Bronze
        $query = $this->db->query("SELECT * FROM pricing_category_item JOIN pricing_item ON pricing_item.item_id=pricing_category_item.pi_id WHERE pricing_category_item.pc_id=2 AND pricing_item.discription='Member Benefit Item' ORDER BY pricing_category_item.status DESC");
        return $query->result_array();
    }
    function show_pricing_item_three() { //Silver
        $query = $this->db->query("SELECT * FROM pricing_category_item JOIN pricing_item ON pricing_item.item_id=pricing_category_item.pi_id WHERE pricing_category_item.pc_id=3 AND pricing_item.discription='Member Benefit Item' ORDER BY pricing_category_item.status DESC");
        return $query->result_array();
    }
    function show_pricing_item_four() { //Gold
        $query = $this->db->query("SELECT * FROM pricing_category_item JOIN pricing_item ON pricing_item.item_id=pricing_category_item.pi_id WHERE pricing_category_item.pc_id=4 AND pricing_item.discription='Member Benefit Item' ORDER BY pricing_category_item.status DESC");
        return $query->result_array();
    }

    function show_partner_items() { //Partner
        $query = $this->db->query("SELECT * FROM pricing_item WHERE discription='Partner Benefit Item' ORDER BY item_id ASC");
        return $query->result_array();
    }

}
