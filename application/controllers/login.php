<?php
class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }   

    public function index(){
    	if ($this->session->userdata("tuid")!= null) {
    		redirect("tutorhome");
    	}elseif ($this->session->userdata("stid")!= null) {
    		redirect("stuhome");
    	}else {
    		$data['warn'] = 0;
        	$this->load->view('login',$data);
    	}
    	
    }

    public function loginuser(){
    	$user = $this->input->post("username");
    	$pass = $this->input->post("pass");

    	$sqlchtutor = "select * from user_tutor where username = '".$user."' and password = '".$pass."' ";
    	$rstu = $this->db->query($sqlchtutor);

    	$sqlchstu = "select * from user_student where username = '".$user."' and password = '".$pass."' ";
    	$rsst = $this->db->query($sqlchstu);

    	if ($rstu->num_rows() != 0) {
    		$datatu = $rstu->row_array();
    		$artu = array('tuid' => $datatu['tutor_id'] ,
    					'name' => 	$datatu['name'] ,
    					'status' => $datatu['status_id'] ,
    					'user' => "1"
    					 );
    		$this->session->set_userdata($artu);
    		redirect("tutorhome");
    	}elseif($rsst->num_rows() != 0) {
    		$datast= $rsst->row_array();
    		$arst = array('stid' => $datast['student_id'] ,
    					'name' => 	$datast['name'] ,
    					'status' => $datast['status_id'] ,
    					'user' => "2"
    					 );
    		$this->session->set_userdata($arst);
    		redirect("stuhome");
    	}else{
    		$data['warn'] = 1;
    		$this->load->view("login",$data);
    	}
    }

    public function logout(){
		$this->session->sess_destroy();
		
		redirect("index");
	} 

}

?>