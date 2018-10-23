<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
  	 	$this->load->model('user_model');
        $this->load->library('session');
	}

	public function index(){
		$data['users'] = $this->users_model->getAllUsers();
		$this->load->view('home_page.php', $data);
	}

    public function register_user(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['user_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');


}

}

public function login_view(){

$this->load->view("login.php");

}

function login_user(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);

        $this->load->view('user_list.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }


}

function user_profile(){

$this->load->view('user_list.php');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}
    
	public function addnew(){
		$this->load->view('addform.php');
	}

	public function insert(){
		$user['username'] = $this->input->post('username');
		$user['password'] = $this->input->post('password');
		$user['fname'] = $this->input->post('fname');
		$user['email'] = $this->input->post('email');
		$user['contact'] = $this->input->post('arts');
		$user['arts'] = $this->input->post('arts');
		$user['location'] = $this->input->post('location');
		$user['review'] = $this->input->post('review');
		
		$query = $this->users_model->insertuser($user);

		if($query){
			header('location:'.base_url().$this->index());
		}

	}

	public function edit($id){
		$data['user'] = $this->users_model->getUser($id);
		$this->load->view('editform', $data);
	}

	public function update($id){
		$user['username'] = $this->input->post('username');
		$user['password'] = $this->input->post('password');
		$user['fname'] = $this->input->post('fname');
		$user['email'] = $this->input->post('email');
		$user['contact'] = $this->input->post('arts');
		$user['arts'] = $this->input->post('arts');
		$user['location'] = $this->input->post('location');
		$user['review'] = $this->input->post('review');

		$query = $this->users_model->updateuser($user, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function delete($id){
		$query = $this->users_model->deleteuser($id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}
}


?>