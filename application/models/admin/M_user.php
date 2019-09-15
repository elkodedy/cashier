<?php
    class M_user extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('table_users.*, table_groups.*')
                      ->from('table_users')
                      ->join('table_groups','table_users.group_id = table_groups.group_id');
            $query = $this->db->get();
            return $query->result();
        }
    }