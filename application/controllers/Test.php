<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		// $this->config->load('facebook');
		$this->load->library(array('form_validation'));
		$this->load->model('EventsViewModel');

	}
	public function index()
	{
		$data ['events_query'] = $this->EventsViewModel->get_last_ten_entries();
		$this->load->view('test_pages/home_page',$data);
//		$this->load->view('test',$data);
	}
	public function submit()
	{
		$json = file_get_contents('php://input');
		$eventSubmit = (json_decode($json));
		$redirect = '';
		$event = array(
			'start' => $eventSubmit->first_name,
			'end' => $eventSubmit->middle_name,
			'target' => $eventSubmit->last_name,
			'location' => $eventSubmit->age,
			'charge' => $eventSubmit->number,
		);

		$resp = $this->EventsViewModel->insert_entry($event);
		$resp = array('error' => 'none', 'redirect' => $redirect);
		echo(json_encode($resp));
		die;
	}
}
