<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mturunan extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

   public function save($data)
    {
        $this->db->insert("tb_turunan", $data);
        return $this->db->insert_id();
    }
 
    public function update($where, $data)
    {
        $this->db->update("tb_turunan", $data, $where);
        return $this->db->affected_rows();
    }
 
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("tb_turunan");
    }
    public function get_by_id($id)
    {
        $this->db->from("tb_turunan");
        $this->db->where('id',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
        public function get_by_id2($id)
    {
      
        $this->db->from("tb_turunan");
        //$this->db->where('id',$a);
        $this->db->like('anak_dari',$id,'after');
        $query = $this->db->get();
 
        return $query->result();
    }
    public function all_data()
    {
       $this->db->from("tb_turunan");
        $query = $this->db->get();
 
        return $query->result();
    }
        public function search($keyword){
        $this->db->like('nama', $keyword);
        $this->db->or_like('panggilan', $keyword);
        //$this->db->or_where('nama_istri', $keyword);
       // $this->db->or_where('telp', $keyword);
        //$this->db->or_where('alamat', $keyword);
        
        $result = $this->db->get('tb_turunan')->result(); // Tampilkan data turunan berdasarkan keyword
        
        return $result; 
    }

}