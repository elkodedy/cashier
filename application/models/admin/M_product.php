<?php
    class M_product extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('table_medicine_category.*, table_category.*, table_medicine.*')
                      ->from('table_medicine_category')
                      ->join('table_medicine', 'table_medicine.medicine_id = table_medicine_category.medicine_id')
                      ->join('table_category', 'table_category.category_id = table_medicine_category.category_id')
                      ->group_by('table_medicine.medicine_name');
            $query = $this->db->get();
            return $query->result();
        }
    }   