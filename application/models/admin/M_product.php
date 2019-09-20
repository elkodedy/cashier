<?php
    class M_product extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('tmc.*, tc.*, tm.*')
                      ->from('table_medicine_category tmc')
                      ->join('table_medicine tm', 'tm.medicine_id = tmc.medicine_id')
                      ->join('table_category tc', 'tc.category_id = tmc.category_id')
                      ->group_by('tm.medicine_name');
            $query = $this->db->get();
            return $query->result();
        } 
        function display_product($id){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('tmc.*, tc.*, tm.*')
                      ->from('table_medicine_category tmc')
                      ->join('table_medicine tm', 'tm.medicine_id = tmc.medicine_id')
                      ->join('table_category tc', 'tc.category_id = tmc.category_id')
                      ->group_by('tm.medicine_name')
                      ->where('tm.medicine_id', $id);
            $query = $this->db->get();
            return $query->result();
        }
    }   