
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_guest extends CI_Model {

	protected $guest = 'mj_guest';
    function generate_guest(){
			$this->load->library('user_agent');
    	$string= $this->generateRandomString(25);
			$timestamp= date("Y-m-d h:i:s");
			$browser =$this->agent->browser();
			$ip 		=$this->input->ip_address();
    	$insert=$this->db->query("insert into $this->guest (unique_text,created_at,browser,ip) values ('$string','$timestamp','$browser','$ip')");
    	if ($insert) {
    		$guest=$this->db->query("select * from $this->guest where unique_text='$string' and created_at='$timestamp'")->result_array();
    		setcookie("id_guest",$guest[0]['id_guest'],0);
    	}
        return $guest[0]['id_guest'];	
	}
	// getGrafik Visitor
	public function getChartVisitor()
	{
		$query = $this->db->query('SELECT MONTHNAME(g.created_at) as month, MONTH (g.created_at) as monthnum, YEAR(g.created_at) as year,
		 COUNT(g.id_guest) as count,
		 COUNT(g.id_guest) +
		 (
		  SELECT COUNT(t.id_guest)
		  FROM ecs_guest t
		  WHERE t.created_at < g.created_at
		 ) 
		 AS accumulate
		  FROM     (
			SELECT id_guest, created_at
			from ecs_guest
			WHERE created_at > DATE_SUB(now(), INTERVAL 6 MONTH)
		  ) g
		 GROUP BY MONTHNAME(g.created_at)
		 ORDER BY YEAR, MONTHNUM');
		return $query->result();
	}
	// end Grafik Visitor

	function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

}

/* End of file Model_guest.php */
