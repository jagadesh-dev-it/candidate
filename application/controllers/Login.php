<?php
defined('BASEPATH') OR exit ('NO direct script access allowed');
class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Loginmodel');
    }


    public function index(){
        $this->load->view('Loginview');
    }


    public function save(){
        $data=array(
            // 'id'=>$this->load->post('id'),
            'email'=>$this->input->post('email'),
            'psw'=>$this->input->post('psw'),
        
        );
        $this->db->insert('login',$data);
        redirect ('login/list_data');
    }


    public function log(){
        $this->load->view('Login');
    }


    public function list_data(){
        $details['data']=$this->Loginmodel->get_data();
        // print_r($details);
             $this->load->view('loglist',$details);
            //  echo print_r($details['date']);       
    }

    public function table(){
        $this->load->view('loglist_data');
    }

    public function updating($id){
        // print_r($id);
        $details['date']=$this->Loginmodel->updating_data($id);
        //  echo '<pre>';print_r($details['date']); exit();           
         $this->load->view('Loginviewnew',$details);

    }

    public function updated_list($id){ 
        // echo 'hari';
        $updated_result=array(
            'email'=>$this->input->post('email'),
            'psw'=>$this->input->post('psw'),
           
            
        );
        echo"<pre>";print_r($updated_result);
        $this->db->where('id',$id);
        $this->db->update('Login',$updated_result);
        // alert('deleted');
        // redirect('Login/loglist_data');
    }
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('Login');
        // alert('deleted');
        // redirect('Login/loglist_data');
    }

} 
?>