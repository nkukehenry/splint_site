<?php


if(!function_exists('redis_init')){
    function redis_init()
    {
      $ci =& get_instance();
      $ci->load->library('redis', array('connection_group' => 'slave'), 'redis');
    }
  }
  
 
if(!function_exists('cache_data')){
   function cache_data($key,$data){
     $ci =& get_instance();
     redis_init();
     uncache($key);
     $ci->redis->set($key,json_encode($data));
  }
}

 
if(!function_exists('get_data')){
  function get_data($key){
    redis_init();
    $ci =& get_instance();
    $cachedata = $ci->redis->get($key);
     if($cachedata)
       return json_decode($cachedata );
 }
}


if(!function_exists('cache_str')){
   function cache_str($key,$data){
     redis_init();
     uncache($key);
     $ci =& get_instance();
     $ci->redis->set($key,$data);
 }
}
 
if(!function_exists('get_cached_str')){
  function get_cached_str($key){
    redis_init();
    $ci =& get_instance();
    return $ci->redis->get($key);
 }
}

 
if(!function_exists('uncache')){
   function uncache($key){
    redis_init();
    $ci =& get_instance();
    return $ci->redis->del($key);
 }
}

if(!function_exists('clear_all_cache')){
  function clear_all_cache(){
      redis_init();
     $ci =& get_instance();
     return $ci->redis->command("flushall");
 }
}

?>