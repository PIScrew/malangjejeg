<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_youtube extends CI_Model {
    
    protected $youtube      = 'mj_counter_video';

    public function getYoutubeAll(){
        $this->db->select('*');
        return $this->db->get($this->youtube);
      }
    public function getYoutubeById($id){
        $this->db->select($this->youtube.'.*');
        $this->db->from($this->youtube);
        $this->db->where($this->youtube.'.id_video', $id);
    return $this->db->get();
  }
    public function create_youtube($data){
        return $this->db->insert($this->youtube,$data);
    }
    public function updateYoutube($id=0, $data=0){
        $this->db->set($data);
        $this->db->where('id_video', $id);
        $this->db->update($this->youtube);
    }
    public function deleteYoutube($id){
        $this->db->where('id_video', $id);
        $this->db->delete($this->youtube);
    }
}

/* End of file Mod_about.php */
