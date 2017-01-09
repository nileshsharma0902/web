<?php

class insert_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }

    function index() {

        
        //load the database  
         $this->load->database();  
         //load the model  
         //$this->load->insert_model('select');  
         //load the method of model  
       // $data['h']=$this->select->select();  
         //return the data in view  
       //$this->load->view('select_view', $data);  





        //select command
        //$query= $this->db->query('select * from students');
        //$query=$this->db->get("students");
        //$rows=$query->result();
        //$data=array(
            //      'result'=>$rows
            //);
        //$this->load->view('select_view',$data);



        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

        //Validating Email Field
        $this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('dpassword', 'Password', 'required|regex_match[/^[0-9]{10}$/]');

        //Validating Address Field
        //$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'Name' => $this->input->post('dname'),
                'Email' => $this->input->post('demail'),
                'Password' => $this->input->post('dpassword'),
                //'Student_Address' => $this->input->post('daddress')
            );
            //Transfering data to Model
            $this->insert_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('insert_view', $data);
        }
    }

                public function page1()
                {

                    $this->load->view("select_view");
                }

}

?>