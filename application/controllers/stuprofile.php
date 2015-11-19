<?php
class Stuprofile extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){

    	if ($this->session->userdata('stid')!=null) {

            $id = $this->session->userdata('stid');
            $sqlgetst = "select * from user_student where student_id = '".$id."' ";
            $data['profile'] = $this->db->query($sqlgetst)->row_array();
    		$this->load->view('stuprofile',$data);
    	}else{
    		redirect("login");
    	}
        
    }
}

?>