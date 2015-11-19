<?php
class Tutorlog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('tuid')!=null ) {
    		$this->load->view('tutorlog');
    	}else{
    		redirect("login");
    	}
        
    }
}

?>