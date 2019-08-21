<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_cart extends CI_Model {

    protected $cart     = 'em_carts';
    protected $product             = 'em_products';
    protected $product_variant     = 'em_product_variations';

    function get_cart_by_user($id_user){
        // $table=$this->get_table();
        // if ($table=="ecs_cart") {
        //     $query="SELECT c.id_affiliate,c.id_product,p.weight,p.slug_product,p.title_product,p.selling_price,c.*,p.qty as stok, (select img_path from ecs_img_product i where p.token=i.token and p.token_backup=i.token_backup limit 1) as image FROM ecs_product p, ecs_cart c where c.id_product=p.id_product and c.id_user=$id_user ORDER BY c.id_cart";
        // } else {
            // $query="SELECT c.id_affiliate,c.id_product,p.weight,p.slug_product,p.title_product,p.selling_price,c.id_cart_guest as id_cart,c.qty,p.qty as stok, (select img_path from ecs_img_product i where p.token=i.token and p.token_backup=i.token_backup limit 1) as image FROM ecs_product p, ecs_cart_guest c where c.id_product=p.id_product and c.id_guest=$id_user ORDER BY c.id_cart_guest";
        // }
        // $result=$this->db->query($query);
        // return $result->result_array();
        }

    public function getCount(){
        $this->db->where('id_user',$_SESSION['id']);
        $this->db->from($this->cart);
        return $this->db->count_all_results();
    }
    public function getListCart(){
        $this->db->where('id_user',$_SESSION['id']);
        return $this->db->get($this->cart);
    }
    
    public function insert($data){
        $this->db->insert($this->cart, $data);
    }
    public function update($id,$qty){
        $this->db->set('qty', $qty);
        $this->db->where('id', $id);
        $this->db->update($this->cart);
    }
    public function delItem($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->cart); 
    }
    public function getListCartCheckout(){
        $this->db->select($this->cart.'.*,'.$this->cart.'.qty as qty_cart,'.$this->product.'.id,'.$this->product.'.slug_product,'.$this->product.'.title_product,'.$this->product.'.deleted_at,'.$this->product.'.weight,'.$this->product.'.price,'.$this->product.'.status,'.$this->product_variant.'.*,');
        $this->db->from($this->cart);
        $this->db->join($this->product, $this->product.'.id = '.$this->cart.'.id_product');
        $this->db->join($this->product_variant, $this->product_variant.'.id = '.$this->cart.'.id_variation');     
        $this->db->where($this->product.'.status ', 1);
        $this->db->where($this->product.'.deleted_at ', 0000);
        $this->db->where($this->cart.'.id_user', $_SESSION['id']);  
        return $this->db->get();
    }
    public function getItemCartByid($id_product,$id_variant){
        $this->db->where('id_user', $_SESSION['id']);
        $this->db->where('id_product', $id_product);
        $this->db->where('id_variation',$id_variant);
        return $this->db->get($this->cart);
    }
}

/* End of file Mod_cart.php */
