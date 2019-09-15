<?php
    class M_purchase_histori extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('table_purchase_transaction.*, table_users.name, table_suppliers.supplier_name')
                      ->from('table_purchase_transaction')
                      ->join('table_users', 'table_purchase_transaction.user_id = table_users.user_id')
                      ->join('table_suppliers', 'table_purchase_transaction.supplier_id = table_suppliers.supplier_id')
                      ->group_by('table_purchase_transaction.purchase_transaction_id');
            $query = $this->db->get();
            return $query->result();
        }
    }