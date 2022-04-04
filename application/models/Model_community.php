<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_community extends CI_Model 
{
    public function get_all_partners()
    {
        $query = $this->db->query("SELECT * FROM tbl_client ORDER BY id ASC");
        return $query->result_array();
    }

    public function get_our_community_gold()
    {
        $query = $this->db->query("SELECT * FROM tbl_why_choose JOIN tbl_pricing_table ON tbl_pricing_table.id = tbl_why_choose.category_id WHERE tbl_why_choose.category_id=4 ORDER BY tbl_why_choose.id ASC");
        return $query->result_array();
    }

    public function get_our_community_silver()
    {
        $query = $this->db->query("SELECT * FROM tbl_why_choose JOIN tbl_pricing_table ON tbl_pricing_table.id = tbl_why_choose.category_id WHERE tbl_why_choose.category_id=3 ORDER BY tbl_why_choose.id ASC");
        return $query->result_array();
    }

    public function get_our_community_bronze()
    {
        $query = $this->db->query("SELECT * FROM tbl_why_choose JOIN tbl_pricing_table ON tbl_pricing_table.id = tbl_why_choose.category_id WHERE tbl_why_choose.category_id=2 ORDER BY tbl_why_choose.id ASC");
        return $query->result_array();
    }

    public function get_our_community_basic()
    {
        $query = $this->db->query("SELECT * FROM tbl_why_choose JOIN tbl_pricing_table ON tbl_pricing_table.id = tbl_why_choose.category_id WHERE tbl_why_choose.category_id=1 ORDER BY tbl_why_choose.id ASC");
        return $query->result_array();
    }

    function save_registration($data) {
        $this->db->insert('tbl_subscriber',$data);
        return $this->db->insert_id();
    }
    
    function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_subscriber'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_subscriber($email){
        $this->db->where('subs_email',$email);
        return $this->db->get('tbl_subscriber')->row_array();
    }

}