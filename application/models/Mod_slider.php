<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_slider extends CI_Model {
    
    protected $slider         = 'mj_site_sliders';

    public function getAllSlider($id_site){
        $this->db->order_by('id', 'desc');
        return $this->db->get_where($this->slider, array('id_site'=>$id_site));
    }
    public function create($data){
        return $this->db->insert($this->slider,$data);
    }
    public function getDetailById($id){
        $this->db->where('id', $id);
        return $this->db->get($this->slider);
    }
    public function update($data,$id){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->slider);
    }
    public function deleted($id){
        $this->db->where('id', $id);
        $this->db->delete($this->slider);
    }
}

/* End of file Mod_slider.php */
