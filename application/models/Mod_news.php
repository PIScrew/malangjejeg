<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_news extends CI_Model {
    
    protected $news       = 'mj_news';

    public function getNewsAll(){
        $this->db->select('*');
        return $this->db->get($this->news);
      }
    public function getNewsById($id){
        $this->db->select($this->news.'.*');
        $this->db->from($this->news);
        $this->db->where($this->news.'.id_news', $id);
    return $this->db->get();
  }
    public function createNews($data){
        return $this->db->insert($this->news,$data);
    }
    public function updateNews($id=0, $data=0){
        $this->db->set($data);
        $this->db->where('id_news', $id);
        $this->db->update($this->news);
    }
    public function deleteNews($id){
        $this->db->where('id_news', $id);
        $this->db->delete($this->news);
    }
}

/* End of file Mod_carousel.php */
