<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_page extends CI_Model {
    protected $help = 'em_page_help';
    protected $faq = 'em_page_faq';
    protected $about = 'em_page_about';

    //help
    public function getHelp(){
        $this->db->where('deleted_at is null');
        return $this->db->get($this->help);
    }
    public function getHelpbyId($id){
        $this->db->where('id',$id);
        return $this->db->get($this->help);
    }
    public function insertHelp($data){
        $this->db->insert($this->help, $data);
        return $this->db->insert_id();
    }
    public function editHelp($id=0 , $data=0){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->help);
    }

    //faq
    public function getFaq(){
        $this->db->where('deleted_at is null');
        return $this->db->get($this->faq);
    }
    public function getFaqbyId($id){
        $this->db->where('id',$id);
        return $this->db->get($this->faq);
    }
    public function insertFaq($data){
        $this->db->insert($this->faq, $data);
        return $this->db->insert_id();
    }
    public function editFaq($id = 0,$data = 0){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->faq);
    }

    //about
    public function getAbout(){
        $this->db->where('deleted_at is null');
        return $this->db->get($this->about);
    }
    public function getAboutbyId($id){
        $this->db->where('id',$id);
        return $this->db->get($this->about);
    }
    public function addAbout($data){
        $this->db->insert($this->about, $data);
        return $this->db->insert_id();
    }
    public function editAbout($id = 0 , $data = 0){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->about);
    }

}