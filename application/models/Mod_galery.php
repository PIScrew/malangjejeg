<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_galery extends CI_Model {
    
    protected $galery        = 'mj_galery';

    public function getGaleryAll(){
        $this->db->select('*');
        return $this->db->get($this->galery);
      }
    public function getGaleryById($id){
        $this->db->select($this->galery.'.*');
        $this->db->from($this->galery);
        $this->db->where($this->galery.'.id_galery', $id);
    return $this->db->get();
  }
    public function createGalery($data){
        return $this->db->insert($this->galery,$data);
    }
    public function updateGalery($id=0, $data=0){
        $this->db->set($data);
        $this->db->where('id_galery', $id);
        $this->db->update($this->galery);
    }
    public function deleteGalery($id){
        $this->db->where('id_galery', $id);
        $this->db->delete($this->galery);
    }
}

/* End of file Mod_galery.php */
