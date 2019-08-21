<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends PIS_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('Mod_notification','notif');
      $this->load->library("pagination");
         
  
    }

   public function index()
  {
    $config['row'] = $this->notif->row();
    $config['base_url']=base_url().'admin/notification/index';
    $config['per_page'] = 15;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    $data['codepage'] = "back_page";
    $data['notifi'] = $this->notif->getAllNotif($config['per_page'],$from);
    $data["links"] = $this->pagination->create_links();
    //print_r($data); die;      
    $data['codepage']    = "back_page";
    $data['page_title']  ="Notification";                                                           
    $this->template->back_views('site/back/listNotif',$data);
  }
  public function notif(){
    $data['codepage']  = "back_page";
    $data['notif']     = $this->notif->getNotif();
    $data['jumlah']    = $this->notif->countNotif();                                                              
    $this->template->back_views('layouts/back/header',$data);
  }
  public function readNotif($id){
    $data['codepage'] = "back_page";
    $data_array = array(
        'status' => 1
    );
    $this->notif->getNotifbyId($id,$data_array);

  }
  public function count(){
    if (@$_SESSION['id']) {
      $data = $this->notif->getCount();
    }else{
      $data = count($this->Notification->contents());
    }
    echo json_encode($data);
  }
  public function linkNotif($id){
    
     $data['codepage'] = "back_page";
     $var = $this->notif->getValue($id)->row_array();
     $id_transaction = $var['id_transaction'];
     $id_ticket      = $var['id_ticket'];
     $id_review      = $var['id_review'];
     $id_comment     = $var['id_comment'];
     $data_read = array(
        'read_at' => date('Y-m-j H:i:s')
     );
     if($id_transaction != 0){
      $data['page_title'] = "Pemberitahuan Transaksi";
      $data['transaksi'] = $this->notif->getTransaksi($id)->row_array();
      //print_r($data);die;
      $this->template->back_views('site/back/detailNotif',$data);
     }else if($id_ticket != 0){
      $data['page_title'] = "Pemberitahuan Tiket";
      $data['ticket'] = $this->notif->getTicket($id)->row_array();
      //print_r($data);die;
      $this->template->back_views('site/back/detailNotif',$data);
     }else if($id_review != 0){
      redirect(base_url('admin/notification/review/'.$id));
     }else if($id_comment != 0){
      redirect(base_url('admin/notification/comment/'.$id));       
     }
     $this->notif->readNotif($id,$data_read);
    //print_r($id_transaction);die;

  }
  public function review(){

  }
  public function comment(){

  }

}
