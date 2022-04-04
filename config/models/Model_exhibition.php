<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_exhibition extends CI_Model 
{
    public function all_exhibition()
    {
        //$query = $this->db->query("SELECT * FROM tbl_exhibition ORDER BY id DESC");
        
        $sql = "SELECT ex.id, ex.category, ex.name, ex.name_slag, ex.description, ex.short_description, ex.photo, ex.meta_title, ex.meta_keyword, ex.meta_description, wc.id as wc_id, wc.name as wc_hame, wc.content, wc.link, wc.photo as wc_photo FROM tbl_exhibition as ex LEFT JOIN tbl_why_choose as wc ON wc.id = ex.member_id ORDER BY ex.id DESC";
        
        $query = $this->db->query($sql);
        
        return $query->result_array();
    }

    public function exhibition_check($id) {
        $sql = 'SELECT * FROM tbl_exhibition WHERE name_slag=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }

    public function exhibition_detail($id) {
        //$sql = 'SELECT * FROM tbl_exhibition WHERE name_slag=?';
        
        $sql = "SELECT ex.id, ex.category, ex.name, ex.name_slag, ex.description, ex.short_description, ex.photo, ex.meta_title, ex.meta_keyword, ex.meta_description, wc.id as wc_id, wc.name as wc_hame, wc.content, wc.link, wc.photo as wc_photo FROM tbl_exhibition as ex LEFT JOIN tbl_why_choose as wc ON wc.id = ex.member_id WHERE ex.name_slag=? ORDER BY ex.id DESC";
        
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

}