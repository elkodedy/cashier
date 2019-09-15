<?php
    class M_supplier extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('*')
                      ->from('table_suppliers');
            $query = $this->db->get();
            return $query->result();
        }
    }