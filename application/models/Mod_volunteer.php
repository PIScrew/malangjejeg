<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_volunteer extends CI_Model {

  protected $volunteer            = 'mj_volunteer';
  // protected $category            = 'em_product_categories';

  public function getVolunteerAll(){
    $this->db->select('*');
    // $this->db->where('deleted_at',null);
    return $this->db->get($this->volunteer);
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
  public function getVolunteerByid($id)
  {
      $this->db->where('id', $id);
      $this->db->limit(1);
      return $this->db->get($this->volunteer); 
  }
  public function update($data,$id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update($this->volunteer);
  }
  public function create($data){
    $this->db->insert($this->volunteer, $data);
  }
  public function delete($id){
    $this->db->set('deleted_at',date('Y-m-d H:m:s'));
    $this->db->where('id', $id);
    $this->db->update($this->volunteer);
  }
}

/* End of file Mod_category.php */
