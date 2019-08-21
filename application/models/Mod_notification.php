<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_notification extends CI_Model {

  protected $notification = 'em_site_notifications';
  protected $transaction = 'em_transactions';
  protected $transactionUser = 'em_transaction_users';
  protected $ticket = 'em_site_tickets';
  protected $ticketDetail = 'em_site_ticket_details';
  protected $user = 'em_users';

  public function addNotif($data){
    return $this->db->insert($this->notification, $data); 
  }
  function row(){
    return $this->db->get($this->notification)->num_rows();
  }

  public function getAllNotif(){
    $this->db->from($this->notification);
    $this->db->order_by('created_at');
    return $this->db->get()->result();
  }
  public function getNotif(){
    $this->db->where('read_at is null');
    $this->db->from($this->notification);
    $this->db->order_by('created_at');
    $this->db->limit(7);
    return $this->db->get();
  }
  public function getNotifbyId($id,$data){
    $this->db->set($data);
    $this->db->where('id',$id);
    $this->db->get($this->notification);
  }
  public function getNotifTransaction(){
    $this->db->where('id_transaction != 0 OR id_transactin is not null');
    $this->db->get($this->notification);
  }
  public function getNotifTicket(){
    $this->db->where('id_ticket != 0 OR id_ticket is not null');
    $this->db->get($this->notification);
  }
  public function getNotifComment(){
    $this->db->where('id_comment != 0 OR id_comment is not null');
    $this->db->get($this->notification);
  }
  public function countNotif(){
    $this->db->where('read_at is null');
    $query = $this->db->get($this->notification);
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
  }
  public function getCount(){
    $this->db->where('id_user',$_SESSION['id']);
    $this->db->from($this->notification);
    return $this->db->count_all_results();
}
public function getValue($id){
  $this->db->where('id',$id);
  $this->db->select('id_transaction,id_ticket,id_comment,id_review');
  return $this->db->get($this->notification);
}
public function getTransaksi($id){
  $this->db->where($this->notification.'.id',$id);
  $this->db->join($this->transaction,$this->notification.'.id_transaction = '.$this->transaction.'.id');
  $this->db->join($this->transactionUser,$this->transaction.'.id =  '.$this->transactionUser.'.id_transaction');
  return $this->db->get($this->notification);
  
}
public function getTicket($id){
  $this->db->where($this->notification.'.id',$id);
  $this->db->join($this->ticket,$this->notification.'.id_ticket = '.$this->ticket.'.id');
  $this->db->join($this->ticketDetail,$this->ticket.'.id = '.$this->ticketDetail.'.id_ticket');
  $this->db->join($this->user,$this->ticket.'.id_user = '.$this->user.'.id');
  return $this->db->get($this->notification);
}
public function readNotif($id,$data){
  $this->db->set($data);
  $this->db->where('id', $id);
  $this->db->update($this->notification);

}

}

/* End of file Mod_notification.php */
