<?php

/**
 * Created by IntelliJ IDEA.
 * User: danielwarui
 * Date: 4/6/2016
 * Time: 3:06 PM
 */
class EventsViewModel extends CI_Model
{

private $title = '';
private $content = '';
protected $date = '';

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get('tbl_events');
        return $query->result();
    }

    public function insert_entry($data)
    {
        $this->db->insert('tbl_events', $data);
    }

    /*public function update_entry()
    {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }*/

}