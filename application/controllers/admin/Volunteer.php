<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends PIS_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('Mod_volunteer','volunteer');
    }
    

    public function index()
    {
        $data['codepage']       = "back_product";
        $data['subpage']        = "list_volunteer";
        $data['page_title']     = "Daftar Volunteer";
        $data['volunteer']        = $this->volunteer->getVolunteerAll()->result_array();
        $id = $_SESSION['id'];
        //$data['image']    = $this->user->getImage($id)->result_array();

        $this->template->admin_views('site/back/volunteerList',$data);    
    }

    public function detail($id){
      if(isset($_POST['submit'])){
        $config['upload_path']='./assets/img/content/site/';
        $config['allowed_types']='jpg|png|ico';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('img'))
        {
            $img='img/content/site/';
            $img.=  $this->upload->data('file_name');
        }
        $data = array(
          'title_category'   => $_POST['name'],
          'slug_category'   => slug($_POST['name']),
          'img_path'        => @$img,
          'created_at'      => date('Y-m-d H:m:s')
        );
        $this->category->update($data,$id);
      }
      $data['codepage']       = "back_category_detail";
      $data['page_title']     = "Perbarui Kategori";
      $data['category']       = $this->category->getCategoryByid($id)->row_array();
      $this->template->admin_views('site/back/categoryDetail',$data);   
    }

    public function addVolunteer(){
      if(isset($_POST['submit'])){
        $config['upload_path']='./assets/img/content/site/';
        $config['allowed_types']='jpg|png|ico';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('img'))
        {
            $img='img/content/site/';
            $img.=  $this->upload->data('file_name');
        }
        $data = array(
          'title_category'      => $_POST['name'],
          'slug_category'       => slug($_POST['name']),
          'ktp_img_path'        => @$img,
          'created_at'          => date('Y-m-d H:m:s')
        );
        $this->category->create($data);
        redirect(base_url('admin/Volunteer'),'refresh');
      }
      $data['codepage']         = "back_category_detail";
      //$data['subpage']          = "add_volunteer";
      $data['page_title']       = "Volunteer";
      $this->template->admin_views('site/back/volunteerAdd',$data);
    }

    public function editVolunteer($id){
        if(isset($_POST['submit'])){
          $config['upload_path']='./assets/img/content/site/';
          $config['allowed_types']='jpg|png|ico';
          $config['encrypt_name'] = TRUE;
          $this->load->library('upload',$config);
          if($this->upload->do_upload('img'))
          {
              $img='img/content/site/';
              $img.=  $this->upload->data('file_name');
          }
          $data = array(
            'title_category'        => $_POST['name'],
            'slug_category'         => slug($_POST['name']),
            'ktp_img_path'          => @$img,
            'created_at'            => date('Y-m-d H:m:s')
          );
          $this->category->update($data,$id);
        }
        $data['codepage']       = "back_category_detail";
        $data['page_title']     = "Perbarui Kategori";
        $data['category']       = $this->category->getCategoryByid($id)->row_array();
        $this->template->admin_views('site/back/categoryDetail',$data);   
      }

    public function deleted($id){
      return $this->category->delete($id,array('deleted_at' => date('Y-m-j H:i:s')));        
    }

}

/* End of file Category.php */
