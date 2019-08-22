<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends PIS_Controller {
  // private $limit = 8;
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_slider','slider');
    $this->load->model('Mod_product','product');
    $this->load->model('Mod_category','category');
    $this->load->model('Mod_review','review');
    $this->load->model('Mod_guest', 'guest');
    // $this->load->model('Mod_tokens','mTokens');
    // $this->load->model('Mod_comment','comment');
    // $this->load->model('Mod_qrcode','qrcode');
    // $this->load->model('Mod_cart','cart');
    $this->load->model('Mod_system','system');
    $this->load->model('Mod_transaction','transaction');
    $this->load->library('pagination');
    $this->load->helper('url');

    $data['system']   = $this->system->getSiteData(2)->row_array();
    $this->load->vars($data);
    // print_r( $data['system']); die();
  }
  
  public function index()
  {
    // print_r($_SESSION);die();

    $data['codepage']		  = "home";
    $data['subpage']      = " ";
    $data['slider']       = $this->slider->getAllSlider(1)->result_array();
    $data['productNew']   = $this->product->getListProduct()->result_array();
    // $data['populer']      = $this->product->productPopuler()->result_array();  
    $this->template->store_views('site/store/home', $data);
  }

  public function detail($slug)
  {
    $data['code_page']	= "detail_produk";
    $slug_produk        = $this->uri->segment(2);
    $data['product']    = $this->product->getProdukBySlug($slug_produk)->row_array();
    $data['img_path']   = $this->product->getAllImageByProduct($data['product']['token'],$data['product']['token_backup'])->result_array();
    $data['similar']    = $this->product->getSimilarProduct($data['product']['id_category'])->result_array();    
    $data['ct']         = $this->category->getCategoryById($data['product']['id_category'])->row_array();
    $data['review']     = $this->review->getReviewByProduct($data['product']['id_product'])->result_array();
    $data['cr']         = $this->review->countReviewByProduct($data['product']['id_product']);
    $data['comment']    = $this->comment->getCommentByProduct($data['product']['id_product'])->result_array();
    $data['reply']      = $this->comment->getReplayComment()->result_array();   
    $data['cc']         = $this->comment->countCommentByProduct($data['product']['id_product']);

    if(isset($_SESSION['id_user']))
    $gen                = $this->product->getCodeAffiliate($_SESSION['id_user'], $data['product']['id_product'])->row_array();
    else $gen           = null;

    $data['gen']        = $gen['code_affiliate'] != null? $gen['code_affiliate']:'empty';
    $data['link']       = $gen['link'];
    // print_r($data['gen']); die();
    $this->product->addViews($data['product']['id_product']);
    $this->template->front_views('store/detail-produk',$data);
  }

  public function gen_link_affiliate()
  {
    $gen  = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
    $data = array(
      'id_product'      => $_POST['id_product'],
      'id_user'         => $_SESSION['id_user'],
      'code_affiliate'  => $gen,
      'link'            => $_POST['link'].'?ca='.$gen,
      'created_at'      => date('Y:m:d h:i:s')
    );
    $this->product->genAffiliate($data);
  }

  function destroy(){
    setcookie("id_guest",'',0);
  }
  //Search
  public function Search(){
    $system = $this->getSystem();
    $data['code_page']   = "search";
    $data['keyword']     = $_GET['search'];// != null ? $_GET['search'] : ;
    $data['search']      = '?search='.$_GET['search'].'&isHeader='.$_GET['isHeader'];
    $data['filter']      = null;
    $data['data_filter'] = null;

    // search from header
    if ($_GET['isHeader'] == 1) {
      // pagination
      $config['base_url']     = base_url('Home/Search/');
      $config['total_rows']   = $this->product->countProdukBySearch($data['keyword']);
      $config['per_page']     = $system['page_search'];
      $config['uri_segment']  = 3;
      $this->pagination->initialize($config);
      $start = $this->uri->segment(3, 0);
      
      // ubah data menjadi tampilan per limit
      $data['rows']     = $config['total_rows'];
      $data['start']    = $start+1;
      $data['end']      = (($start + $this->limit) > $config['total_rows']) ? $config['total_rows'] : $start + $this->limit;
      $data['product']	= $this->product->getProductBySearch($data['keyword'],$config['per_page'],$start)->result_array();
    }
    else {
      // pagination
      $config['base_url']     = base_url('Home/Search/');
      $config['total_rows']   = $this->product->countProdukBySearchFilter($data['keyword']);
      $config['per_page']     = $system['page_search'];
      $config['uri_segment']  = 3;
      $this->pagination->initialize($config);
      $start                  = $this->uri->segment(3, 0);
      $data_filter            = array('SortBy' => $_GET['SortBy'], 'min' => $_GET['min'], 'max' => $_GET['max'], 'score' => $_GET['score']);

      // ubah data menjadi tampilan per limit
      $data['rows']        = $config['total_rows'];
      $data['start']       = $start+1;
      $data['end']         = (($start + $this->limit) > $config['total_rows']) ? $config['total_rows'] : $start + $this->limit;
      $data['product']	   = $this->product->getProductBySearchFilter($data['keyword'],$config['per_page'],$start)->result_array();
      $data['filter']      = '&SortBy='.$_GET['SortBy'].'&min='.$_GET['min'].'&max='.$_GET['max'].'&score='.$_GET['score'];
      $data['data_filter'] = json_encode($data_filter);
    }
    // get list subkategori
    $data['paging']       = $this->pagination->create_links();
    $this->template->front_views('store/search',$data);
  }
  // end Search
  public function forgotPwd(){
    $data['code_page']= 'forgotpwd';
    $data 	= array ("page" => "forgot");
    $this->load->library('form_validation');
    $this->load->library('email');
    $config['mailtype'] = 'html'; 
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');            
    if($this->form_validation->run() == FALSE) {  
      $this->template->front_views('login/index',$data);
    }else{  
        $email = $this->input->post('email');  
        $clean = $this->security->xss_clean($email);  
        $userInfo = $this->mTokens->getUserInfoByEmail($clean);
        //build token           
        $token = $this->mTokens->insertToken($userInfo->email);
        $user = $this->user->getUserByEmail($userInfo->email)->row_array();           
        $qstring = $this->base64url_encode($token);
        $template = $this->site->getEmailByid(2)->row_array();           
        $url = site_url() . '/Home/reset_password/' . $qstring;
        $system = $this->getSystem();
        $subject= $template['subject'];
          $content = array  ( 
            'logo'    => img_url($system['logo']),
            'button'    => 'ResetPassword',
            'username'  => $user['username'],
            'fullname'   => $user['firstname']." ".$user['lastname'],
            'url'       => $url, 
            'subject'   => $template['subject'],
            'opening'   => $template['opening'],
            'content'   => $template['content'],
            'closing'   => $template['closing'],
            'detail'    => "",
            'time'      => "",
            'class'     => "",
            'rekening'  => "",
            'value'     => ""
           );
        // $email = $id->email;
        $message = ''; 
        $message .= $this->load->view('email/email-reset',$content, TRUE);  
        $this->site->mg_send($email, $subject, $message);
        redirect(site_url('login'),'refresh');
    }
  }

  function api_reset_password(){
    $email = $this->input->post('email');  
    $clean = $this->security->xss_clean($email);  
    $userInfo = $this->mTokens->getUserInfoByEmail($clean);
    //build token           
    $token = $this->mTokens->insertToken($userInfo->email);
    $user = $this->user->getUserByEmail($userInfo->email)->row_array();           
    $qstring = $this->base64url_encode($token);
    $template = $this->site->getEmailByid(2)->row_array();            
    $url = site_url() . '/Home/reset_password/' . $qstring;
    $system = $this->getSystem();
    $subject= $template['subject'];
      $content = array  ( 
        'logo'    => img_url($system['logo']),
        'button'    => 'ResetPassword',
        'username'  => $user['username'],
        'fulname'   => $user['firstname'].$user['lastname'],
        'url'       => $url, 
        'subject'   => $subject,
        'opening'   => $template['opening'],
        'content'   => $template['content'],
        'closing'   => $template['closing'],
        'detail'    => "",
        'time'      => "",
        'class'     => "",
        'rekening'  => "",
        'value'     => ""
       );
    // $email = $id->email;
    $message = ''; 
    $message .= $this->load->view('template-email',$content, TRUE);          
    // kirim email
    $this->model_admin->mg_send($email, $subject, $message);
    echo json_encode($url);
  }
  // checkemail forgot password
  public function checkEmail()
  {
    $email =$_POST['email'];
		$forgotpwd = $this->user->checkEmail($email)->num_rows();
		header('COntent-type: application/json');
		echo json_encode($forgotpwd);
  }
  public function base64url_encode($data) {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
  }   
   
  public function base64url_decode($data) {   
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
  }
  public function reset_password()  
  {  
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->helper('security');
    $token = $this->base64url_decode($this->uri->segment(3));           
    $cleanToken = $this->security->xss_clean($token);
    $user_info = $this->mTokens->isTokenValid($cleanToken);
  //either false or array();          
    if(!$user_info){  
      $this->session->set_flashdata('fail_reg', 'Token Reset Password tidak valid atau kedaluarsa');  
      redirect(site_url('Login'));   
    } 
    $this->form_validation->set_message('min_length', 'Password Kurang panjang');
    $this->form_validation->set_message('matches', 'Password tidak cocok');          
    $this->form_validation->set_rules('password', 'Pasword kurang banya', 'required|min_length[5]');  
    $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');         
      
    if ($this->form_validation->run() == TRUE) {
      $post = $this->input->post(NULL, TRUE);     
      $cleanPost = $this->security->xss_clean($post);      
      $hashed = md5($cleanPost['password']);         
      $cleanPost['password'] = $hashed;  
      $cleanPost['id_user'] = $user_info->id_user;
      $cleanPost['email']   = $user_info->email; 
      unset($cleanPost['passconf']);   
      if(!$this->mTokens->updatePassword($cleanPost)){
        $this->session->set_flashdata('fail_reg', 'Update password gagal.');  
      }else{  
        $this->mTokens->updateToken($cleanPost);
        $this->session->set_flashdata('success_reg', 'Password anda sudah  
          diperbaharui. Silakan login.');  
      }  
      redirect(site_url('Login'));  
    }else{
      // $data 	= array ();
    $data = array(
      'code_page' => "reset",
      'token'=>$this->base64url_encode($token)  
    );   
    $this->template->front_views('login',$data); 
    }  
  }
  public function addComment(){
    $product = $this->product->getProductbyId($_POST['id_product'])->row_array();
    if(isset($_POST['submit'])){
      if (isset($_POST['parent'])) {
        $get_sender=$this->comment->getCommentByData(array('id_comment'=>$_POST['parent']));
        $id_user_sender=$get_sender[0]['id_user'];
        $data = array(
          'id_product'=> $_POST['id_product'],
          'content'   => $_POST['content'],
          'id_user'   => $_SESSION['id_user'],
          'created_at'=> date('Y-m-d H:m:s'),
          'id_shop'   => 1,
          'parent'    => $_POST['parent']
        );
      }else{
        $data = array(
          'id_product'=> $_POST['id_product'],
          'content'   => $_POST['content'],
          'id_user'   => $_SESSION['id_user'],
          'created_at'=> date('Y-m-d H:m:s'),
          'id_shop'   => 1,
          'parent'    => 0
        );
      }
      $this->comment->addComment($data);

      //send notification
      $data_product=$this->product->getProductbyId($_POST['id_product'])->result_array();
      $desc="Anda mendapat komentar pada produk ".$data_product[0]['title_product'];
      $comment=$this->comment->getCommentByData($data);
      $id_comment=$comment[0]['id_comment'];

      if ($_SESSION['status']=="pmadmin") {
        $this->send_notification_member($id_user_sender,$desc,0,0,$id_comment);
      } else if ($_SESSION['status']=="pmmember") {
        $this->send_notification_admin($desc,0,0,$id_comment,0);
      }
      
      redirect('p/'.$product['slug_product']);
    }else{      
      redirect('p/'.$product['slug_product']);
    }
  }

  public function getProductqr(){
    $token  = $this->uri->segment(2);
    $qr     = $this->qrcode->getQrByToken($token)->row_array();
    $product = $this->product->getProductbyId($qr['id_product'])->row_array();
    //add address to cookie;
    $id_province=$qr['id_province'];
    $province=$qr['province'];
    $id_city=$qr['id_city'];
    $city=$qr['city'];
    $id_subdistrict=$qr['id_subdistrict'];
    $subdistrict=$qr['subdistrict'];
    $complete_address=$qr['complete_address'];
    $address=$this->set_qr_address($id_province,$province,$id_city,$city,$id_subdistrict,$subdistrict,$complete_address);

    $id_user = $this->get_id_user();
    $id_product = $product['id_product'];
    $qty        =1;
    $result = $this->cart->add_cart($id_user,$id_product,$qty);   
    redirect('p/'.$product['slug_product']);
    
  }
  function read_notification(){
        $id=$_POST['id_notification'];
        $read=$this->notification->readNotifById($id);
        echo $read;
  }

  function get_notification(){
        $notif=$this->notification->getNotifHeader($_SESSION['id_user']);
        echo json_encode($notif);
  }

  function scanqr(){
    $data['code_page']    = "scanqr";
    $this->template->front_views('front/simple',$data);
  }

  function cek_qr_code(){
    $qrcode=$_POST['qrcode'];
    $result=$this->qrcode->check_string_qr($qrcode);
    echo $result;
  }
  public function activ(){
    $data['code_page'] = "reg";
    $this->load->helper('security');
    $token = $this->base64url_decode($this->uri->segment(3));      
    $cleanToken = $this->security->xss_clean($token);
    $activ = $this->user->validActiv($cleanToken);
  //either false or array();          
    if(!$activ){  
      $this->session->set_flashdata('activation', 'Token Aktifasi tidak valid atau kedaluarsa');  
    }else{
      $this->user->userActive($activ->id_user);
      $this->user->userAct($activ->id_user);
      $this->session->set_flashdata('activation', 'Akun Telah Aktif Silahkan Login');
      $this->template->front_views('login',$data); 
    }  
  }
  // public function cekTrx(){
  //   $trxa = $this->transaction->getAll()->result_array();
  //   foreach ($trxa as $a) {
      
  //   }
  // }
}

/* End of file Home.php */
