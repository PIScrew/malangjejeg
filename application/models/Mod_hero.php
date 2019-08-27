<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_hero extends CI_Model {
    
    protected $hero       = 'mj_site_hero';

    public function getHeroAll(){
        $this->db->select('*');
        return $this->db->get($this->hero);
      }
    public function getHeroById($id){
        $this->db->select($this->hero.'.*');
        $this->db->from($this->hero);
        $this->db->where($this->hero.'.id', $id);
    return $this->db->get();
  }
    public function createHero($data){
        return $this->db->insert($this->hero,$data);
    }
    public function updateHero($id=0, $data=0){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->hero);
    }
    public function deleteHero($id){
        $this->db->where('id', $id);
        $this->db->delete($this->hero);
    }
}

/* End of file Mod_carousel.php */
