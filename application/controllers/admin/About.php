<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->check_login();
    $this->load->model('Mod_about','about');
    $this->load->model('Mod_user','user');
    

  }
  function check_login() {   
		if(!$this->session->has_userdata('username')) {
			redirect(base_url('sarimin'));
    } return true;
  }
  

  public function index()
  {
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'About';
    $data['about']      = $this->about->getAboutAll()->result_array();
    $this->template->admin_views('site/back/aboutList',$data);    
  }
  public function addAbout(){
    $data['codepage']       = "back_index";
    $data['page_title'] 	  = 'Tambah About';
    $data['about']      = $this->about->getAboutAll()->result_array();
  
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }
     $data = array(
       'id_about'       => $_POST['id_about'],
       'video_url'    => $_POST['video_url'] ,
       'text'          => $_POST['text'] ,
       'created_at'     => date('Y-m-j H:i:s'),
    );

    $data = $this->about->create_about($data);
    redirect(base_url('admin/About/index'));

    }
}

  public function formAddAbout(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Add About';
    $this->template->admin_views('site/back/addAbout',$data);

  }

  public function listAbout(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'List About';
    $data['about']      = $this->about->getAboutAll()->result_array();
    $this->template->admin_views('site/back/aboutList',$data);
  }

  public function editAbout($id=0){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Edit About';
    $data['about']           = $this->about->getAboutById($id)->row_array();
   
   
    if(isset($_POST['submit'])){
      
      $data = array(
        'video_url'          => $_POST['video_url'] ,
        'text'               => $_POST['text'] ,
        'updated_at'         => date('Y-m-j H:i:s')
      );
      $id_about = $_POST['id_about'];
      $data = $this->about->updateAbout($id_about,$data);
      redirect(base_url("Admin/about/listAbout"));
    }
    $this->template->admin_views('site/back/aboutEdit',$data); 
}
  public function deleteAbout($id){
    $this->about->deleteAbout($id);
    redirect(base_url("admin/about/listAbout"));

}
 

}

/* End of file Product.php */