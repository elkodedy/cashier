<?php
    class M_selling extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('table_selling_transaction.*, table_users.name')
                      ->from('table_selling_transaction')
                      ->join('table_users', 'table_selling_transaction.user_id = table_users.user_id')
                      ->group_by('table_selling_transaction.selling_transaction_id');
            $query = $this->db->get();
            return $query->result();
        }

        function display_selling_detail($id){
            $this->db->select('ts.*, tst.*, tm.*, tu.*')
                      ->from('table_selling ts')
                      ->join('table_selling_transaction tst', 'ts.selling_transaction_id = tst.selling_transaction_id', 'left')
                      ->join('table_medicine tm', 'ts.medicine_id = tm.medicine_id', 'left')
                      ->join('table_users tu', 'tu.user_id = tst.user_id', 'left')
                      ->where('ts.selling_transaction_id', $id);
            $query = $this->db->get();
            return $query->result();
        }
    }