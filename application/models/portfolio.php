<?php
class Portfolio extends CI_Model {
  function get_projects($in) {
    if($in == 'all') {
      $query = "SELECT * FROM projects";
      $result = $this->db->query($query)->result_array();
      // var_dump($result); die();
      return $result;
    } else {
      $query = "SELECT * FROM projects LEFT JOIN project_tags ON projects.id = project_tags.project_id WHERE tag = '{$in}'";
      $result = $this->db->query($query)->result_array();
      return $result;
    }
  }
  function get_tags() {
    $query = "SELECT * FROM project_tags";
    return $this->db->query($query)->result_array();
  }




}
?>
