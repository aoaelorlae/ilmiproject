<?php
class Turegis extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('stid') != null) {
    		redirect("stuhome");
    	}elseif ($this->session->userdata('tuid') != null) {
    		redirect("tuhome");
    	}else{
        	$this->load->view('turegis');
        }
    }

    public function registutor(){
    	$user = $this->input->post("username");
    	$pass = $this->input->post("pass");
    	$name = $this->input->post("name");
    	$sex = $this->input->post("sex");
    	$birth = $this->input->post("birth");
    	$address = $this->input->post("address");
    	$email = $this->input->post("email");
    	$tel = $this->input->post("tel");
    	$edu = $this->input->post("edu");
    	$sub = $this->input->post("sub");
    	$detail = $this->input->post("detail");
    	$vdo = $this->input->post("vdo");

    	$sqlregis = "INSERT INTO user_tutor ( `username`, `password`, `name`, `sex`, `birth`, `address`, `tu_email`, `tel`, `education`, `subject`, `other_info`, `vdo`) 
    				VALUES ('".$user."', '".$pass."', '".$name."', '".$sex."', '".$birth."', '".$address."', '".$email."', '".$tel."', '".$edu."', '".$sub."', '".$detail."', '".$vdo."') ";

    	$this->db->query($sqlregis);
    	// echo $this->db->last_query();

    	redirect("login");

    }

}

?>