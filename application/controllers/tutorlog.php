<?php
class Tutorlog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('tuid')!=null ) {
            $id = $this->session->userdata('tuid');

            $sqlstudetail = "select * from request join payment on request.request_id = payment.request_id join user_student on request.student_id = user_student.student_id where payment.tutor_id = '".$id."' ";
            $data['rs'] = $this->db->query($sqlstudetail)->result_array();

    		$this->load->view('tutorlog',$data);
    	}else{
    		redirect("login");
    	}
        
    }
}

?>