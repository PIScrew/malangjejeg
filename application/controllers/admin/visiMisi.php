<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisi extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_visi_misi','visi_misi');
    
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
    $data['codepage']     = "back_index";
    $data['page_title']   = 'Visi Misi';
    $data['visi_misi']       = $this->visi_misi->getVisiMisiAll()->result_array();
    $this->template->admin_views('site/back/visiMisiList',$data);    
  }
  public function addVisiMisi(){
    $data['codepage']       = "back_index";
    $data['page_title'] 	= 'Tambah Visi Misi';
    $data['visi_misi']         = $this->visi_misi->getVisiMisiAll()->result_array();
  
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }

     
     $data = array(
       'id'                       => $_POST['id'],
       'type'                     => $_POST['type'] ,
       'text'                     => $_POST['text'] ,
       'created_at'               => date('Y-m-j H:i:s'),
    );

    $data = $this->visi_misi->createVisiMisi($data);
    redirect(base_url('admin/visiMisi/index'));

    }
}

  public function formAddVisiMisi(){
    $data['codepage']       = "back_index";
    $data['page_title'] 	= 'Add Visi Misi';
    $this->template->admin_views('site/back/visiMisiAdd',$data);

  }

  public function listVisiMisi(){
    $data['codepage']     = "back_index";
    $data['page_title'] 	= 'List Visi Misi';
    $data['visi_misi']      = $this->visi_misi->getVisiMisiAll()->result_array();
    $this->template->admin_views('site/back/visiMisiList',$data);
  }

  public function editVisiMisi($id=0){
    $data['codepage']     = "back_index";
    $data['page_title']   = 'Edit Galery';
    $data['visi_misi']       = $this->visi_misi->getVisiMisiById($id)->row_array();
   
   
    if(isset($_POST['submit'])){
      
      $data = array(
        'text'               => $_POST['text'] ,
        'updated_at'         => date('Y-m-j H:i:s')
      );
      $id_visi_misi = $_POST['id'];
      $data = $this->visi_misi->updateVisiMisi($id_visi_misi,$data);
      redirect(base_url("Admin/visiMisi/index"));
    }
    $this->template->admin_views('site/back/visiMisiEdit',$data); 
}
  public function deleteGalery($id){
    $this->galery->deleteGalery($id);
    redirect(base_url("admin/galery/index"));

}
 

}

/* End of file Product.php */