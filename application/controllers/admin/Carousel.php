<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_carousel','carousel');
    
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
    $data['page_title'] 	= 'Carousel';
    $data['carousel']      = $this->carousel->getCarouselAll()->result_array();
    $this->template->admin_views('site/back/carouselList',$data);    
  }
  public function addCarousel(){
    $data['codepage']       = "back_hero";
    $data['page_title'] 	  = 'Tambah Carousel';
    $data['carousel']      = $this->carousel->getCarouselAll()->result_array();
  
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }

      $config['upload_path']='./assets/img/content/carousel/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');
      $this->upload->initialize($config);
      if(!empty($_FILES['img_path']['name'])){
      if($this->upload->do_upload('img_path'))
      {
          $img='img/content/carousel/';
          $img.=  $this->upload->data('file_name');
      }
     $data = array(
       'img_path'                 => @$img ,
       'text'                     => $_POST['text'] ,
       'figure_name'              => $_POST['figure_name'] ,
       'figure_title'             => $_POST['figure_title'] ,
       'created_at'               => date('Y-m-j H:i:s'),
    );

    $data = $this->carousel->createCarousel($data);
  }
    redirect(base_url('admin/Carousel/index'));

    }
}

  public function formAddCarousel(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Add Carousel';
    $this->template->admin_views('site/back/carouselAdd',$data);

  }

  public function listCarousel(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'List About';
    $data['carousel']      = $this->carousel->getCarouselAll()->result_array();
    $this->template->admin_views('site/back/carouselList',$data);
  }

  public function editCarousel($id=0){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Edit Carousel';
    $data['carousel']     = $this->carousel->getCarouselById($id)->row_array();
   
   
    if(isset($_POST['submit'])){
      
      $config['upload_path']='./assets/img/content/carousel/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');
      $this->upload->initialize($config);
      if(!empty($_FILES['img_path']['name'])){
      if($this->upload->do_upload('img_path')){
            
      $img = 'img/content/carousel/';
      $img.= $this->upload->data('file_name');
      $data = array(
        'img_path'          => @$img,
        'text'              => $_POST['text'] ,
        'figure_name'       => $_POST['figure_name'] ,
        'figure_title'      => $_POST['figure_title'] ,
        'updated_at'        => date('Y-m-j H:i:s')
      );
    }
  }else{
      $data = array(
      'text'              => $_POST['text'] ,
      'figure_name'       => $_POST['figure_name'] ,
      'figure_title'      => $_POST['figure_title'] ,
      'updated_at'        => date('Y-m-j H:i:s')
      );
    }
      $id_carousel = $_POST['id_carousel_figure'];
      $this->carousel->updateCarousel($id_carousel,$data);
      redirect(base_url("Admin/carousel/index"));
    
  }
    $this->template->admin_views('site/back/carouselEdit',$data); 

}
  public function deleteCarousel($id){
    $this->carousel->deleteCarousel($id);
    redirect(base_url("admin/carousel/index"));

}
 

}

/* End of file Product.php */