<?php
if ( ! defined('BASEPATH')) exit('No direct script accses allowes');

class M_data extends CI_Model {
	
	function tampil_data($table){
		return $this->db->get($table);
	}
	
	function input_data($data, $table) {
		$this->db->insert($table, $data);
    }

    function edit($where, $table){
        return $this->db->get_where($table,$where);
    }

    function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}

?>

