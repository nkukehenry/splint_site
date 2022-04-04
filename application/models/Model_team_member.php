<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_team_member extends CI_Model 
{
    public function all_team_member()
    {
        $query = $this->db->query("SELECT * FROM tbl_team_member JOIN tbl_committee ON tbl_committee.com_id=tbl_team_member.com_id ORDER BY id ASC");
        return $query->result_array();
    }

    public function team_member_check($id) {
        $sql = 'SELECT * FROM tbl_team_member WHERE name_slag=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }

    public function team_member_detail($id) {
        $sql = 'SELECT * FROM tbl_team_member WHERE name_slag=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
}