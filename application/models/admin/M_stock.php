<?php
    class M_stock extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('*')
                      ->from('table_stock ts')
                      ->join('table_medicine tm', 'ts.medicine_id = tm.medicine_id');
            $query = $this->db->get();
            return $query->result();
        }   
        function display_stock($id){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('*')
                      ->from('table_stock ts')
                      ->join('table_medicine tm', 'ts.medicine_id = tm.medicine_id')
                      ->where('tm.medicine_id', $id);
            $query = $this->db->get();
            return $query->result();
        }
    }