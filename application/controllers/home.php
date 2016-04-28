<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		if($this->session->userdata("logged")) {
			if($this->session->userdata("logged") > 0) {

				$this->session->set_userdata("channels",$this->get_channels());

				$data = array(
					"username" => $this->session->userdata('username'),
					"channels" => $this->session->userdata('channels')
				);
				$this->load->view('listen', $data);
			}
		} else {
			redirect('/login');
		}
	}
	public function help() {
		$this->load->view('help');
	}
	public function settings() {
		$this->load->model('user');
		$data = $this->user->get_users_channels($this->session->userdata['user_id']);
		$this->load->view('settings', array("data" => $data));
	}
	public function add_channel() {
		$post = $this->input->post();
		$this->load->model('user');
		$this->user->add_channel($post);
		redirect('/home/settings/');
	}
	public function remove_channel($id) {
		$this->load->model('user');
		$this->user->remove_channel($id);
		redirect('/home/settings/');
	}
	public function get_channels() {
		$id = $this->session->userdata['user_id'];
		$this->load->model('user');
		return $this->user->get_users_channels($id);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
