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

    public function edit($id){

      $data = array(
                'name' => $this->input->post('name'),
                'sex' => $this->post('sex'),
                'birth' => $this->post('birth'),
                'address' => $this->post('address'),
                'tel' => $this->post('tel'),
                'education' => $this->post('edu'),
                'subject' => $this->post('subject'),
                'other_info' => $this->post('detail'),
                'vdo' => $this->post('vdo')
            );
      $this->db->where('tutor_id',$id);
      $this->db->update('user_tutor',$data);
      $this->index();
      }
}
?>