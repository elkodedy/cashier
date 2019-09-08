<?php
    class M_stock extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('table_medicine.*, table_stock.*')
                      ->from('table_stock')
                      ->join('table_medicine', 'table_stock.medicine_id = table_medicine.medicine_id');
            $query = $this->db->get();
            return $query->result();
        }
    }