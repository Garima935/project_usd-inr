<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $this->load->view('register');
    }

    public function checkuser()
    {
        $this->load->model('User_model');
        $data=$this->input->post();
        $data['password']=md5($data['password']);
        $check=$this->User_model->checkuser($data);
        if(empty($check))
        {
            if($this->User_model->add_user($data))
            {
                $this->session->set_flashdata('success','Registered Successfully');
            }
            else
            {
                $this->session->set_flashdata('failure','An error occured');
            }
        }
        else
        {
            $this->session->set_flashdata('failure','User already registered');
        }
        redirect('Register');
    }
}
