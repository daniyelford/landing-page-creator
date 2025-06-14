<?php
class Map_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}
	
	protected $table = 'map';
	
	public function insert_data($data){
	    return $this->db->insert($this->table,$data);
	}
	public function delete_data($data){
	    return $this->db->delete($this->table,$data);
	}
	public function select_where($con){
	    return $this->db->get_where($this->table,$con)->result_array();
	}
	public function s_a(){
	    return $this->db->query("SELECT * FROM ".$this->table)->result_array();
	}
}