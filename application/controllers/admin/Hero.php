<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hero extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_hero','hero');
    $this->check_login();
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
    $data['page_title'] 	= 'Hero';
    $data['hero']      = $this->hero->getHeroAll()->result_array();
    $this->template->admin_views('site/back/heroList',$data);    
  }
  public function addHero(){
    $data['codepage']       = "back_hero";
   // $data['subpage'] 	      = 'add_hero';
    $data['page_title'] 	  = 'Tambah Hero';
    $data['hero']           = $this->hero->getHeroAll()->result_array();
  
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }

      $config['upload_path']='./assets/img/content/hero/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');

      $this->upload->initialize($config);
      if(!empty($_FILES['hero_path']['name'])){
          if($this->upload->do_upload('hero_path')){
            $img = 'img/content/hero/';
            $img.= $this->upload->data('file_name');
          }
            $data_array = array(
              'hero_title'               => $_POST['hero_title'] ,
              'hero_path'                => @$img,
              'created_at'               => date('Y-m-j H:i:s'),
           );
           $data = $this->hero->createHero($data_array);

          
      }
   
     
    redirect(base_url('admin/Hero/index'));

    }
}

  public function formAddHero(){
    $data['codepage']     = "back_hero";
    //$data['subpage'] 	      = 'back_product';
    $data['page_title'] 	= 'Add Hero';
    $this->template->admin_views('site/back/heroAdd',$data);

  }

  public function listHero(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'List Hero';
    $data['hero']      = $this->hero->getHeroAll()->result_array();
    $this->template->admin_views('site/back/heroList',$data);
  }

  public function editHero($id=0){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Edit Hero';
    $data['hero']     = $this->hero->getHeroById($id)->row_array();
   
   
    if(isset($_POST['submit'])){
      
      $config['upload_path']='./assets/img/content/hero/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload', $config);
      
      if($this->upload->do_upload('hero_path')){
            
      $img = 'img/content/hero/';
      $img.= $this->upload->data('file_name');
      $data = array(
        'hero_title'         => $_POST['hero_title'] ,
        'hero_path'          => @$img,
        'updated_at'         => date('Y-m-j H:i:s')
      );
    }
  
      $data = array(
        'hero_title'         => $_POST['hero_title'] ,
        'updated_at'         => date('Y-m-j H:i:s')
      );
      $id_hero = $_POST['id'];
      $this->hero->updateHero($id_hero,$data);
      redirect(base_url("Admin/hero/index"));
    
  }
    $this->template->admin_views('site/back/heroEdit',$data); 

}
  public function deleteHero($id){
    $this->hero->deleteHero($id);
    redirect(base_url("admin/hero/index"));

}
}
 



/* End of file Product.php */