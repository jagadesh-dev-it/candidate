<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cruddata extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Crudd');
    }
    public function index(){
        $this->load->view('candidate');
        
    }
    public function save(){

        $data=array(
            'id'=>$this->input->post('id'),
            'fname'=>$this->input->post('fname'),
            'lname'=>$this->input->post('lname'),
            'email'=>$this->input->post('email'),
            'mnumber'=>$this->input->post('mnumber'),
            'gen'=>$this->input->post('gen'),
            'dob'=>$this->input->post('dob'),
            'age'=>$this->input->post('age'),
            'marital'=>$this->input->post('marital'),
            'spousename'=>$this->input->post('spousename'),
            'spouseage'=>$this->input->post('spouseage'),
            // 'spousework'=>$this->input->post('spousework'),
            'spousecompany'=>$this->input->post('spousecompany'),
            'hee'=>$this->input->post('hee'),
            'prevcompany'=>$this->input->post('prevcompany'),
            'yearsworked'=>$this->input->post('yearsworked'),
            'yoe'=>$this->input->post('yoe'),
            'prevdesignation'=>$this->input->post('prevdesignation'),
            
    // echo '<pre>';print_r($dob);exit;

        );
    //   echo '<pre>';print_r($data);exit;
        $this->db->insert('candidate',$data);
        redirect('Cruddata/list_data');

    }
    public function sam(){
        // $this->load->view('candidate');
        $this->load->view('candidate');
    }
    public function list_data(){
        $details['date']=$this->Crudd->get_data();
            //  echo '<pre>';print_r($details['date']);            
             $this->load->view('candidate',$details);
     
    }
    public function table(){
        $this->load->view('list_data');
    }




    //email
    public function shift_name_exists()
    {
        $shift_data = $this->input->post('email');
        $result     = $this->Crudd->shift_name_exists($shift_data);
        if ($result['result'] == 0) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
       // echo '<pre>';print_r($result);exit(); 
    }
           
    public function updating($id){
        // print_r($id);
        $details['date']=$this->Crudd->updating_data($id);
        //  echo '<pre>';print_r($details['date']); exit();           
         $this->load->view('candidatenew',$details);

    }
    
    public function updated_list($id){ 
        $updated_result=array(
            'id'=>$this->input->post('id'),
            'fname'=>$this->input->post('fname'),
            'lname'=>$this->input->post('lname'),
            'email'=>$this->input->post('email'),
            'mnumber'=>$this->input->post('mnumber'),
            'gen'=>$this->input->post('gen'),
            'dob'=>$this->input->post('dob'),
            'age'=>$this->input->post('age'),
            'marital'=>$this->input->post('marital'),
            'spousename'=>$this->input->post('spousename'),
            'spouseage'=>$this->input->post('spouseage'),
            // 'spousework'=>$this->input->post('spousework'),
            'spousecompany'=>$this->input->post('spousecompany'),
            'hee'=>$this->input->post('hee'),
            'prevcompany'=>$this->input->post('prevcompany'),
            'yearsworked'=>$this->input->post('yearsworked'),
            'yoe'=>$this->input->post('yoe'),
            'prevdesignation'=>$this->input->post('prevdesignation'),
            
        );
        // echo"<pre>";print_r( $updated_result);exit;
        $this->db->where('id_no',$id);
        $this->db->update('candidate',$updated_result);
        // alert('deleted');
        redirect('Cruddata/list_data');
    }
    public function delete($id)
    {
        $this->db->where('id_no',$id);
        $this->db->delete('candidate');
        // alert('deleted');
        redirect('Cruddata/list_data');
    }

    public function import_data() {
      
        // echo 'jh3ellop';exit;
        $this->load->library('excel');
        //echo '<pre>';print_r($this);exit(); 
        $this->load->library('upload');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xls/.xlsx';
        $config['max_size'] = '10000';
        $this->upload->initialize($config);
  
        $file = $_FILES['file']['tmp_name'];
  
      // //echo '<pre>';print_r($file);exit(); 
  
        $data = $this->upload->data();
        $inputFileName = './uploads/'.$data['file_name'];
        
        $inputFileName = $file;
            
        //  Read your Excel workbook
        try {
          $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
          $objReader = PHPExcel_IOFactory::createReader($inputFileType);
          $objPHPExcel = $objReader->load($inputFileName);
      } catch(Exception $e) {
  
          die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
      }
        
        //  Get worksheet dimensions
        $sheet = $objPHPExcel->getSheet(0);
        $n=$sheet->getHighestRow(); 
            
        $err = "";
  
        $upload_format = array('id','fname','lname','email','mnumber' ,'gen','dob','age','marital','spousename','spouseage','spousecompany','hee','prevcompany','yearsworked','prevdesignation','yoe');
  
        // print_r($upload_format);
        if($upload_format[0] != $sheet->getCell('A1')->getValue()){
        
            $err .=  '(A1) name not matching with import format<br>';
        }
        if($upload_format[1] != $sheet->getCell('B1')->getValue()){
            
            $err .=  '(B1) name not matching with import format<br>';
        }
        if($upload_format[2] != $sheet->getCell('C1')->getValue()){
            
            $err .=  '(C1) name not matching with import format<br>';
        }
        if($upload_format[3] != $sheet->getCell('D1')->getValue()){
            
            $err .=  '(D1) name not matching with import format<br>';
        }
        if($upload_format[4] != $sheet->getCell('E1')->getValue()){
            
            $err .=  '(E1) name not matching with import format<br>';
        }
        if($upload_format[5] != $sheet->getCell('F1')->getValue()){
            
            $err .=  '(F1) name not matching with import format<br>';
        }
        if($upload_format[6] != $sheet->getCell('G1')->getValue()){
            
            $err .=  '(G1) name not matching with import format<br>';
        }
        if($upload_format[7] != $sheet->getCell('H1')->getValue()){
            
            $err .=  '(H1) name not matching with import format<br>';
        }
        if($upload_format[8] != $sheet->getCell('I1')->getValue()){
  
         $err .=  '(I1) name not matching with import format<br>';
       }
       if($upload_format[9] != $sheet->getCell('J1')->getValue()){
           
       $err .=  '(J1) name not matching with import format<br>';
       }
       if($upload_format[10] != $sheet->getCell('K1')->getValue()){
           
       $err .=  '(K1) name not matching with import format<br>';
       }
       if($upload_format[11] != $sheet->getCell('L1')->getValue()){
           
       $err .=  '(L1) name not matching with import format<br>';
       }
       if($upload_format[12] != $sheet->getCell('M1')->getValue()){
           
       $err .=  '(M1) name not matching with import format<br>';
       }
      if($upload_format[13] != $sheet->getCell('N1')->getValue()){
      
      $err .=  '(N1) name not matching with import format<br>';
      }
      if($upload_format[14] != $sheet->getCell('O1')->getValue()){
  
      $err .=  '(O1) name not matching with import format<br>';
      }
      if($upload_format[15] != $sheet->getCell('P1')->getValue()){
  
      $err .=  '(P1) name not matching with import format<br>';
      }
      if($upload_format[16] != $sheet->getCell('Q1')->getValue()){

      $err .=  '(Q1) name not matching with import format<br>';
      }
      $rows=array();
      $reg = '/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i';
      $regExp = '/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/';
      for($i=2;$i<=$n;$i++){
        
          // $row['id_no'] =trim($sheet->getCell('A' . $i)->getValue());
          $row['id'] =trim($sheet->getCell('A' . $i)->getValue());
          $row['fname'] =trim($sheet->getCell('B' . $i)->getValue());
          $row['lname'] = trim($sheet->getCell('C' . $i)->getValue());
          $row['email'] = trim($sheet->getCell('D' . $i)->getValue());
          $row['mnumber'] = trim($sheet->getCell('E' . $i)->getValue());
          if (empty($row['mnumber'])) {
            $err .= '(E' . $i . ') Contact number is required<br>';
        } elseif (!preg_match("/^[0-9]{10}$/", $row['mnumber'])) {
            $err .= '(E' . $i . ') Invalid contact number format<br>';
        }
          $row['gen'] = trim($sheet->getCell('F' . $i)->getValue());


          //date of birth function
          $date = trim($sheet->getCell('G' . $i)->getValue());
          if(strlen($date) == 5){     
			$datess = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($date));
			$pieces = explode('-', $datess);
		}else{
			$datess = date('Y-m-d', strtotime($date));
			$pieces = explode('-', $datess);
		}
          $row['dob'] = $datess;
          $row['age'] = trim($sheet->getCell('H' . $i)->getValue());
          $row['marital'] = trim($sheet->getCell('I' . $i)->getValue());
          $row['spousename'] = trim($sheet->getCell('J' . $i)->getValue());
          $row['spouseage'] = trim($sheet->getCell('K' . $i)->getValue());
          $row['spousecompany'] = trim($sheet->getCell('L' . $i)->getValue());
          $row['hee'] = trim($sheet->getCell('M' . $i)->getValue());
          $row['prevcompany'] = trim($sheet->getCell('N' . $i)->getValue());
          $row['yearsworked'] = trim($sheet->getCell('O' . $i)->getValue());
          $row['prevdesignation'] = trim($sheet->getCell('P' . $i)->getValue());
          $row['yoe'] = trim($sheet->getCell('Q' . $i)->getValue());
          $rows[] = $row;
      }
        //   echo '<pre>';print_r($rows);exit();
          //excel validation
            //first name
            if (empty($row['id'])) {
                // $err .= '(A' . $i . ') id is required<br>';
            }

            // Validation for last name
            if (empty($row['fname'])) {
                $err .= '(B' . $i . ') first name is required<br>';
            }
            if (empty($row['lname'])) {
                $err .= '(C' . $i . ') last name is required<br>';
            }

            // Validation for email
            if (empty($row['email'])) {
                $err .= '(D' . $i . ') Email is required<br>';
            } elseif (!filter_var($row['email'], FILTER_VALIDATE_EMAIL)) {
                $err .= '(D' . $i . ') Invalid email format<br>';
            }

           

            
        //   echo '<pre>';print_r($err);exit();

            

        if ($err != "") {
            $_SESSION['error'] = $err; // store the error message in session
            redirect('Cruddata/list_data');
    
        //   print_r($row);
        // if($err != ""){
            
        //     echo $err;
            
        //     die();
        // }
  
        if($err != ""){
          $_SESSION['error'] = $err; // store the error message in session
          redirect('Cruddata/list_data');
           // stop the script execution
          }
  
        
        if($n <= 1){
            
            echo "Sorry, No data found";
            
            die();
        }
    }
    $this->db->insert_batch('candidate',$rows);
    // echo '<pre>'; print_r($rows);exit;
    redirect('Cruddata/list_data');
        }









        public function exports()
        {
            $this->load->library('excel');
            $this->load->model('Crudd');
            $data = $this->Crudd->export_data();
    
            $object = new PHPExcel();
            $object->setActiveSheetIndex(0);
    
            $table_columns = array('id','fname','lname','email','mnumber' ,'gen','dob','age','marital','spousename','spouseage','spousecompany','hee','prevcompany','yearsworked','prevdesignation','yoe');
    
            $column = 0;
    
        foreach($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }
    
        $excel_row = 2;
    
        foreach($date as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row['id']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row['fname']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row['lname']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row['email']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['mnumber']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row['gen']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row['dob']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row['age']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row['marital']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row['spousename']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row['spouseage']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row['spousecompany']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row['hee']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row['prevcompany']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row['yearsworked']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row['prevdesignation']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row['yoe']);




    
    
            $excel_row++;
        }
        date_default_timezone_set("Asia/Jakarta");
        $this_date = date("Y-m-d");
        $file_name = "MemberList".$this_date.".xlsx";
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        ob_end_clean();
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename='.$file_name);
        $object_writer->save('php://output');
            
            
        }
}
 ?>

