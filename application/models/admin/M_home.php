<?php
    class M_home extends CI_Model{
            
        function count_users(){
            $this->db->select('*')
                      ->from('table_users');
            $query = $this->db->get();
            return $query->num_rows();
        }    
        function count_suppliers(){
            $this->db->select('*')
                      ->from('table_suppliers');
            $query = $this->db->get();
            return $query->num_rows();
        }   
        function count_purchase_transaction(){
            $this->db->select('*')
                      ->from('table_purchase_transaction');
            $query = $this->db->get();
            return $query->num_rows();
        }   
        function count_selling_transaction(){
            $this->db->select('*')
                      ->from('table_selling_transaction');
            $query = $this->db->get();
            return $query->num_rows();
        }  
        function sum_stock(){
            $this->db->select_sum('ts.stock')
                      ->from('table_stock ts');
            $query = $this->db->get();
            return $query->result();
        } 
        function sum_selling_transaction(){
            $this->db->select_sum('tst.total_price')
                      ->from('table_selling_transaction tst');
            $query = $this->db->get();
            return $query->result();
        } 
        function sum_purchase_transaction(){
            $this->db->select_sum('tpt.total_price')
                      ->from('table_purchase_transaction tpt');
            $query = $this->db->get();
            return $query->result();
        } 
        function profit(){
            $this->db->select_sum('tpt.total_price')
                      ->from('table_purchase_transaction tpt');
            $query = $this->db->get();
            return $query->result();
        } 
    }