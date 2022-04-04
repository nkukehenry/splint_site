<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_event extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_event'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show() {
        $sql = "SELECT * FROM tbl_event ORDER BY event_start_date DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function add($data) {
        $this->db->insert('tbl_event',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('event_id',$id);
        $this->db->update('tbl_event',$data);
    }

    function delete($id)
    {
        $this->db->where('event_id',$id);
        $this->db->delete('tbl_event');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_event WHERE event_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function event_check($id)
    {
        $sql = 'SELECT * FROM tbl_event WHERE event_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }


    function get_event_sessions_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'event_sessions'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_event_session($id)
    {
        $sql = 'SELECT * FROM event_sessions WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function show_event_sessions($id) {
        $sql = "SELECT * FROM event_sessions WHERE event_id='$id' ORDER BY created_at ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add_event_session($data) {
        $this->db->insert('event_sessions',$data);
        return $this->db->insert_id();
    }

    function update_event_session($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('event_sessions',$data);
    }


    function get_session_speakers($id)
    {
        $sql = 'SELECT * FROM event_session_speakers WHERE part_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function exist_check_session_speakers($id)
    {
        $sql = 'SELECT * FROM event_session_speakers WHERE session_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function delete_event_session($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('event_sessions');
    }

    function get_session_speakers_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'event_session_speakers'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show_session_speakers($id) {
        $sql = "SELECT * FROM event_session_speakers WHERE session_id='$id' ORDER BY created_at ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add_session_speaker($data) {
        $this->db->insert('event_session_speakers',$data);
        return $this->db->insert_id();
    }

    function update_session_speaker($id,$data) {
        $this->db->where('part_id',$id);
        $this->db->update('event_session_speakers',$data);
    }

    function check_session_speaker($id)
    {
        $sql = 'SELECT * FROM event_session_speakers WHERE part_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function delete_session_speaker($id)
    {
        $this->db->where('part_id',$id);
        $this->db->delete('event_session_speakers');
    }

    
   
}