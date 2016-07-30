
<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';


class Informes extends REST_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('informes_model');
	}

    public function index_get(){
       $user=$this->informes_model->get();
       $this->response($user,200);
    }

     public function ejemplo_get(){
       $user=$this->informes_model->ejemplo();
       print_r($user);
       $this->response(array("usuarios" => $user),200);
    }
    
}
