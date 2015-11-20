<?php
class Stulog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('stid')!=null ) {
            $id = $this->session->userdata('stid');
            $sqlgetuser = "select * from payment join request on payment.request_id = request.request_id join user_tutor on payment.tutor_id = user_tutor.tutor_id where request.student_id = '".$id."' ";
            $data['rs'] = $this->db->query($sqlgetuser)->result_array();
    		$this->load->view('stulog',$data);
    	}else{
    		redirect("login");
    	}
    }


    
}

?>