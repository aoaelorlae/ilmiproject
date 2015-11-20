<?php
class Tutorhome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('tuid')!=null ) {
            // <option value="math">คณิตศาสตร์</option>
            // <option value="sci">;วิทยาศาสตร์</option>
            // <option value="thai">ภาษาไทย</option>
            // <option value="social">สังคมศึกษา</option>
            // <option value="english">ภาษาอังกฤษ</option>

            $sqlmath = "select * from request where subject = 'math' ";
            $sqlsci = "select * from request where subject = 'sci' ";
            $sqlthai = "select * from request where subject = 'thai' ";
            $sqlsocial = "select * from request where subject = 'social' ";
            $sqleng = "select * from request where subject = 'english' ";

            $data['tu1'] = $this->db->query($sqlmath);
            $data['tu2'] = $this->db->query($sqlsci);
            $data['tu3'] = $this->db->query($sqlthai);
            $data['tu4'] = $this->db->query($sqlsocial);
            $data['tu5'] = $this->db->query($sqleng);

    		$this->load->view('tutorhome',$data);
    	}else{
    		redirect("login");
    	}

        
    }
}

?>