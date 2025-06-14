<?php
class News extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_news(){
        return $this->db->get('news')->result_array();
    }
}