<?php

class Auth extends CI_controller
{

	public function login()
	{  	

	   $this->load->view('login');
	}
	public function register()
	{
       if(isset($_POST['register'])) {
       	$this->form_validation->set_rules('username', 'Username', 'required');
       	$this->form_validation->set_rules('email', 'Email', 'required');
       	$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
       	$this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
       	$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]');

       

       	if($this->form_validation->run() == TRUE) {
       		echo 'form validated';

       		$data = array(
       			'username'=>$_POST['username'],
       			'email'=>$_POST['email'],
       			'password'=>md5($_POST['password']),
       			'gender'=>$_POST['gender'],
       			'created_date'=>date('Y-m-d'),
       			'phone'=>$_POST['phone']
       		);
       		$this->db->insert('users', $data); 

            $this->session->set_flashdata("success", "Your account has been registered. You can login now");
            redirect("auth/register", "refresh");
       	

        }
        
       }    

	   $this->load->view('register');
}

}