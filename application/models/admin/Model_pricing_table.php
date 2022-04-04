<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pricing_table extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_pricing_table'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM tbl_pricing_table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function add($data) {
        $this->db->insert('tbl_pricing_table',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_pricing_table',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_pricing_table');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_pricing_table WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function pricing_table_check($id)
    {
        $sql = 'SELECT * FROM tbl_pricing_table WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
    function add_pricing_item($data) {
        $this->db->insert('pricing_item',$data);
        return $this->db->insert_id();
    }

    function show_pricing_item() {
        $sql = "SELECT * FROM pricing_item WHERE discription='Member Benefit Item'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show_partner_item() {
        $sql = "SELECT * FROM pricing_item WHERE discription='Partner Benefit Item'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function update_pricing_item($data) {
        
        $this->db->where('item_id',$data['item_id']);
        $this->db->update('pricing_item',$data);
    }

    function delete_pricing_item($id)
    {
        $this->db->where('item_id',$id);
        $this->db->delete('pricing_item');
    }

    function add_pricing_category_item($data) {
        $this->db->insert('pricing_category_item',$data);
        return $this->db->insert_id();
    }
    
    function show_pricing_category_item() {
        $sql = "SELECT * FROM pricing_category_item";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function update_pricing_category_item($data) {
        
        $this->db->where('pc_id',$data['pc_id']);
        $this->db->where('pi_id',$data['pi_id']);
        $this->db->replace('pricing_category_item',$data);
    }

}


