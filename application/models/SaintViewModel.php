<?php

/**
 * Created by IntelliJ IDEA.
 * User: danielwarui
 * Date: 4/6/2016
 * Time: 3:06 PM
 */
class SaintViewModel extends CI_Model
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
        $query = $this->db->get('tbl_saints');
        return $query->result();
    }

    public function insert_entry($data)
    {
        $this->db->insert('tbl_saints', $data);
    }

    public function update_entry()
    {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    public function getSaints()
    {
        $query_str = 'SELECT id, CONCAT( firstName," ",   middleName," ", lastName) as name,CONCAT ("0",number) as number from tbl_saints';
        $query = $this->db->query($query_str);
        return $query->result();
        # code...
    }

}