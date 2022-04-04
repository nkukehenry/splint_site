<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Activities extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_activities'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM tbl_activities ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_activities',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('faq_id',$id);
        $this->db->update('tbl_activities',$data);
    }

    function delete($id)
    {
        $this->db->where('faq_id',$id);
        $this->db->delete('tbl_activities');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_activities WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function activities_check($id)
    {
        $sql = 'SELECT * FROM tbl_activities WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    
}