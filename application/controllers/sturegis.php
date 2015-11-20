<?php
class Sturegis extends CI_Controller {
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
        	$this->load->view('sturegis');
    	}
    }

    public function addstu(){
    	$user = $this->input->post("username");
    	$pass = $this->input->post("pass");
    	$name = $this->input->post("name");
    	$nick = $this->input->post("nickname");
    	$sex = $this->input->post("sex");
    	$email = $this->input->post("email");
    	$birth = $this->input->post("birth");
    	$add = $this->input->post("address");
    	$tel = $this->input->post("tel");
    	$school = $this->input->post("school");

    	$sqladdstu = " INSERT INTO user_student (`username`, `name`, `nickname`, `sex`, `birth`, `password`, `address`, `stu_email`, `tel`, `school`) 
    					VALUES ('".$user."', '".$name."', '".$nick."', '".$sex."', '".$birth."', '".$pass."', '".$add."', '".$email."', '".$tel."','".$school."') ";

    	$this->db->query($sqladdstu);


        // $this->db->query($sqlregis);
        $sqlaa = "select * from request";
        $this->db->query($sqlaa);
        $sqlaa = "select * from user_tutor";
        $this->db->query($sqlaa);
        $sqlaa = "select * from user_student";
        $this->db->query($sqlaa);

        $sqlgettuid = "select * from user_student where username = '".$user."' and password = '".$pass."' and name = '".$name."' ";
        $rs = $this->db->query($sqlgettuid)->row_array();
        $stid = $rs['student_id'];

        $image_data = $this->input->post("image-data");
        if ($image_data !=""){
            $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image_data));     
            file_put_contents('images/student/student-'.$stid.'.jpg', $data);
            $newname = "student-".$stid.".jpg";
            $sqlupdate = "update user_student SET stu_pic ='".$newname."' WHERE student_id = '".$stid."'";
            $this->db->query($sqlupdate);
        }
        redirect("login");


    }

}

?>