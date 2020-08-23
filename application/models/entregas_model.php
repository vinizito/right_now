<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entregas_model extends CI_Model {

  public function index() {
    return $this->db->get('entregas')->result_array();
  }

  public function store($game) {
    $this->db->insert("tb_games", $game); 
  }

  public function show ($id) {
    return $this->db->get_where('entregas', array(
      "id" => $id
    ))->row_array();
  }
}