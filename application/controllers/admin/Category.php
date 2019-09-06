<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends PIS_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('Mod_category','category');
      $this->load->model('Mod_product','product');
      $this->load->model('Mod_user','user');
    }
    

    public function index()
    {
        $data['codepage']        = "back_product";
        $data['subpage']         = "list_product";
        $data['page_title']      = "Daftar Category";
        $data['category']        = $this->category->getCategoryAll()->result_array();
        $id = $_SESSION['id'];
        $data['image']    = $this->user->getImage($id)->result_array();

        $this->template->admin_views('site/back/categoryList',$data);    
    }

    public function addCategory(){
      $data['codepage']       = "back_category";
      //$data['subpage'] 	      = 'add_product';
      $data['page_title'] 	  = 'Tambah Category';
      $data['category']       = $this->category->getCategoryAll()->result_array();
    
      if(isset($_POST['submit'])){
        if (isset($_POST['status']) == null ) {
          $status = 1;
        }else{
          $status = 0;
        }
  
        $config['upload_path']='./assets/img/content/site/';
        $config['allowed_types']='jpg|png|ico';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
  
        $this->upload->initialize($config);
        if(!empty($_FILES['img_path']['name'])){
            if($this->upload->do_upload('img_path')){
              $img = 'img/content/site/';
              $img.= $this->upload->data('file_name');
            }
              $data_array = array(
                'title_category'           => $_POST['title_category'] ,
                'slug_category'            => slug($_POST['token'].'_'.$_POST['title_category']),
                'img_path'                 => @$img,
                'created_at'               => date('Y-m-j H:i:s'),
             );
             $data = $this->category->create($data_array);
  
            
        }
     

      redirect(base_url('admin/Category/index'));
  
      }
  }

    public function formAddCategory(){
      $data['codepage']     = "back_category";
      //$data['subpage'] 	    = 'add_category';
      $data['page_title'] 	= 'Add Category';
      $this->template->admin_views('site/back/categoryAdd',$data);

    }

    public function editCategory($id=0){
      $data['codepage']     = "back_category";
      $data['page_title'] 	= 'Edit Category';
      $data['category']     = $this->category->getCategoryById($id)->row_array();
     
     
      if(isset($_POST['submit'])){
        
        $config['upload_path']='./assets/img/content/site/';
        $config['allowed_types']='jpg|png|ico';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if(!empty($_FILES['img_path']['name'])){
        if($this->upload->do_upload('img_path')){
              
        $img = 'img/content/site/';
        $img.= $this->upload->data('file_name');
        $data = array(
          'title_category'     => $_POST['title_category'] ,
          'img_path'          => @$img,
          'updated_at'         => date('Y-m-j H:i:s')
        );
      }
    }else{
        $data = array(
          'title_category'         => $_POST['title_category'] ,
          'updated_at'             => date('Y-m-j H:i:s')
        );
      }
        $id_category = $_POST['id'];
        $this->category->update($id_category,$data);
        redirect(base_url("admin/Category/index"));
      
    }
      $this->template->admin_views('site/back/categoryEdit',$data); 
  
  }
  

    public function deleteCategory($id){
      $this->category->delete($id);
      redirect(base_url("admin/Category/index"));
  
  }
  

    // public function detail($id){
    //   if(isset($_POST['submit'])){
    //     $config['upload_path']='./assets/img/content/site/';
    //     $config['allowed_types']='jpg|png|ico';
    //     $config['encrypt_name'] = TRUE;
    //     $this->load->library('upload',$config);
    //     if($this->upload->do_upload('img'))
    //     {
    //         $img='img/content/site/';
    //         $img.=  $this->upload->data('file_name');
    //     }
    //     $data = array(
    //       'title_category'   => $_POST['name'],
    //       'slug_category'   => slug($_POST['name']),
    //       'img_path'        => @$img,
    //       'created_at'      => date('Y-m-d H:m:s')
    //     );
    //     $this->category->update($data,$id);
    //   }
    //   //$data['codepage']       = "back_category_detail";
    //   $data['codepage']        = "back_product";
    //   $data['subpage']         = "add_product";
    //   $data['page_title']     = "Perbarui Kategori";
    //   $data['category']       = $this->category->getCategoryByid($id)->row_array();
    //   $this->template->admin_views('site/back/categoryDetail',$data);   
    // }

    // public function addCategory(){
    //   if(isset($_POST['submit'])){
    //     $config['upload_path']='./assets/img/content/site/';
    //     $config['allowed_types']='jpg|png|ico';
    //     $config['encrypt_name'] = TRUE;
    //     $this->load->library('upload',$config);
    //     if($this->upload->do_upload('img'))
    //     {
    //         $img='img/content/site/';
    //         $img.=  $this->upload->data('file_name');
    //     }
    //     $data = array(
    //       'title_category'   => $_POST['name'],
    //       'slug_category'   => slug($_POST['name']),
    //       'img_path'        => @$img,
    //       'created_at'      => date('Y-m-d H:m:s')
    //     );
    //     $this->category->create($data);
    //     redirect(base_url('admin/Category'),'refresh');
    //   }
    //   //$data['codepage']       = "back_category_detail";
    //   $data['codepage']        = "back_addPage";
    //   $data['subpage']         = "add_product";
    //   $data['page_title']     = "Kategori Baru";
    //   $this->template->admin_views('site/back/categoryAdd',$data);
    // }

    // public function deleted($id){
    //   return $this->category->delete($id,array('deleted_at' => date('Y-m-j H:i:s')));        
    // }



}

/* End of file Category.php */
