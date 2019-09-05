<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Donator extends PIS_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('Mod_donator','donator');
    }
    

    public function index()
    {
        $data['codepage']       = "back_product";
        $data['subpage']        = "list_product";
        $data['page_title']     = "Daftar Donator";
        $data['donator']        = $this->donator->getDonatorAll()->result_array();
        $id = $_SESSION['id'];
        //$data['image']    = $this->user->getImage($id)->result_array();

        $this->template->admin_views('site/back/donatorList',$data);    
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
    //   $data['codepage']       = "back_donator_detail";
    //   $data['page_title']     = "Perbarui Donatur";
    //   $data['category']       = $this->category->getCategoryByid($id)->row_array();
    //   $this->template->admin_views('site/back/Detail',$data);   
    // }

    public function addDonator(){
      if(isset($_POST['submit'])){
        $data = array(
          'donatur_name'    => $_POST['donatur_name'],
          'nominal'         => slug($_POST['nominal']),
          'created_at'      => date('Y-m-d H:m:s')
        );
        $this->donator->create($data);
        redirect(base_url('admin/Donator'),'refresh');
      }
      $data['codepage']       = "back_product";
      //$data['subpage']       = "add_donator";
      $data['page_title']     = "Tambah Donatur";
       $this->template->admin_views('site/back/donatorAdd',$data);
    }
    public function editDonator($id){
        $data['codepage']  = "back_product";
        $data['page_title'] = "Perbarui Donatur";
        $data['d']          = $this->donator->getDonatorByid($id)->row_array();    
        if(isset($_POST['submit'])){
       
        $data_donatur = array(
            'donatur_name' => $_POST['donatur_name'],
            'nominal'         => slug($_POST['nominal']),
            'updated_at'      => date('Y-m-d H:m:s')
        );
        $this->donator->update($id,$data_donatur);
        redirect(base_url('admin/Donator'),'refresh');
    }
    $this->template->admin_views('site/back/donatorAdd',$data);
    }

    public function deleted($id){
      $this->category->delete($id);        
    }

}

/* End of file Category.php */
