<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_feature extends CI_Model 
{

    public function all_features()
    {
        $query = $this->db->query("SELECT * FROM tbl_feature ORDER BY id ASC");
        return $query->result_array();
    }
    
}