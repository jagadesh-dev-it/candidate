<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salescontroller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Salesmodel');
    }
    
    public function index(){
        $this->load->view('Salesentry');
    }
    
    public function save()
    {
        $data = array(
            // 'id' => this, // Start ID from 1 - Remove this line if you're using an auto-incrementing primary key in the database
            'cname' => $this->input->post('cname'),
            'regno' => $this->input->post('regno'),
            'rpname' => $this->input->post('rpname'),
            'bname' => $this->input->post('bname'),
            'cno' => $this->input->post('cno'),
            'acname' => $this->input->post('acname'),
            'mno' => $this->input->post('mno'),
            'gstno' => $this->input->post('gstno'),
            'image'=>$this->input->post('image')
        );
    
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB
        $config['encrypt_name'] = true;
    
        $this->load->library('upload', $config);
   
        if (!$this->upload->do_upload('image')) {

            // Image upload failed
            $error = $this->upload->display_errors();
            // Handle the error accordingly
            $data['error'] = $error; // Pass the error message to the view
            $this->load->view('Salesentry', $data); // Load the view with error message
        } else {
            // echo '4';exit;
            // Image upload successful
            $upload_data = $this->upload->data();
            $image_path = $upload_data['file_name'];
            
            // echo '<pre>';print_r($image_path);exit;
            // Save the image path to the database

            // $this->Salesmodel->save_image($image_path);
    
            // Add the image path to the $data array
            $data['image'] = $image_path;
    
            // Use the insert_data method of the Salesmodel
        }
        // echo '<pre>'; print_r($data);exit();
        $this->Salesmodel->insert_data($data);
    
        redirect('Salescontroller/list_data');
    }


    public function list_data(){
        $data['data'] = $this->Salesmodel->get_data(); // Use the get_data method of the Salesmodel
        
        $this->load->view('list', $data);
    }
    
    public function updating($id){
        $data['data'] = $this->Salesmodel->updating_data($id); // Use the updating_data method of the Salesmodel
        
        $this->load->view('Salesentrynew', $data);
    }


public function update_data($id){
    $updated_result = array(
        'cname' => $this->input->post('cname'),
        'regno' => $this->input->post('regno'),
        'rpname' => $this->input->post('rpname'),
        'bname' => $this->input->post('bname'),
        'cno' => $this->input->post('cno'),
        'acname' => $this->input->post('acname'),
        'mno' => $this->input->post('mno'),
        'gstno' => $this->input->post('gstno'),
        'image' => $this->input->post('image')
    );

    // $this->db->set($updated_result); 
    $this->db->where('id', $id);
    $this->db->update('sales',$updated_result);
    
    redirect('Salescontroller/list_data');
}

    
    public function delete($id){
        $this->Salesmodel->delete_data($id); 
            
        redirect('Salescontroller/list_data');
    }
    
    

    public function dataTable(){
        $data['results'] = $this->Salesmodel->get_data(); // Use the get_data method of the Salesmodel
        
        $this->load->view('list_data', $data);
    }


    // data tables
    
    
    public function search(){

        // echo "<pre>";print_r($_POST);exit;
		$this->load->library('datatables');
		// $data = $this->datatables->select('*')->from('visitordetails');
		// echo $this->datatables->generate();
        $this->datatables->select('id,cname,regno,rpname,bname,cno,acname,mno,gstno,image');
        $this->datatables->from('sales');
        echo $this->datatables->generate();
        
	}


// ajax to fetch data 

    public function getname()
    {
        $name = $this->input->post('name');
        $this->load->model('Salesmodel');
        $data = $this->Salesmodel->get_data_by_name($name);
        echo json_encode($data);
    }



}


?>

