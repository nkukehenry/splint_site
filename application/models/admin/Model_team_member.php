<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_team_member extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_team_member'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show() {
        $sql = "SELECT * FROM tbl_team_member JOIN tbl_committee ON tbl_committee.com_id=tbl_team_member.com_id ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function add($data) {
        $this->db->insert('tbl_team_member',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_team_member',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_team_member');
    }

    function get_team_member($id)
    {
        $sql = 'SELECT * FROM tbl_team_member WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function team_member_check($id)
    {
        $sql = 'SELECT * FROM tbl_team_member WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
   

    function show_committees() {
        $sql = "SELECT * FROM tbl_committee ORDER BY com_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function add_committee($data) {
        $this->db->insert('tbl_committee',$data);
        return $this->db->insert_id();
    }

    function update_committee($data) {
        $this->db->where('com_id',$data['com_id']);
        $this->db->update('tbl_committee',$data);
    }

    function delete_committee($id)
    {
        $this->db->where('com_id',$id);
        $this->db->delete('tbl_committee');
    }

    function get_committee($id)
    {
        $sql = 'SELECT * FROM tbl_committee WHERE com_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }


   


}