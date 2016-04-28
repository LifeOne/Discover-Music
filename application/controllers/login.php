<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
    $data = array("logged" => $this->session->userdata('logged'));
		$this->load->view('login', $data);


	}
	public function register() {
		$this->load->view('register');
	}
	public function guest() {
		$this->session->set_userdata("logged", 1);
		redirect('/');
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect('/login');
	}
	public function vr_1() {
		$post = $this->input->post();
		// username
		// password
		// cpassword
		// email
		// full name
    $this->load->library('form_validation');
		$this->form_validation->set_rules("reg_username", "Username", "trim|required|xss_clean|is_unique[users.username]");
		$this->form_validation->set_rules("reg_password", "Password", "trim|required|matches[reg_password_confirm]");
		$this->form_validation->set_rules("reg_password_confirm", "Password", "trim|required");
    $this->form_validation->set_rules("reg_email", "Email", 'trim|xss_clean');
		$this->form_validation->set_rules("reg_fullname", "Name", "xss_clean");

    if($this->form_validation->run()) {
			$this->load->model('user');
			$this->user->register($post);

			$id = $this->user->get_id($post['reg_username']);
			$this->session->set_userdata('logged', '5');
			$this->session->set_userdata('username', $post['reg_username']);
			$this->session->set_userdata('user_id', $id);
			redirect('/');
		} else {
			redirect('/register');
		}
	}
	public function vl_1() {
		$post = $this->input->post();
		$this->load->library('form_validation');
		$this->form_validation->set_rules("lg_username", "Username", "trim|required|xss_clean");
		$this->form_validation->set_rules("lg_password", "Password", "trim|required|xss_clean");
		if($this->form_validation->run()) {
			$this->load->model('user');
			$u = $this->user->login($post);
			if($u != null) {
				//LOGIN SUCCESS
				$this->session->set_userdata('logged', '5');
				$this->session->set_userdata('username', $u['username']);
				$this->session->set_userdata('user_id', $u['id']);
				redirect('/');
			} else {
				redirect('/login');
			}
		} else {
			redirect('/login');
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
