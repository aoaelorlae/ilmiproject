<?php
class Sturequest extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('stid')!=null ) {
    		$this->load->view('sturequest');
    	}else{
    		redirect("login");
    	}
        
    }


    public function addrequest(){
        $startdate = $this->input->post("start");
        $studydate = $this->input->post("study");
        $timest = $this->input->post("timestart");
        $timeen = $this->input->post("timeend");
        $time = $timest."-".$timeen;
        $level = $this->input->post("level");
        $location = $this->input->post("location");
        $detail = $this->input->post("detail");
        $sub = $this->input->post("sub");

        $id = $this->session->userdata('stid');

        $day = "";
        for ($i=0; $i < count($studydate) ; $i++) { 
            if ($i == 0) {
                $day = $studydate[$i];
            }else{
                $day = $day.", ".$studydate[$i];
            }
        }

        $sqladdrequest = "INSERT INTO request (`subject`, `student_date`, `time`, `start_date`, `location`, `detail`, `student_id`) 
                                VALUES ('".$sub."', '".$day."', '".$time."', '".$startdate."', '".$location."', '".$detail."', '".$id."') ";

        $this->db->query($sqladdrequest);

        $sqlreid = "select * from request where subject = '".$subject."' and student_date = '".$day."' and location = '".$location."' and detail = '".$detail."' and student_id = '".$id."' ";
        $rei = $this->db->query($sqlreid)->row_array();
        $reid = $rei['request_id'];

        $topic = "[".$reid."] ILMI TUTOR ";
        $detail = "request id : ".$reid."\nSubject : ".$sub."\nStart : ".$startdate."\nStudy : ".$day."\nTime : ".$time."\r\nLocation : ".$location."\r\nLevel : ".$level."\r\nDetail : ".$detail."\r\n\r\n Thank You, ILMITUTOR";

        $sqlgettu = "select * from user_tutor where subject = '".$sub."' ";
        $rs = $this->db->query($sqlgettu)->result_array();

        $this->load->library('email_class');
        foreach ($rs as $r) {
            $email_data = array(
                        'from' => array('name' => 'ILMITUTOR'),
                        'to' => array('email' => $r['tu_email'], 'name' => $r['name']),
                        'subject' => $topic,
                        'message' => $detail
                        );
            $this->email_class->send_email($email_data);
        }


        redirect("stuhome");

    }

}

?>