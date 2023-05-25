<?php
class Salesmodel extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert('sales', $data);
        return $this->db->insert_id();
    }

    public function get_data()
    {
        $query = $this->db->get('sales')->result_array();
        return $query;
    }

    public function updating_data($id)
    {
        $this->db->select('*');
        $this->db->from('sales');
        $this->db->where('id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function update_data($id, $updated_data)
{
    // $this->db->set($updated_data);
    $this->db->where('id', $id);
    $this->db->update('sales');
}

      
    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sales');
    }

    public function jaga($name)
    {
        $this->db->select('*');
        $this->db->where('cname', $name);
        $query = $this->db->get('sales')->row_array();
        return $query;
    }

    public function save_image($image_path)
{
$data = array(
    'image' => $image_path
);
// print_r($data);
// Insert the image path into the database 
$this->Salesmodel->insert($data);
}


// ajax funtion to fetch data 
    public function get_data_by_name($name)
    {
        $this->db->select('cname, regno, rpname, bname, cno, acname, gstno');
        $this->db->from('sales');
        $this->db->where('mno', $name);
        $query = $this->db->get();

        return $query->row_array();
    }


}
?>
