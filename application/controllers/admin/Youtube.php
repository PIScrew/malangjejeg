<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Youtube extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->check_login();
    $this->load->model('Mod_youtube','youtube');
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
    $data['page_title'] 	= 'Youtube';
    $data['youtube']      = $this->youtube->getYoutubeAll()->result_array();
    $this->template->admin_views('site/back/youtubeList',$data);    
  }
  public function addYoutube(){
    $data['codepage']       = "back_hero";
    $data['page_title'] 	  = 'Tambah Youtube';
    $data['youtube']      = $this->youtube->getYoutubeAll()->result_array();
  
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }
     $data = array(
       'id_video'       => $_POST['id_video'],
       'link_video'     => $_POST['link_video'] ,
       'created_at'     => date('Y-m-j H:i:s'),
    );

    $data = $this->youtube->create_youtube($data);
    redirect(base_url('admin/Youtube/index'));

    }
}

  public function formAddYoutube(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Add Youtube';
    $this->template->admin_views('site/back/youtubeAdd',$data);

  }

  public function listYoutube(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'List Youtube';
    $data['youtube']      = $this->youtube->getYoutubeAll()->result_array();
    $this->template->admin_views('site/back/index',$data);
  }

  public function editYoutube($id=0){
    $data['codepage']           = "back_hero";
    $data['page_title'] 	    = 'Edit Youtube';
    $data['youtube']            = $this->youtube->getYoutubeById($id)->row_array();
   
   
    if(isset($_POST['submit'])){
      
      $data = array(
        'link_video'          => $_POST['link_video'] ,
        'updated_at'          => date('Y-m-j H:i:s')
      );
      $id_youtube = $_POST['id_video'];
      $data = $this->youtube->updateYoutube($id_youtube,$data);
      redirect(base_url("Admin/youtube/index"));
    }
    $this->template->admin_views('site/back/youtubeEdit',$data); 
}
  public function deleteYoutube($id){
    $this->youtube->deleteYoutube($id);
    redirect(base_url("admin/youtube/index"));

}
 

}

/* End of file Product.php */