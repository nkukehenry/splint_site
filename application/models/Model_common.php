<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_common extends CI_Model 
{
    public function all_setting()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_home()
    {
        $query = $this->db->query("SELECT * from tbl_page_home WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_about()
    {
        $query = $this->db->query("SELECT * from tbl_page_about WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_faq()
    {
        $query = $this->db->query("SELECT * from tbl_page_faq WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_service()
    {
        $query = $this->db->query("SELECT * from tbl_page_service WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_testimonial()
    {
        $query = $this->db->query("SELECT * from tbl_page_testimonial WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_news()
    {
        $query = $this->db->query("SELECT * from tbl_page_news WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_event()
    {
        $query = $this->db->query("SELECT * from tbl_page_event WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_contact()
    {
        $query = $this->db->query("SELECT * from tbl_page_contact WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_search()
    {
        $query = $this->db->query("SELECT * from tbl_page_search WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_term()
    {
        $query = $this->db->query("SELECT * from tbl_page_term WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_privacy()
    {
        $query = $this->db->query("SELECT * from tbl_page_privacy WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_pricing()
    {
        $query = $this->db->query("SELECT * from tbl_page_pricing WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_photo_gallery()
    {
        $query = $this->db->query("SELECT * from tbl_page_photo_gallery WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_team()
    {
        $query = $this->db->query("SELECT * from tbl_page_team WHERE id=1");
        return $query->first_row('array');
    }
    public function all_page_portfolio()
    {
        $query = $this->db->query("SELECT * from tbl_page_portfolio WHERE id=1");
        return $query->first_row('array');
    }
    public function all_comment()
    {
        $query = $this->db->query("SELECT * from tbl_comment WHERE id=1");
        return $query->first_row('array');
    }
    public function all_social()
    {
        $query = $this->db->query("SELECT * from tbl_social");
        return $query->result_array();
    }
    public function all_news()
    {
        $query = $this->db->query("SELECT * FROM tbl_news ORDER BY news_id DESC");
        return $query->result_array();
    }
    public function all_news_category()
    {
        $query = $this->db->query("SELECT * 
                                FROM tbl_news t1
                                JOIN tbl_category t2
                                ON t1.category_id = t2.category_id
                                ORDER BY t1.news_id DESC");
        return $query->result_array();
    }
    public function all_event()
    {
        $query = $this->db->query("SELECT * FROM tbl_event ORDER BY event_id DESC");
        return $query->result_array();
    }
    public function all_categories()
    {
        $query = $this->db->query("SELECT * FROM tbl_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function extension_check_photo($ext) {
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='webp' && $ext!='WEBP' && $ext!='gif' && $ext!='JPG' && $ext!='PNG' && $ext!='JPEG' && $ext!='GIF' && $ext!='svg') {
            return false;
        } else {
            return true;
        }
    }
    public function get_language_data()
    {
        $query = $this->db->query("SELECT * from tbl_language");
        return $query->result_array();
    }
    public function all_page_publications()
    {
        $query = $this->db->query("SELECT * from page_publications WHERE id=1");
        return $query->first_row('array');
    }

    public function extension_check_attachment($ext) {
        if( $ext!='xlsx' && $ext!='docx' && $ext!='pdf' && $ext!='xls' && $ext!='doc' && $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='JPG' && $ext!='PNG' && $ext!='JPEG' && $ext!='GIF' ) {
            return false;
        } else {
            return true;
        }
    }

    public function all_page_community()
    {
        $query = $this->db->query("SELECT * from tbl_page_community WHERE id=1");
        return $query->first_row('array');
    }

    public function all_pertners()
    {
        $query = $this->db->query("SELECT * FROM tbl_client ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_page_exhibition()
    {
        $query = $this->db->query("SELECT * from tbl_page_exhibition WHERE id=1");
        return $query->first_row('array');
    }

    
    public function get_counters()
    {
        $query = $this->db->query("SELECT * FROM tbl_counters");
        return $query->result();
    }

    public function addCounter($data)
    {
       return $this->db->insert("tbl_counters",$data);
    }

    public function updateCounter($id,$data)
    {
        $this->db->where('id',$id);
        return $this->db->update("tbl_counters",$data);
    }

    public  function deleteCounter($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete("tbl_counters");
    }


    
}