<?php
class Loginmodel extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert('login',$data);
    } 
    public function get_data(){
        $this->db->select('*');
        $this->db->from('login');
        $query=$this->db->get()->result_array();
        // print_r($query);
        return $query;
    }

    public function updating_data($idm){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('id =',$idm);
        $query= $this->db->get()->result_array();
        // print_r($query);
        return $query;
      }

      public function update_data($id)
      {
        $this->db->where('id',$id);
      $query=  $this->db->update('Login',$updated_result);
        // print_r($query);
      }

      public function delete_data($id)
      {
        $this->db->where('id',$id);
        $this->db->update('Login');
      }
      
}