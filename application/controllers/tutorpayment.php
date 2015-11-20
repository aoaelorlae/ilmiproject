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

            $sqlgetre = "select * from payment RIGHT join request on payment.request_id = request.request_id";
            $data['re'] = $this->db->query($sqlgetre)->result_array();
            $sqlgettu = "select * from user_tutor where tutor_id = '".$id."' ";
            $data['tu'] = $this->db->query($sqlgettu)->row_array();

            $data['pay'] = 0;

    		$this->load->view('tutorpayment',$data);

    	}else{
    		redirect("login");
    	}
    }

    public function checkpayment(){
        $result = $this->input->post("result");
        $apcode = $this->input->post("apCode");
        $amt = $this->input->post("amt")+0;

        $statuspay = substr($result,0,2);
        $tupay = (int)substr($result,2,3);
        $repay = (int)substr($result, 5,3);
        $amto = number_format($amt,2,".","");

        if ($statuspay == "00") {
            $sqlsetpay = "INSERT INTO payment (`amount`, `tutor_id`, `request_id`) 
                            VALUES ('".$amto."', '".$tupay."', '".$repay."') ";
            $this->db->query($sqlsetpay);

            $data['pay'] = 1;
        }else{
            $data['pay'] = 2;
        }
        $this->load->view("tutorpayment",$data);

    }



}

?>