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

        function display_purchase_detail($id){
            $this->db->select('tp.*, tpt.*, tm.*')
                      ->from('table_purchase tp')
                      ->join('table_purchase_transaction tpt', 'tp.purchase_transaction_id = tpt.purchase_transaction_id', 'left')
                      ->join('table_medicine tm', 'tp.medicine_id = tm.medicine_id', 'left')
                      ->where('tp.purchase_transaction_id', $id);
            $query = $this->db->get();
            return $query->result();
        }
    }