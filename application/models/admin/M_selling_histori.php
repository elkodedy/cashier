<?php
    class M_selling_histori extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('table_selling_transaction.*, table_users.name')
                      ->from('table_selling_transaction')
                      ->join('table_users', 'table_selling_transaction.user_id = table_users.user_id')
                      ->group_by('table_selling_transaction.selling_transaction_id');
            $query = $this->db->get();
            return $query->result();
        }
    }