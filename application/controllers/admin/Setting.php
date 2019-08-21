<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_system','system');  
    $this->load->model('Mod_address','address');  
    $this->load->model('Mod_user','user');
  }
  

  public function index()
  {
    $data['codepage']       = "back_slider_detail";
    $data['page_title'] 	  = 'Produk';
    $data['site']           =  $this->system->getGeneral()->row_array();
    $this->template->back_views('site/back/setting',$data);
  }
  public function setGeneral(){
    $data['codepage'] = "back_setting";
    $data['page_title'] 	= 'Produk';
    if(isset($_POST['submit'])){
      $config['upload_path']='./assets/img/content/general/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload',$config);
      if($this->upload->do_upload('logo'))
      {
          $logo='img/content/general/';
          $logo.=  $this->upload->data('file_name');
      }
      if($this->upload->do_upload('favicon'))
      {
          $favicon='img/content/general/';
          $favicon.=  $this->upload->data('file_name');
      }
      $data = array(
          'title_site'        => $_POST['title_site'],
          'desc'              => $_POST['desc'],
          'meta'              => $_POST['meta'],
          'logo'              => @$logo,
          'favicon'           => @$favicon,
          'phone'             => $_POST['phone'],
          'email'             => $_POST['email'],
          'updated_at'         => date('Y-m-d H:m:s')
      );
      $this->system->setGeneral($data);
      redirect(base_url('admin/setting'),'refresh');
  }
  $data['codepage']       = "back_slider_detail";
  $data['page_title']     = "Slider Baru";

  $this->template->back_views('site/back/SliderDetail',$data);   
  }


  public function setAddress()
  {
    $data['codepage']       = "set_address";
    $data['page_title']     = "Set Address";
    $data['address']        = $this->system->getData()->row_array();
    $data['province']       = rajaongkir('province');
    if(isset($_POST['submit'])){
      $data_address = array(
          
          'id_province'       => $_POST['id_province'],
          'id_city'           => $_POST['id_city'],
          'id_subdistrict'    => $_POST['id_district'],
          'province'          => $_POST['province_name'],
          'city'              => $_POST['city'],
          'subdistrict'       => $_POST['subdistrict'],
          'zip_code'          => $_POST['zip_code'],
          'complete_address'  => $_POST['complete_address']                    
      );
      $this->system->setAddress($data_address);
    }

    $this->template->back_views('site/back/setting-address',$data);
  }
 
  public function other(){
    $data['codepage']       = "back_setting";
    $data['page_title']   	= 'Produk';
    $data['conf']           = $this->system->getConf()->row_array();
    $this->template->back_views('site/back/settingOther',$data);
  }
  public function setOther(){
    $data['codepage'] = "back_setting";
    $data['page_title'] 	= 'Produk';
  
      $data_other = array(
        'conf_page_search'      => $_POST['search'],
        'conf_page_product'     => $_POST['product'],
        'conf_page_category'    => $_POST['category'],
        'conf_page_topsell'     => $_POST['topsell'],
        'updated_at'            => date('Y-m-d H:m:s')
      );  
      $this->system->setOther($data_other);
      redirect(base_url('admin/setting/other'),'refresh');
  }

  public function setHome(){
    $data['codepage'] = "back_setHomePage";
    if(isset($_POST['submit'])){
      $config['upload_path']='./assets/img/content/site/';
      $config['allowed_types']='jpg|png|ico';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload',$config);
      if($this->upload->do_upload('cb_img_path'))
      {
          $cb='img/content/site/';
          $cb.=  $this->upload->data('file_name');
      }
      if($this->upload->do_upload('bs_img_path'))
      {
          $bs='img/content/site/';
          $bs.=  $this->upload->data('file_name');
      }
      if($this->upload->do_upload('cc_img_path'))
      {
          $cc ='img/content/site/';
          $cc.=  $this->upload->data('file_name');
      }
      if($this->upload->do_upload('cr_img_path'))
      {
          $cr ='img/content/site/';
          $cr.=  $this->upload->data('file_name');
      }
      // print_r($cb);print_r($bs);print_r($cc);print_r($cr);die();
      $this->system->updateHomePage(@$cb,@$bs,@$cc,@$cr);
    };
    $data['page_title'] 	= 'Seting Homepage';
    $data['home']         = $this->system->homePage()->row_array();
    $this->template->back_views('site/back/settingHome',$data);
  }
  public function setOngkir(){
    $id = $_SESSION['id'];
    $data['image']    = $this->user->getImage($id)->result_array();
    if(isset($_POST['submit'])){
      $data = array(
        'auth_key'  => $_POST['hosts'],
        'rest_token'=> $_POST['token']
      );
      $this->system->updateRest($data);
    }
    $data['page_title'] 	= 'Seting Ongkos kirim';
    $data['codepage'] = "back_setOngkir";
    $data['ongkir']  = $this->system->getRest()->row_array();
    $this->template->back_views('site/back/settingOngkir',$data);
  }
  public function slider(){
    $data['codepage']     = "back_slider";
    $data['page_title'] 	= 'Slider';
    $data['slider']       = $this->system->getSlider()->result_array();
    $this->template->back_views('site/back/slider',$data);
  }

}

/* End of file Setting.php */
