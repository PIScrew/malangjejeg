<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_galery','galery');
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
    $data['page_title']   = 'Galery';
    $data['galery']       = $this->galery->getGaleryAll()->result_array();
    $this->template->admin_views('site/back/galeryList',$data);    
  }
  public function addGalery(){
    $data['codepage']       = "back_hero";
    $data['page_title'] 	= 'Tambah Galery';
    $data['galery']         = $this->galery->getGaleryAll()->result_array();
  
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }

      $config['upload_path']='./assets/img/content/galery/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload',$config);
      if($this->upload->do_upload('img_path'))
      {
          $img='img/content/galery/';
          $img.=  $this->upload->data('file_name');
      }
     $data = array(
       'id_galery'                => $_POST['id_galery'],
       'img_path'                 => @$img ,
       'desc'                     => $_POST['desc'] ,
       'created_at'               => date('Y-m-j H:i:s'),
    );

    $data = $this->galery->createGalery($data);
    redirect(base_url('admin/Galery/index'));

    }
}

  public function formAddGalery(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Add Galery';
    $this->template->admin_views('site/back/galeryAdd',$data);

  }

  public function listGalery(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'List Galery';
    $data['galery']      = $this->carousel->getGaleryAll()->result_array();
    $this->template->admin_views('site/back/galeryList',$data);
  }

  public function editGalery($id=0){
    $data['codepage']     = "back_hero";
    $data['page_title']   = 'Edit Galery';
    $data['galery']       = $this->galery->getGaleryById($id)->row_array();
   
   
    if(isset($_POST['submit'])){
      
      $data = array(
        'desc'               => $_POST['desc'] ,
        'updated_at'         => date('Y-m-j H:i:s')
      );
      $id_galery = $_POST['id'];
      $data = $this->galery->updateGalery($id_galery,$data);
      redirect(base_url("Admin/galery/index"));
    }
    $this->template->admin_views('site/back/galeryEdit',$data); 
}
  public function deleteGalery($id){
    $this->galery->deleteGalery($id);
    redirect(base_url("admin/galery/index"));

}
 

}

/* End of file Product.php */