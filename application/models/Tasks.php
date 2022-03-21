<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Model {
 
    public $date;
    public $task;
    public $description;
    public $status;
    
    public function get_tasks()
    {
            $query = $this->db->get('tasks');
            return $query->result();
    }

    public function create_task()
    {
            $this->title    = $_POST['title']; 
            $this->content  = $_POST['content'];
            $this->date     = $_POST['date'];
            $this->description  = $_POST['description'];
            $this->status = 1;
            $this->db->insert('tasks', $this);
    }

    public function update_task()
    {
        $this->title    = $_POST['title']; 
        $this->content  = $_POST['content'];
        $this->date     = $_POST['date'];
        $this->description  = $_POST['description'];
      $this->date     = time();

            $this->db->update('task', $this, array('tasks_id' => $_POST['id']));
    }
    
    public function delete_task()
    {
           
        $this->status = 0;
        $this->db->update('task', $this, array('tasks_id' => $_POST['id']));
    }

    public function detail_task()
    {


        $query =$this->db->select('*');
		$this->db->from('task');
		$this->db->where('tasks_id',$_POST['id']);
		$resultado=$this->db->get();
		return $resultado->result();






    }


}