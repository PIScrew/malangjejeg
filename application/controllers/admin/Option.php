<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Option extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_option','option');
    
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
    $data['page_title']   = 'Option';
    $data['option']       = $this->option->getOptionAll()->result_array();
    $this->template->admin_views('site/back/OptionList',$data);    
  }
  public function addOption(){
    $data['codepage']       = "back_hero";
    $data['page_title'] 	= 'Tambah Option';
    $data['option']         = $this->option->getOptionAll()->result_array();
  
    if(isset($_POST['submit'])){
      

      $config['upload_path']='./assets/img/content/option/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload',$config);
      if($this->upload->do_upload('img_path'))
      {
          $img='img/content/option/';
          $img.=  $this->upload->data('file_name');
      }
     $data = array(
       'id'                       => $_POST['id'],
       'title'                    => $_POST['title'] ,
       'img_path'                 => @$img ,
       'content'                  => $_POST['content'] ,
       'created_at'               => date('Y-m-j H:i:s'),
    );

    $data = $this->option->createOption($data);
    redirect(base_url('admin/Option/index'));

    }
}

  public function formAddOption(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Add Option';
    $this->template->admin_views('site/back/OptionAdd',$data);

  }

  public function listOption(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'List Option';
    $data['option']      = $this->option->getOptionAll()->result_array();
    $this->template->admin_views('site/back/optionList',$data);
  }

  public function editOption($id=0){
    $data['codepage']     = "back_hero";
    $data['page_title']   = 'Edit Option';
    $data['option']       = $this->option->getOptionById($id)->row_array();
   
   
    if(isset($_POST['submit'])){
      $config['upload_path']='./assets/img/content/option/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');
      $this->upload->initialize($config);
      if(!empty($_FILES['img_path']['name'])){
      if($this->upload->do_upload('img_path')){
            
      $img = 'img/content/option/';
      $img.= $this->upload->data('file_name');
      $data = array(
        'title'             => $_POST['title'] ,
        'img_path'          => @$img,
        'content'           => $_POST['content'] ,
        'updated_at'        => date('Y-m-j H:i:s')
      );
    }
  }else{
      $data = array(
        'title'              => $_POST['title'] ,
        'content'            => $_POST['content'] ,
        'updated_at'         => date('Y-m-j H:i:s')
      );
    }
      $id_option = $_POST['id'];
      $data = $this->option->updateOption($id_option,$data);
      redirect(base_url("Admin/option/index"));
    }
    $this->template->admin_views('site/back/optionEdit',$data); 
}
  public function deleteOption($id){
    $this->option->deleteOption($id);
    redirect(base_url("admin/option/index"));

}
 

}

/* End of file Product.php */