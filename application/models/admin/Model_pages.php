<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pages extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_pages'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show() {
        $sql = "SELECT
                t1.page_id,
                t1.page_title,
                t1.page_content,
                t1.photo,
                t1.banner,
                t1.page_category_id,
                t2.category_id,
                t2.category_name
                FROM tbl_pages t1
                JOIN tbl_page_category t2
                ON t1.page_category_id = t2.category_id
                ORDER BY t1.page_id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function add($data) {
        $this->db->insert('tbl_pages',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('page_id',$id);
        $this->db->update('tbl_pages',$data);
    }

    function delete($id)
    {
        $this->db->where('page_id',$id);
        $this->db->delete('tbl_pages');
    }

    function getData($id)
    {
        $sql   = 'SELECT * FROM tbl_pages WHERE page_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function page_by_slug($slug)
    {
        $sql   = 'SELECT * FROM tbl_pages WHERE page_slag=?';
        $query = $this->db->query($sql,array($slug));
        return $query->first_row('array');
    }

    function get_category()
    {
        $sql = 'SELECT * FROM tbl_page_category ORDER BY category_name ASC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function pages_check($id)
    {
        $sql = 'SELECT * FROM tbl_pages WHERE page_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

     public function pages_by_category($id)
    {
        $sql = 'SELECT * 
                FROM tbl_pages t1
                JOIN tbl_page_category t2
                ON t1.page_category_id = t2.category_id
                WHERE t1.page_category_id=? AND t1.is_published=1
                ORDER BY t1.page_id ASC';
        $query = $this->db->query($sql,array($id));
        return $query->result();
    }

   
}