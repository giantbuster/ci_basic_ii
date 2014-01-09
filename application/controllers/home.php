<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view('view_home');
	}

	public function register_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['submit_error'] = validation_errors();
			$this->load->view('view_home', $data);
		} else {
			$data = array(
					'name' => $this->input->post('name'),
					'location' => $this->input->post('location'),
					'language' => $this->input->post('language'),
					'comment' => $this->input->post('comment')
				);
			$this->session->set_userdata($data);
			if (!$this->session->userdata('count')){
				$this->session->set_userdata('count', 1);
			} else {
				$this->session->set_userdata('count', $this->session->userdata('count') + 1);
			}

			$this->session->set_flashdata('submitted', 'Thanks for submitting this form! You have submitted this form '.$this->session->userdata('count').' times now.');
			redirect('home/submit');
		}
	}
	public function submit(){
		$this->load->view('view_results');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */