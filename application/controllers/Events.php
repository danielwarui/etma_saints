<?php
/**
 * Created by IntelliJ IDEA.
 * User: danielwarui
 * Date: 4/6/2016
 * Time: 11:46 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->config->load('facebook');
        $this->load->model('EventsViewModel');

    }
    public function index()
    {
        $this->load->view('events_view');
    }

    public function submit()
    {
        $json = file_get_contents('php://input');
        $eventSubmit = (json_decode($json));
        $redirect = '';
        $event = array(
            'start' => date('Y-m-d H:i:s',strtotime($eventSubmit->start)),
            'end' => date('Y-m-d H:i:s',strtotime($eventSubmit->end)),
            'target' => $eventSubmit->target,
            'location' => $eventSubmit->location,
            'charge' => $eventSubmit->charge,
        );
        // print_r($event);die;

        $resp = $this->EventsViewModel->insert_entry($event);
        $resp = array('error' => 'none', 'redirect' => $redirect);
        echo(json_encode($resp));
        die;
    }
}
