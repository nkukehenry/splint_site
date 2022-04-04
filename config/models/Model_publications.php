<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_publications extends CI_Model 
{
    public function show_publications()
    {
        $query = $this->db->query("SELECT * from publications ORDER BY publised_on DESC");
        return $query->result_array();

    }
    
}

