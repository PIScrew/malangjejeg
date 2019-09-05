<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_news','news');
    
    
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
    $data['page_title'] 	= 'News';
    $data['news']      = $this->news->getNewsAll()->result_array();
    $this->template->admin_views('site/back/newsList',$data);    
  }
  public function addNews(){
    $data['codepage']       = "back_hero";
    $data['page_title'] 	  = 'Tambah News';
    $data['news']      = $this->news->getNewsAll()->result_array();
  
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }

      $config['upload_path']='./assets/img/content/news/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');

      $this->upload->initialize($config);
      if(!empty($_FILES['news_img']['name'])){
      if($this->upload->do_upload('news_img'))
      {
          $img='img/content/news/';
          $img.=  $this->upload->data('file_name');
      }
      
     $data = array(
       'news_title'               => $_POST['news_title'] ,
       'news_img'                 => @$img ,
       'news_content'             => $_POST['news_content'] ,
       'news_url'                 => $_POST['news_url'] ,
       'created_at'               => date('Y-m-j H:i:s'),
       'created_by'               => $_POST['created_by'] 

    );

    $data = $this->news->createNews($data);
}
    redirect(base_url('admin/News/index'));

    }
}

  public function formAddNews(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Add News';
    $this->template->admin_views('site/back/newsAdd',$data);

  }

  public function listNews(){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'List News';
    $data['news']      = $this->news->getNewsAll()->result_array();
    $this->template->admin_views('site/back/newsList',$data);
  }

  public function editNews($id=0){
    $data['codepage']     = "back_hero";
    $data['page_title'] 	= 'Edit News';
    $data['news']     = $this->news->getNewsById($id)->row_array();
   
   
    if(isset($_POST['submit'])){
      
      $config['upload_path']='./assets/img/content/news/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');
      $this->upload->initialize($config);
      if(!empty($_FILES['news_img']['name'])){
      if($this->upload->do_upload('news_img')){
            
      $img = 'img/content/news/';
      $img.= $this->upload->data('file_name');
      $data = array(
        'news_title'               => $_POST['news_title'] ,
        'news_img'                 => @$img ,
        'news_content'             => $_POST['news_content'] ,
        'news_url'                 => $_POST['news_url'] ,
      );
    }
  }else{
      $data = array(
        'news_title'               => $_POST['news_title'] ,
        'news_content'             => $_POST['news_content'] ,
        'news_url'                 => $_POST['news_url'] ,
      );
    }
      $id_news = $_POST['id_news'];
      $this->news->updateNews($id_news,$data);
      redirect(base_url("Admin/news/index"));
    
  }
    $this->template->admin_views('site/back/newsEdit',$data); 

}
  public function deleteNews($id){
    $this->news->deleteNews($id);
    redirect(base_url("admin/news/index"));

}
 

}

/* End of file Product.php */