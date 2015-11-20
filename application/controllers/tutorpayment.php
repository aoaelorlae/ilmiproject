<?php
class Tutorpayment extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('tuid')!=null ) {
            $id = $this->session->userdata('tuid');

            $sqlgetre = "select * from request left join payment on request.request_id = payment.request_id ";
            $data['re'] = $this->db->query($sqlgetre)->result_array();
            $sqlgettu = "select * from user_tutor where tutor_id = '".$id."' ";
            $data['tu'] = $this->db->query($sqlgettu)->row_array();



    		$this->load->view('tutorpayment',$data);

    	}else{
    		redirect("login");
    	}
    	
        
    }
}

?>