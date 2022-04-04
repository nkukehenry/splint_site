<?php

if(!function_exists('old')){

    function old($field){

        $ci   =& get_instance();
        $data = $ci->session->flashdata('data');
       return (isset($data[$field]))?$data[$field]:'';
    }
}


if(!function_exists('truncate')){
    
    function truncate($content,$length=100,$start=0){

        return (strlen($content)>$length)?substr($content, 0,$length)."...":$content;
    }
}

if(!function_exists('trans')){

    function trans($lang_key){
        $ci =& get_instance();
       return $ci->lang->line($lang_key);
    }
}

if(!function_exists('menu_pages')){

    function menu_pages($pageCategoryId){
        $ci =& get_instance();
        $ci->load->model('admin/Model_pages');
        return $ci->Model_pages->pages_by_category($pageCategoryId);
    }
}


if(!function_exists('make_slug')){

    function make_slug($text, string $divider = '-')
    {
      // replace non letter or digits by divider
      $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, $divider);

      // remove duplicate divider
      $text = preg_replace('~-+~', $divider, $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }
}


if(!function_exists('get_counters')){
    function get_counters(){
        $ci =& get_instance();
        $ci->load->model('admin/Model_common');
        return $ci->Model_common->get_counters();
    }
}

if(!function_exists('events_categories')){

    function events_categories(){
        $ci =& get_instance();
        return $ci->db->get('tbl_event_categories')->result();
    }
}



if(!function_exists('publication_types')){

    function publication_types(){
        $ci =& get_instance();
        return $ci->db->get('publication_types')->result();
    }
}


if(!function_exists('send_mail')){
function send_mail($receiver,$message,$title){

        $ci =& get_instance();
        $ci->load->library('email');
        $config=array(
            'charset'=>'utf-8',
            'wordwrap'=> TRUE,
            'mailtype' => 'html'
            );
            
        $ci->email->initialize($config);

        $ci->email->from('no-reply@fitspa.ug', 'FITSPA Website');
        $ci->email->to($receiver);
        $ci->email->subject($title);
        $ci->email->message($message);
        //$ci->email->set_mailtype("html");
        $ci->email->send();
    }
}


?>