<?php
defined('BASEPATH') or exit('No direct script access allowed');

class index extends PIS_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->checkLogin();
    $this->load->model('Mod_user','user');
    // $this->load->model('Mod_site','site');
  }

  // function checkLogin() {
  //   if($this->session->userdata('username')) {
  //     redirect(base_url('admin/dashboard'));
  //   } else {
  //     return true;
  //   }
  // }

  public function login()
  {
    $data['codepage'] = "back_login";
    $data['page_title'] 	= 'Login';
    
    if($this->session->has_userdata('username')){ 
      
      redirect(base_url('admin/dashboard'));
    } else { 
      $this->form_validation->set_rules('email', 'E-mail', 'required'); 
      $this->form_validation->set_rules('password', 'Password', 'required'); //jika session belum terdaftar 
      if ($this->form_validation->run() == false) {
        base_url('admin'); 
      } else { 
        $data_user = array(
          'email'     => $_POST['email'],
          'password'  => $_POST['password']
        );

        $checking = $this->user->checkLoginPos($data_user); 

        if ($checking == true) { 
          
          foreach ($checking as $apps) {
            $user_data = array( 
              'id_user'   => $apps->id_user,
              'username'  => $apps->username,
              'email'     => $apps->email, 
              'fullname'  => $apps->fullname,
              'role'      => $apps->role
            ); 
            $this->session->set_userdata($user_data); 
            $this->user->lastLogin($apps->username);
            redirect(base_url('admin/dashboard'));
          } 
        } else { 
          redirect(base_url('admin'));
        } 
      } 
    } 
    $this->template->admin_views('site/back/login',$data);
  }
  
  public function logout(){
    if($this->user->logged_status()) {
      $logout = array('id_user','username','email','role');
      $this->session->unset_userdata($logout);

      redirect(base_url('admin'));
    }
  }

}