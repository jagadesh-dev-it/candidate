<?php
class Crudd extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert('candidate',$data);
    } 
    public function get_data(){
        $this->db->select('*');
        $this->db->from('candidate');
        $query=$this->db->get()->result_array();
        // print_r($query);
        return $query;
    }


  //gmail exist

  public function shift_name_exists($shift_data)
  {
      $this->db->select('count(email) as result,id');
      $this->db->where('email', $shift_data);
      // $this->db->where('if_flag', 0);
      return $this->db->get('candidate')->row_array();
  }

  
    public function updating_data($idm){
      $this->db->select('*');
      $this->db->from('candidate');
      $this->db->where('id_no =',$idm);
      $query= $this->db->get()->result_array();
      // print_r($query);
      return $query;
    }
    
    
    public function update_data($id)
    {
      $this->db->where('id_no',$id);
    $query=  $this->db->update('candidate',$updated_result);
      // print_r($query);
    }
    
    public function delete_data($id)
    {
      $this->db->where('id',$id);
      $this->db->update('candidate');
    }
    
    public function export_data(){
      $this->db->select(array('id','fname','lname','email','mnumber' ,'gen','dob','age','marital','spousename','spouseage','spousecompany','hee','prevcompany','yearsworked','prevdesignation','yoe'));
      $this->db->from('candidate');
      $query = $this->db->get();
      return $query->result_array();
    }
}
?>