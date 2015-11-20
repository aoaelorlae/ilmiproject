<?php
class Tutorprofile extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

    public function index(){
    	if ($this->session->userdata('tuid')!=null ) {
             $id = $this->session->userdata('tuid');
            $sqlgetst = "select * from user_tutor where tutor_id = '".$id."' ";
            $data['profile'] = $this->db->query($sqlgetst)->row_array();
    		$this->load->view('tutorprofile',$data);
    	}else{
    		redirect("login");
    	}
    }

    public function edit(){
        $id = $this->session->userdata('tuid');
        $data = array(
                'name' => $this->input->post('name'),
                'sex' => $this->input->post('sex'),
                'birth' => $this->input->post('birth'),
                'address' => $this->input->post('address'),
                'tel' => $this->input->post('tel'),
                'tu_email' => $this->input->post('email'),
                'education' => $this->input->post('edu'),
                'subject' => $this->input->post('subject'),
                'other_info' => $this->input->post('detail'),
                'vdo' => $this->input->post('vdo')
            );
        $this->db->where('tutor_id',$id);
        $this->db->update('user_tutor',$data);
        redirect("tutorprofile");
    }
}
?>