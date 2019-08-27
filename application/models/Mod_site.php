<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_site extends CI_Model {

  protected $site = 'mj_site';
  protected $email = 'ecs_template_email';

  public function getSite()
  {
    $this->db->select('*');
    $this->db->from($this->site);
    $this->db->order_by('id_site', 'asc');
    $this->db->where('id_site', 1 );
    return $this->db->get();
  }

  public function getSiteData($selectSite)
  {
    return $this->db->get_where($this->site,array('id_site'=>$selectSite));
  }


  public function updateSite($favicon,$logo,$logo_dashboard)
  {
    $data = array(
      'title'         => $_POST['title'],
      'description'   => $_POST['description'],
      'tags'          => $_POST['tags'],
      // 'favicon'       => @$favicon,
      // 'logo'          => @$logo,
      // 'logo_dashboard'=> @$logo_dashboard
    );

    if($favicon !=null){
      $data ['favicon'] = @$favicon;
    }
    if($logo !=null){
      $data ['logo'] = @$logo;
    }
    if($logo_dashboard !=null){
      $data ['logo_dashboard'] = @$logo_dashboard;
    }    

    $this->db->set($data);
    $this->db->where('id_site', 1);
    $this->db->update($this->site);
  }
  public function getData()
  {
    $this->db->select('*');
    $this->db->from($this->site);
    $this->db->order_by('id_site', 'desc');
    $this->db->limit(1); 
    return $this->db->get();
  }
  public function updateAddress($data){
    $this->db->set($data);
    $this->db->where('id_site', 1);
    $this->db->update($this->site);
  }
  public function mg_send($email, $subject, $message) {

		$from="officialpasarmbois@gmail.com";
		$nama="PasarMbois";
		$ch = curl_init();

	// $domain = 'sandbox668e327dfe40402bb7ea1664206ffee2.mailgun.org';
		$domain = 'penidatrip.com';

		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	// curl_setopt($ch, CURLOPT_USERPWD, 'api:'.'key-264f3a7d772ec865e54fa92523230178');
		curl_setopt($ch, CURLOPT_USERPWD, 'api:'.'key-264f3a7d772ec865e54fa92523230178');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$plain = $message;
		$from = $nama . ' <' . $from . '>';

		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/'.$domain.'/messages');
		curl_setopt($ch, CURLOPT_POSTFIELDS, array('from' => $from,
			'to' => $email,
			'subject' => $subject,
			'html' => $message,
			'text' => $plain));

		$j = json_decode(curl_exec($ch));
		$info = curl_getinfo($ch);

		if($info['http_code'] != 200) {
        // error("Fel 313: Vänligen meddela detta via E-post till support@".$domain);
		}

		curl_close($ch);
		return $j;

  }
  public function updateSiteOther($img_product_default,$img_user_default,$img_category_default)
  {
    $data = array(
      'title'         => $_POST['title'],
      'description'   => $_POST['description'],
      'tags'          => $_POST['tags'],
      // 'favicon'       => @$favicon,
      // 'logo'          => @$logo,
      // 'logo_dashboard'=> @$logo_dashboard
    );
    $data = array(
      'page_category'     =>$_POST['page_category'],
      'page_search'       =>$_POST['page_search']
  );
    if($img_product_default !=null){
      $data ['img_product_default'] = @$img_product_default;
    }
    if($img_user_default !=null){
      $data ['img_user_default'] = @$img_user_default;
    }
    if($img_category_default !=null){
      $data ['img_category_default'] = @$img_category_default;
    }    

    $this->db->set($data);
    $this->db->where('id_site', 1);
    $this->db->update($this->site);
  }
  public function getAllEmail(){
    return $this->db->get($this->email);
  }
  public function getEmailByid($id){
    $this->db->where('id_template', $id);
    return $this->db->get($this->email);    
  }
  public function editTemplate($data){
    $this->db->set($data);
    $this->db->where('id_template', $_POST['id']);
    $this->db->update($this->email);
  }

}

/* End of file Model_site.php */
