<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->check_login();
    $this->load->model('Mod_user','user');
  }
  
  function check_login() {   
		if(!$this->session->has_userdata('username')) {
			redirect(base_url('admin'));
    } return true;
  }

  // public function index()
  // {
  //   $data['codepage'] = "back_login";
  //   $data['page_title'] 	= 'Login';
  //   if($this->user->logged_id()){ 
  //     base_url('sarimin'); 
  //   } else { 
  //     $this->form_validation->set_rules('email', 'E-mail', 'required'); 
  //     $this->form_validation->set_rules('password', 'Password', 'required'); //jika session belum terdaftar 
  //     if ($this->form_validation->run() == false) {
  //       base_url('sarimin'); 
  //     } else { 
  //       $data_user = array(
  //         'email'     => $_POST['email'],
  //         'password'  => $_POST['password']
  //       );
  //       $checking = $this->user->checkLoginAdmin($data_user);
  //       if ($checking == true) { 
  //         foreach ($checking as $apps) {
            
  //             $session_data = array( 
  //              'id'         => $apps->id,
  //              'username'   => $apps->username,
  //              'email'      => $apps->email, 
  //              'fullname'   => $apps->fullname,
  //              'is_ban'     => $apps->is_ban
  //             ); 
  //             $this->session->set_userdata($session_data); 
  //             redirect(base_url('admin/dashboard'));
  //         } 
  //       } else { 
  //         redirect(base_url('sarimin'));
  //       } 
  //     } 
  //   } 
  //   $this->template->admin_views('site/back/login',$data);
  // }
  // public function logout(){
  //   $this->session->sess_destroy();    
  //   redirect(base_url('sarimin'));
  // }

  public function create_user(){
    $data['codepage'] = "back_addProduct";
    $data['page_title'] 	= 'Add User Admin';
    if(isset($_POST['submit'])){
      $ban=1;
      $firstname = $_POST ['firstname'];
      $lastname  = $_POST ['lastname'];
      $fullname  = $firstname." ".  $lastname;
      $username  = $_POST ['username'];
      $data_admin = array(
      
        'username'         => $_POST['username'] ,
        'email'            => $_POST['email'],
        'password'         => hash_password($_POST['password']) ,
        'id_role'          => $_POST['id_role'] ,
        'created_at'       => date('Y-m-j H:i:s'),
        'is_ban'           => $ban
      );
      $data = $this->user->create_useradmin($data_admin);
      $result= $this->user->getId($username)->row(); 
      $getId= $result->id;

      $config['upload_path']='./assets/img/content/useradmin/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload',$config);
      if($this->upload->do_upload('img_path'))
      {
          $img='img/content/useradmin/';
          $img.=  $this->upload->data('file_name');
      }
      $data_admin_detail = array(
        'id_useradmin'     => $getId,
        'fullname'         => $fullname ,
        'telegram'         => $_POST['telegram'] ,
        'whatsapp'         => $_POST['whatsapp'] ,
        'phone'            => $_POST['phone'] ,
        'img_path'         => @$img ,
        'gender'           => $_POST['gender'] ,
        'created_at'       => date('Y-m-j H:i:s'),
      );
      
      $data = $this->user->create_useradminDetail($data_admin_detail);
      redirect(base_url('admin/user/listUser'));
    }
    
  }

  public function formAddUser(){
    $data['codepage']     = "back_addProduct";
    $data['page_title'] 	= 'Add User Admin';
    $data['userAdminRole']         = $this->user->getAllRole()->result_array();
    $id = $_SESSION['id'];
    $data['image']    = $this->user->getImage($id)->result_array();
    $this->template->back_views('site/back/addUser',$data);

  }

 

  public function listUser(){
    $data['codepage'] = "back_user";
    $data['page_title'] 	= 'List User Admin';
    $data['user']    = $this->user->getListUser()->result_array();
    $id = $_SESSION['id'];
    $data['image']    = $this->user->getImage($id)->result_array();
    
    
  
    
    
    
    $this->template->back_views('site/back/listUser',$data);
    
  }

  public function banAdmin($id){
    $data['codepage']     = "back_useradmin_detail";
    $data['useradmin']    = $this->user->getUserAdminByUsername($this->uri->segment(3))->row_array();
    $data['userAdminRole']         = $this->user->getAllRole()->result_array();
    $data['page_title'] 	= 'Detail user '.$data['useradmin']['fullname'];

    return $this->user->banadmin($id);   
    redirect(base_url('admin/user/listUser'));  
  }

  public function aktifAdmin($id){
    $data['codepage']     = "back_useradmin_detail";
    $data['useradmin']    = $this->user->getUserAdminByUsername($this->uri->segment(3))->row_array();
    $data['userAdminRole']         = $this->user->getAllRole()->result_array();
    $data['page_title'] 	= 'Detail user '.$data['useradmin']['fullname'];

    return $this->user->aktifadmin($id);   
    redirect(base_url('admin/user/listUser'));  
  }

  public function detailAdmin($id=0){
    $data['codepage']     = "back_useradmin_detail";
  //  $data['useradmin']    = $this->user->getUserAdminByUsername($this->uri->segment(3))->row_array();
    $data['useradmin']    = $this->user->getUserAdminById($id)->row_array();
    $data['userAdminRole']         = $this->user->getAllRole()->result_array();
    $data['page_title'] 	= 'Detail user '.$data['useradmin']['fullname'];
    $id_image = $_SESSION['id'];
    $data['image']    = $this->user->getImage($id_image)->result_array();
    $idadmin = $_SESSION['id'];
    $user = $this->user->getUserAdminById($id)->row_array();
    $email = $user['email'];
    
   
    if(isset($_POST['submit'])){
  //    print_r($idd);die;
      if($email != $_POST['emailedit']){
      $data_useradmin = array(
      
       
        'email'            => $_POST['emailedit'],
        
        'updated_at'       => date('Y-m-j H:i:s'),
      );
      $data = $this->user->updateDataAdmin($id,$data_useradmin);
    }
   
    
      $data_useradminDetail = array(
        
        'fullname'         => $_POST['fullnameedit'] ,
        'telegram'         => $_POST['telegram'] ,
        'whatsapp'         => $_POST['whatsapp'] ,
        'phone'            => $_POST['phone'] ,
        'gender'           => $_POST['gender'] ,
        //'img_path'         => $_POST['img_path'], 
        'updated_at'       => date('Y-m-j H:i:s')
      );
      $data = $this->user->updateDataAdminDetail($id,$data_useradminDetail);
      redirect(base_url('admin/user/listUser'));
    
  }
   
    
    $this->template->back_views('site/back/userProfile',$data);
  
  }

  
  public function editPasswordAct($id=0){
    $data['codepage']     = "back_useradmin_detail";
  //  $data['useradmin']    = $this->user->getUserAdminByUsername($this->uri->segment(3))->row_array();
    $data['useradmin']    = $this->user->getUserAdminById($id)->row_array();
    $data['userAdminRole']         = $this->user->getAllRole()->result_array();
    $data['page_title'] 	= 'Detail user '.$data['useradmin']['fullname'];
    $id_image = $_SESSION['id'];
    $data['image']    = $this->user->getImage($id_image)->result_array();
    $idadmin = $_SESSION['id'];
    $user = $this->user->getUserAdminById($id)->row_array();
    
 

 
   
    if(isset($_POST['submit'])){
      $newPassword = $this->input->post('newPassword');
      $tryNewPassword = $this->input->post('tryNewPassword');

      $this->form_validation->set_rules('newPassword','Password Baru','required|matches[tryNewPassword]');
      $this->form_validation->set_rules('tryNewPassword','Ulangi Password Baru','required');
      if($this->form_validation->run()!= false){
        $data = array('password' => hash_password($newPassword));
        
        $this->user->updateDataAdmin($id,$data);
      }
     
      redirect(base_url('admin/user/listUser'));
    
  }

   
    
    $this->template->back_views('site/back/editPassword',$data);
  
  }

  
  public function del_useradmin($id){
    $this->user->deluserAdmin($id);
    $this->user->deluserAdminDetail($id_useradmin);
    redirect(base_url("admin/user/listUser"));

}
}

/* End of file User.php */
