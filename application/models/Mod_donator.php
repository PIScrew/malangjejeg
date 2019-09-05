<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_donator extends CI_Model {

  protected $donator            = 'mj_donators';
  // protected $category            = 'em_product_categories';

  public function getDonatorAll(){
    $this->db->select('*');
    // $this->db->where('deleted_at',null);
    return $this->db->get($this->donator);
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
  public function getDonatorByid($id)
  {
      $this->db->where('id_donator', $id);
      $this->db->limit(1);
      return $this->db->get($this->donator); 
  }
  public function update($id,$data){
    $this->db->set($data);
    $this->db->where('id_donator', $id);
    $this->db->update($this->donator);
  }
  public function create($data){
    $this->db->insert($this->donator, $data);
  }
  public function delete($id){
    $this->db->where('id_donator', $id);
    return $this->db->delete($this->donator);
  }
}

/* End of file Mod_category.php */
