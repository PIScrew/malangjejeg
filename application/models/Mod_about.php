<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_about extends CI_Model {
    
    protected $about        = 'mj_about';

    public function getAboutAll(){
        $this->db->select('*');
        return $this->db->get($this->about);
      }
    public function getAboutById($id){
        $this->db->select($this->about.'.*');
        $this->db->from($this->about);
        $this->db->where($this->about.'.id_about', $id);
    return $this->db->get();
  }
    public function create_about($data){
        return $this->db->insert($this->about,$data);
    }
    public function updateAbout($id=0, $data=0){
        $this->db->set($data);
        $this->db->where('id_about', $id);
        $this->db->update($this->about);
    }
    public function deleteAbout($id){
        $this->db->where('id_about', $id);
        $this->db->delete($this->about);
    }
}

/* End of file Mod_about.php */
