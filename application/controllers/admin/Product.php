<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends PIS_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_product','product');
    $this->load->model('Mod_category','category');
    $this->load->library('upload');    
    $this->load->model('Mod_user','user');
    

  }
  

  public function index()
  {
    $data['codepage']     = "back_product";
    $data['page_title'] 	= 'Produk';
    $data['product']      = $this->product->getListProduct()->result_array();
    $id = $_SESSION['id'];
    $data['image']    = $this->user->getImage($id)->result_array();
    $this->template->back_views('site/back/productList',$data);    
  }
  public function addProduct(){
    $data['codepage']       = "back_addProduct";
    $data['page_title'] 	  = 'Tambah Produk';
    $data['measurement']    = $this->product->getMeasurement()->result_array();
    $data['category']       = $this->category->getCategoryAll()->result_array();
    $id = $_SESSION['id'];
    $data['image']    = $this->user->getImage($id)->result_array();
  
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }
     $data_product = array(
       'title_product'  => $_POST['title_product'] ,
       'id_useradmin'   => $_SESSION['id'],
       'id_category'  => $_POST['category'] ,
       'slug_product'   => slug($_POST['token'].'_'.$_POST['title_product']),
       'price'          => $_POST['price'] ,
       'weight'         => $_POST['weight'] ,
       'length'         => $_POST['length'] ,
       'width'          => $_POST['width'] ,
       'height'         => $_POST['height'] ,
       'description'    => $_POST['description'] ,
       'id_measurement' => $_POST['measurement'] ,
       'status'         => $status ,
       'created_at'     => date('Y-m-j H:i:s'),
     );
     $product = $this->product->addProduct($data_product);
     $index = 0;
     $variation = array();
     foreach ($_POST['variation'] as $vr) {
       array_push($variation, array(
         'id_product'     => $product,
         'variation'      => $vr,
         'qty'            => $_POST['qty'][$index],
         'size'           => $_POST['size'][$index],
         'created_at'     => date('Y-m-j H:i:s')
       ));
       $index++;
     }      
     $this->product->addVariation($variation);
			$token 		    = array(
        'token'         => $_POST['token'],
        'token_backup'  => $_POST['tokenB']
      );
			$data['imgtmp'] = $this->product->whereImgsTemp($token)->result_array();
			$x=0;
			foreach ($data['imgtmp'] as $key) {
				$data[$x]['img_path'] = $key['img_path'];
				$x++;
			}
			for($i=0; $i < $x; $i++){
				$gmb[$i]['img_path'] = $data[$i]['img_path'];
			}
			foreach ($gmb as $gmb) {
				$insert= array   (
          'img_path'       => $gmb['img_path'] ,
          'id_product'     => $product,
          'created_at'     => date('Y-m-j H:i:s'),
        );
				$this->product->addImg($insert);
			}
      $this->product->delTempImg($token);
      $this->session->set_flashdata('success_msg', 'Tambah Produk berhasil');
      redirect(base_url("Admin/product"));           
    }
    $this->template->back_views('site/back/productAdd',$data);  
  }
  public function delImg($id){
    $this->product->deleteImage($id);
  }
  public function imgUpload(){
    $dir = $_POST['token'];
    $config['upload_path']   = './assets/img/content/product/'.$dir.'/';
    $config['allowed_types'] = 'gif|jpg|png|ico';
    $this->load->library('upload',$config);      
    $path = '/img/content/product/'.$dir.'/';
    if (!is_dir('assets/img/content/product/'.$dir)) {
        mkdir('./assets/img/content/product/'.$dir, 0777, TRUE);
    }

    if($this->upload->do_upload('userfile')){
        $path.= $this->upload->data('file_name');
        $token		= $this->input->post('token');
        $tokenB   = $_POST['tokenB'];
        $date     = date("Y-m-d h:i:s");
        $this->db->insert('em_product_img_temps', array('img_path'=>$path, 'token'=> $token, 'token_backup'=> $tokenB, 'created_at'=>$date));
    }
  }
  public function editImgUpload(){
    $dir = $_POST['token'];
    $config['upload_path']   = './assets/img/content/product/'.$dir.'/';
    $config['allowed_types'] = 'gif|jpg|png|ico';
    $this->load->library('upload',$config);      
    $path = '/img/content/product/'.$dir.'/';
    if (!is_dir('assets/img/content/product/'.$dir)) {
        mkdir('./assets/img/content/product/'.$dir, 0777, TRUE);
    }

    if($this->upload->do_upload('userfile')){
        $path.= $this->upload->data('file_name');
        $insert= array   (
          'img_path'       => $path ,
          'id_product'     => $_POST['product'],
          'created_at'     => date('Y-m-j H:i:s'),
        );
        $this->product->addImg($insert);
    }
  }

  public function editProduct($id){
    $data['codepage']     = "back_editProduct";
    $data['page_title'] 	= 'Perbarui Produk';
    $data['pr']           = $this->product->getProductbyId($id)->row_array();
    $data['vr']           = $this->product->getVariantByProduct($id)->result_array();
    $data['img']          = $this->product->getImgByProduct($id)->result_array();
    $data['countvr']      = $this->product->countVariant($id);
    $data['measurement']  = $this->product->getMeasurement()->result_array();
    $data['category']     = $this->category->getCategoryAll()->result_array();
   
    //print_r($data);die();
    if(isset($_POST['submit'])){
      if (isset($_POST['status']) == null ) {
        $status = 1;
      }else{
        $status = 0;
      }
      $data = array(
        'title_product'  => $_POST['title_product'] ,
        'id_category'  => $_POST['category'] ,
        'price'          => $_POST['price'] ,
        'weight'         => $_POST['weight'] ,
        'length'         => $_POST['length'] ,
        'width'          => $_POST['width'] ,
        'height'         => $_POST['height'] ,
        'description'    => $_POST['description'] ,
        'id_measurement' => $_POST['measurement'] ,
        'status'         => $status ,
        'updated_at'     => date('Y-m-j H:i:s')
      );
      $this->product->editProduct($_POST['id'],$data);
      $index = $_POST['index'];
      
      $variation = array();
      foreach ($_POST['variation'] as $vr) {
        array_push($variation, array(
          'id_product'     => $_POST['id'],
          'variation'      => $vr,
          'qty'            => $_POST['qty'][$index],
          'size'           => $_POST['size'][$index],
          'created_at'     => date('Y-m-j H:i:s')
        ));
        $index++;
        }        
      $this->product->addVariation($variation);
      $this->session->set_flashdata('success_msg', 'Update Produk berhasil');
      redirect(base_url("Admin/product"));    
    }
    
    $this->template->back_views('site/back/productAdd',$data);   
  }
  public function listProductDraft(){
    $data['codepage']     = "back_product";
    $data['page_title'] 	= 'Produk Disimpan';
    $data['product']      = $this->product->getListDraftProduct()->result_array();
    $id = $_SESSION['id'];
    $data['image']    = $this->user->getImage($id)->result_array();
    $this->template->back_views('site/back/productList',$data);
  }
  // Dellete Product
  public function del_product($id)
  {
      $this->product->editProduct($id, array('deleted_at' => date('Y-m-j H:i:s')));
  }



  // summernote
 public function upload_image()
 {
   if(isset($_FILES["image"]["name"])){
    $config['upload_path'] = './assets/img/content/summernote/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $this->upload->initialize($config);
    if(!$this->upload->do_upload('image')){
        $this->upload->display_errors();
        return FALSE;
    }else{
      $data = $this->upload->data();
      //compress
       $data = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/content/summernote/'.$data['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= TRUE;
                $config['quality']= '60%';
                $config['width']= 800;
                $config['height']= 800;
                $config['new_image']= './assets/img/content/summernote/'.$data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url().'assets/img/content/summernote/'.$data['file_name'];
    }
   }
 }
 public function delete_image() {
    $src = $this->input->post('src');
    $file_name = str_replace(base_url(), '', $src);
    if(unlink($file_name)){
        echo 'File Delete Successfully';
  }
 }
 

}

/* End of file Product.php */