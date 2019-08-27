<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_option extends CI_Model {
    
    protected $option        = 'mj_program';

    public function getOptionAll(){
        $this->db->select('*');
        return $this->db->get($this->option);
      }
    public function getOptionById($id){
        $this->db->select($this->option.'.*');
        $this->db->from($this->option);
        $this->db->where($this->option.'.id', $id);
    return $this->db->get();
  }
    public function createOption($data){
        return $this->db->insert($this->option,$data);
    }
    public function updateOption($id=0, $data=0){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->option);
    }
    public function deleteOption($id){
        $this->db->where('id', $id);
        $this->db->delete($this->option);
    }
}

/* End of file Mod_galery.php */
