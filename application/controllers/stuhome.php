<?php
class Stuhome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('stid')!=null ) {
    		$this->load->view('stuhome');
    	}else{
    		redirect("login");
    	}
        
    }
}

?>