<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_order extends CI_Model {

  protected $order                  = 'mj_invoice_guest';
  // protected $category            = 'em_product_categories';

  public function getOrderAll(){
    $this->db->select('*');
    // $this->db->where('deleted_at',null);
    return $this->db->get($this->order);
  }

  public function update_status(){
      $id = $_REQUEST['$id'];
      $saval = $_REQUEST['$val'];
      if($saval==1)
      {
          $status = 0;
      }
      else
      {
          $status = 1;
      }
      $data = array(
          'status' => $status
      );
      $this->db->where('id_invoice',$id);
      return $this->db->update('mj_invoice_guest',$data);
  }
//   public function getCategoryBySlug($slug_category)
//   {
//       $this->db->select('*');
//       $this->db->from($this->category);
//       $this->db->where('slug_category', $slug_category);
//       $this->db->order_by('created_at','DESC');
//       $this->db->limit(1);
//       return $this->db->get(); 
//   }
//   public function getDonatorByid($id)
//   {
//       $this->db->where('id_donator', $id);
//       $this->db->limit(1);
//       return $this->db->get($this->donator); 
//   }
//   public function update($id,$data){
//     $this->db->set($data);
//     $this->db->where('id_donator', $id);
//     $this->db->update($this->donator);
//   }
//   public function create($data){
//     $this->db->insert($this->donator, $data);
//   }
//   public function delete($id){
//     $this->db->where('id_donator', $id);
//     return $this->db->delete($this->donator);
//   }
}

/* End of file Mod_category.php */
