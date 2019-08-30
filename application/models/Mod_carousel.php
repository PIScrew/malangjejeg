<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_carousel extends CI_Model {
    
    protected $carousel        = 'mj_carousel_figure';

    public function getCarouselAll(){
        $this->db->select('*');
        return $this->db->get($this->carousel);
      }
    public function getCarouselById($id){
        $this->db->select($this->carousel.'.*');
        $this->db->from($this->carousel);
        $this->db->where($this->carousel.'.id_carousel_figure', $id);
    return $this->db->get();
  }
    public function createCarousel($data){
        return $this->db->insert($this->carousel,$data);
    }
    public function updateCarousel($id,$data){
        $this->db->set($data);
        $this->db->where('id_carousel_figure',$id);
        $this->db->update($this->carousel);
    }
    public function deleteCarousel($id){
        $this->db->where('id_carousel_figure', $id);
        $this->db->delete($this->carousel);
    }
}

/* End of file Mod_carousel.php */
