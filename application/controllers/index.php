<?php
class Index extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	$sqlnumst = "select * from request";
    	$data['st'] = $this->db->query($sqlnumst);
    	$sqlnumtu = "select * from user_tutor";
    	$data['tu'] = $this->db->query($sqlnumtu);

        $sqlmath = "select * from request where subject = 'math' ";
        $sqlsci = "select * from request where subject = 'sci' ";
        $sqlthai = "select * from request where subject = 'thai' ";
        $sqlsocial = "select * from request where subject = 'social' ";
        $sqleng = "select * from request where subject = 'english' ";

        $data['st1'] = $this->db->query($sqlmath);
        $data['st2'] = $this->db->query($sqlsci);
        $data['st3'] = $this->db->query($sqlthai);
        $data['st4'] = $this->db->query($sqlsocial);
        $data['st5'] = $this->db->query($sqleng);

        $sqltumath = "select * from user_tutor where subject = 'math' ";
        $sqltusci = "select * from user_tutor where subject = 'sci' ";
        $sqltuthai = "select * from user_tutor where subject = 'thai' ";
        $sqltusocial = "select * from user_tutor where subject = 'social' ";
        $sqltueng = "select * from user_tutor where subject = 'english' ";

        $data['tu1'] = $this->db->query($sqltumath);
        $data['tu2'] = $this->db->query($sqltusci);
        $data['tu3'] = $this->db->query($sqltuthai);
        $data['tu4'] = $this->db->query($sqltusocial);
        $data['tu5'] = $this->db->query($sqltueng);

        $this->load->view('index',$data);
    }
}

?>