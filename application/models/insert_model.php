<?php

class insert_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
 function form_insert($data){
 //Inserting in Table(students) of Database(college) 
       $this->db->insert('students', $data);  
    } 


    public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('students');  
         return $query;  
      }     
   
}

?>
