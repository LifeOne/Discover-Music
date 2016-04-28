<?php
class User extends CI_Model {
     function register($user) {
      //  $user = $this->db->query($query2)->row_array();
        $password = $user['reg_password'];
        $salt = bin2hex(openssl_random_pseudo_bytes(22));
        $password = md5($password . $salt);
        $query = "INSERT INTO users (username, email, full_name, password, salt, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())";
        $values = array($user['reg_username'], $user['reg_email'], $user['reg_fullname'], $password, $salt);
        $this->db->query($query, $values);
     }
     function get_id($username) {
       $query = "SELECT id FROM users WHERE username = '$username'";
       $result = $this->db->query($query)->row_array();
       return $result['id'];
     }
     function login($user) {
       $query = "SELECT * FROM users WHERE username = '{$user['lg_username']}'";
       $return = $this->db->query($query)->row_array();

       $password = md5($user['lg_password'] . $return['salt']);
       $query = "SELECT * FROM users WHERE username = '{$user['lg_username']}' AND password = '{$password}'";
       $u = $this->db->query($query)->row_array();

       if($u) {
         $rv = array("logged" => 5, "username" => $u['username'], "id" => $u['id']);
       } else {
         $rv = null;
       }
       return $rv;
     }

     function add_channel($name) {
       $name = $name['channel'];
       $query = "INSERT INTO channels (channelurl, last_video, user_id) VALUES ('{$name}', null, {$this->session->userdata['user_id']})";
       $this->db->query($query);
     }
     function remove_channel($id) {
       $query = "DELETE FROM channels WHERE id = {$id}";
       $this->db->query($query);
     }
     function update_lastvideo($a) {
       $query = "UPDATE channels SET last_video = '{$a['vidurl']}' WHERE id = {$a['id']}";
       $this->db->query($query);
     }
     function get_lastvideo($id) {
       $query = "SELECT * FROM channels WHERE id = {$id}";
       $channel = $this->db->query($query)->row_array();
       return $channel['id'];
     }
     function get_users_channels($id) {
       $query = "SELECT channels.id, channels.channelurl, channels.last_video FROM channels LEFT JOIN users ON channels.user_id = users.id WHERE users.id = {$id}";
       return $this->db->query($query)->result_array();
     }

   }
 ?>
