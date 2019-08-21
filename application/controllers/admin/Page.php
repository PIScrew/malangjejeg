<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends PIS_Controller {

  public function __construct()
  {
    parent::__construct();
     $this->load->model('Mod_page','page');
 
  }



  public function faq(){
    $data['codepage']    = "back_page";
    $data['page_title']  ="Halaman";
    $data['faq']         = $this->page->getFaq()->result_array();
    $this->template->back_views('site/back/listFaq',$data);
  }
  public function addFaq(){
    $data['codepage'] = "back_addPage";
    $data['page_title'] ="Tambah Halaman FAQ";
    $this->template->back_views('site/back/page_form',$data);
  }
  public function about(){
    $data['codepage'] = "back_page";
    $data['page_title'] ="Halaman";
    $data['about']         = $this->page->getAbout()->result_array();
    $this->template->back_views('site/back/listAbout',$data);
  }
  public function addAbout(){
    $data['codepage'] = "back_addPage";
    $data['page_title'] ="Tambah Halaman Tentang";
    $this->template->back_views('site/back/page_form',$data);
  }
  public function help(){
    $data['codepage'] = "back_page";
    $data['page_title'] ="Halaman";
    $data['help']         = $this->page->getHelp()->result_array();
    $this->template->back_views('site/back/listHelp',$data);
  }
  public function addHelp(){
    $data['codepage'] = "back_addPage";
    $data['page_title'] ="Tambah Halaman Bantuan";
    $this->template->back_views('site/back/page_form',$data);
  }

  //insert into database

  public function add_about(){
   // $data['image']    = $this->user->getImage($id)->result_array();
    if(isset($_POST['submit'])){
        $config['upload_path']='./assets/img/content/page/';
        $config['allowed_types']='jpg|png|ico';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('img_path'))
        {
          $img='img/content/page/';
          $img.=  $this->upload->data('file_name');
        }
        $data = array(
          'judul'             => $_POST['title_page'],
          'desc'               => $_POST['description'],
          'img_path'          => @$img,
          'created_at'        => date('Y-m-d H:m:s')
          );
        $this->page->addAbout($data);
        redirect(base_url("Admin/page/about"));
        }
  }
  public function edit_about($id = 0){
    $data['codepage']    ="back_addPage";
    $data['page_title']  ="Edit Halaman Tentang";
    $data['about']       = $this->page->getAboutbyId($id)->row_array();
   
    if(isset($_POST['submit'])){
      $config['upload_path']='./assets/img/content/page/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload',$config);
     
      $image = $_POST['img_path'];
      if($image!=null){
        if($this->upload->do_upload('img_path'))
      {
        $img='img/content/page/';
        $img.=  $this->upload->data('file_name');
      }
        $data = array(
          'judul'             => $_POST['title_page'],
          'desc'               => $_POST['description'],
          'img_path'          => @$img,
          'updated_at'        => date('Y-m-d H:m:s')
          );
        $this->page->editAbout($_POST['id'],$data);
      }else{
        $data = array(
          'judul'             => $_POST['title_page'],
          'desc'               => $_POST['description'],
          'updated_at'        => date('Y-m-d H:m:s')
          );
        $this->page->editAbout($_POST['id'],$data);
      }
      redirect(base_url("Admin/page/about"));
    }
    $this->template->back_views('site/back/page_form_edit',$data);
  }
  public function del_about($id)
  {
      $this->page->editAbout($id, array('deleted_at' => date('Y-m-j H:i:s')));
      redirect(base_url("Admin/page/about"));
  }
  public function add_faq(){
    $array_data = array(
      'judul'          => $_POST['title_faq'],
      'kategori'       => $_POST['type_faq'],
      'icon'           => $_POST['icon_faq'],
      'message'        => $_POST['desc_faq'],
      'created_at'     => date('Y-m-j H:i:s')
    );
    $this->page->insertFaq($array_data);
    redirect(base_url("Admin/page/faq"));
  }
  public function edit_faq($id = 0){
    $data['codepage']    ="back_addPage";
    $data['page_title']  ="Edit Halaman FAQ";
    $data['faq']         = $this->page->getFaqbyId($id)->row_array();
    if(isset($_POST['submit'])){
      $data = array(
        'judul'         => $_POST['title_faq'] ,
        'kategori'      => $_POST['type_faq'] ,
        'icon'          => $_POST['icon_faq'] ,
        'message'       => $_POST['desc_faq'] ,
        'updated_at'    => date('Y-m-j H:i:s')
      );
      $this->page->editFaq($_POST['id'],$data);
      redirect(base_url("Admin/page/faq"));
    }
    $this->template->back_views('site/back/page_form_edit',$data);
  }
  public function del_faq($id)
  {
      $this->page->editFaq($id, array('deleted_at' => date('Y-m-j H:i:s')));
      redirect(base_url("Admin/page/faq"));
  }
  public function add_help(){
    if(isset($_POST['submit'])){
      $config['upload_path']='./assets/img/content/page/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload',$config);
      if($this->upload->do_upload('img_path'))
      {
        $img='img/content/page/';
        $img.=  $this->upload->data('file_name');
      }
      $data = array(
        'judul'             => $_POST['title'],
        'message'               => $_POST['desc'],
        'img_path'          => @$img,
        'created_at'        => date('Y-m-d H:m:s')
        );
      $this->page->insertHelp($data);
      redirect(base_url("Admin/page/help"));
      }
  }
  public function edit_help($id = 0){
    $data['codepage']    ="back_addPage";
    $data['page_title']  ="Edit Halaman Bantuan";
    $data['help']       = $this->page->getHelpbyId($id)->row_array();
   
    if(isset($_POST['submit'])){
      $config['upload_path']='./assets/img/content/page/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload',$config);
     
      $image = $_POST['img_path'];
      if($image!=null){
        if($this->upload->do_upload('img_path'))
      {
        $img='img/content/page/';
        $img.=  $this->upload->data('file_name');
      }
        $data = array(
          'judul'             => $_POST['title'],
          'message'               => $_POST['desc'],
          'img_path'          => @$img,
          'updated_at'        => date('Y-m-d H:m:s')
          );
        $this->page->editHelp($_POST['id'],$data);
      }else{
        $data = array(
          'judul'             => $_POST['title'],
          'message'               => $_POST['desc'],
          'updated_at'        => date('Y-m-d H:m:s')
          );
        $this->page->editHelp($_POST['id'],$data);
      }
      redirect(base_url("Admin/page/help"));
    }
    $this->template->back_views('site/back/page_form_edit',$data);
  }
  public function del_help($id)
  {
      $this->page->editHelp($id, array('deleted_at' => date('Y-m-j H:i:s')));
      redirect(base_url("Admin/page/help"));
  }

}

