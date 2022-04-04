<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_publications extends CI_Model 
{

    function show() {

       return $this->db->select('publications.*,publication_types.id as type_id, publication_types.type_name')
                 ->join('publication_types','publication_types.id = publications.publication_type_id')
                 ->order_by('publised_on','desc')
                 ->get('publications')
                 ->result_array();
    }

    function add($data) {
        $this->db->insert('publications',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('ids',$id);
        $this->db->update('publications',$data);
    }

    function delete($id)
    {
        $this->db->where('ids',$id);
        $this->db->delete('publications');
    }

    function getData($id)
    {
        $this->publications_check($id);
    }

    function publications_check($id)
    {
        return $this->db->select('publications.*,publication_types.id as type_id, publication_types.type_name')
                 ->join('publication_types','publication_types.id = publications.publication_type_id')
                 ->where('publications.ids',$id)
                 ->get('publications')
                 ->row_array();
    }

    public function get_types(){

        return $this->db->get('publication_types')->result();
    }


    
}