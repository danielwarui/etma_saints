<?php
/**
 * Created by IntelliJ IDEA.
 * User: danielwarui
 * Date: 4/6/2016
 * Time: 11:46 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Saints extends CI_Controller {

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
        $this->load->model('SaintViewModel');

    }
    public function index()
    {
        $data ['saints_query'] = $this->SaintViewModel->get_last_ten_entries();
        $this->load->view('saints_view',$data);


    }
    public function submit()
    {
        $json = file_get_contents('php://input');
        $saintSubmit = (json_decode($json));


        $redirect = '';
// $error = ($signup->terms < 1) ? 'You must agree to terms and conditions before proceeding' : '' ;
        /*  if ($signup->password !== $signup->confirmpassword) {
              $resp = array('error' => 'Confirmation password must match password', 'redirect' => $redirect);
              echo(json_encode($resp));
              die;
          }
          if ($signup->terms < 1) {
              $resp = array('error' => 'You must agree to terms and conditions before proceeding', 'redirect' => $redirect);
              echo(json_encode($resp));
              die;
          }*/

        $saint = array(
            'firstName' => $saintSubmit->first_name,
            'middleName' => $saintSubmit->middle_name,
            'lastName' => $saintSubmit->last_name,
            'age' => $saintSubmit->age,
            'number' => $saintSubmit->number,
        );

        $resp = $this->SaintViewModel->insert_entry($saint);
        $resp = array('error' => 'none', 'redirect' => $redirect);
        echo(json_encode($resp));
        die;
    }
    function saintsSuggest()
    {
        $saints = $this->SaintViewModel->getSaints();
        echo json_encode($saints);
        die;
        # code...
    }
}
