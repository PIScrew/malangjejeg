<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_visi_misi extends CI_Model {
    
    protected $visi_misi        = 'mj_visi_misi';

    public function getVisiMisiAll(){
        $this->db->select('*');
        return $this->db->get($this->visi_misi);
      }
    public function getVisiMisiById($id){
        $this->db->select($this->visi_misi.'.*');
        $this->db->from($this->visi_misi);
        $this->db->where($this->visi_misi.'.id', $id);
    return $this->db->get();
  }
    public function createVisiMisi($data){
        return $this->db->insert($this->visi_misi,$data);
    }
    public function updateVisiMisi($id=0, $data=0){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->visi_misi);
    }
    public function deleteVisiMisi($id){
        $this->db->where('id', $id);
        $this->db->delete($this->visi_misi);
    }
}

/* End of file Mod_galery.php */
