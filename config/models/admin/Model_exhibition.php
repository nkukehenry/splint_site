<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_exhibition extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_exhibition'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
       // $sql = "SELECT * FROM tbl_exhibition";
        
        $sql = "SELECT ex.id, ex.category, ex.name as ex_hame, ex.name_slag, ex.description, ex.short_description, ex.photo as ex_photo, ex.meta_title, ex.meta_keyword, ex.meta_description, wc.id as wc_id, wc.name as wc_hame, wc.content, wc.link, wc.photo as wc_photo FROM tbl_exhibition as ex JOIN tbl_why_choose as wc ON wc.id = ex.member_id LEFT JOIN";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_exhibition',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_exhibition',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_exhibition');
    }

    function getData($id)
    {
        //$sql = 'SELECT * FROM tbl_exhibition WHERE id=?';
        
        $sql = "SELECT ex.id, ex.category, ex.name as ex_hame, ex.name_slag, ex.description, ex.short_description, ex.photo as ex_photo, ex.meta_title, ex.meta_keyword, ex.meta_description, wc.id as wc_id, wc.name as wc_hame, wc.content, wc.link, wc.photo as wc_photo FROM tbl_exhibition as ex JOIN tbl_why_choose as wc ON wc.id = ex.member_id WHERE ex.id=? LEFT JOIN";
        
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function exhibition_check($id)
    {
        $sql = 'SELECT * FROM tbl_exhibition WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
}