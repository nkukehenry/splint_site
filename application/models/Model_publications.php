<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_publications extends CI_Model 
{
    public function show_publications()
    {
        //$query = $this->db->query("SELECT * from publications ORDER BY publised_on DESC");
        //return $query->result_array();

        return $this->db->select('publications.*,publication_types.id as type_id, publication_types.type_name')
                 ->join('publication_types','publication_types.id = publications.publication_type_id')
                 ->order_by('publised_on','desc')
                 ->get('publications')
                 ->result_array();

    }

    public function save_downloader(){

        $data = array(
            'email_address' =>$this->input->post('email'),
            'publication_id'=>$this->input->post('resource')
        );

        $this->db->insert('publication_downloads',$data);
    }


    public function get_downloads(){

        return $this->db
                ->select('publication_downloads.*,publications.name as file')
                ->join('publications','publications.ids = publication_downloads.publication_id')
                ->where('admin_notified',0)
                ->get('publication_downloads')
                ->result();
    }

    public function mark_uploaded(){

        return $this->db->where('admin_notified',0)
                ->update('publication_downloads',array('admin_notified'=>1));
    }
    
    
}

