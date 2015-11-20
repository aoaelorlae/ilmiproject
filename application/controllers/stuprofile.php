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


    public function edit(){
        $id = $this->session->userdata('stid');
        $data = array(
                'name' => $this->input->post('name'),
                'sex' => $this->input->post('sex'),
                'birth' => $this->input->post('birth'),
                'address' => $this->input->post('address'),
                'tel' => $this->input->post('tel'),
                'stu_email' => $this->input->post('email')
            );
        $this->db->where('student_id',$id);
        $this->db->update('user_student',$data);
        redirect("stuprofile");
    }

}

?>