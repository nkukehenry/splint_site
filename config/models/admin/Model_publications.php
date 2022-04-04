<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_publications extends CI_Model 
{

    function show() {
        $sql = "SELECT * FROM publications ORDER BY publised_on DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('publications',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('publications',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('publications');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM publications WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function publications_check($id)
    {
        $sql = 'SELECT * FROM publications WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
}