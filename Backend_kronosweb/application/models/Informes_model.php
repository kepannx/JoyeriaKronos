<?php if(! defined('BASEPATH')) exit('No direct script access allowed');


class Informes_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get(){
		$query = $this->db->query("select * from TblCentrosCostosWeb");
		return $query->result();
	}

	public function ejemplo(){
		 $users = [['id' => 1, 'ñame' => 'John', 'email' => 'john@example.com', 'fact' => 'Loves codíng'],
            ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter'],['id' => 3, 'name' => 'Jane', 'email' => 'jane@example.com', 'fact' => 'Lives in the USA', ['hobbies' => ['guitar', 'cycling']]],
        ];
		return $users;
	}

    
    
}
