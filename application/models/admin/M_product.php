<?php
    class M_product extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('tmc.*, tc.*, tm.*')
                      ->from('table_medicine tm')
                      ->join('table_medicine_category tmc', 'tmc.medicine_id = tm.medicine_id', 'left')
                      ->join('table_category tc', 'tc.category_id = tmc.category_id', 'left')
                      ->group_by('tm.medicine_name');
            $query = $this->db->get();
            return $query->result();
        } 
        function display_product($id){
            $this->db->select('tmc.*, tc.*, tm.*')
                      ->from('table_medicine tm')
                      ->join('table_medicine_category tmc', 'tmc.medicine_id = tm.medicine_id', 'left')
                      ->join('table_category tc', 'tc.category_id = tmc.category_id', 'left')
                      ->group_by('tm.medicine_name')
                      ->where('tm.medicine_id', $id);
            $query = $this->db->get();
            return $query->result();
        }
        function get_category($id){
            $this->db->select('tmc.*, tc.*, tm.*')
                      ->from('table_medicine tm')
                      ->join('table_medicine_category tmc', 'tmc.medicine_id = tm.medicine_id', 'left')
                      ->join('table_category tc', 'tc.category_id = tmc.category_id', 'left')
                      ->where('tm.medicine_id', $id);
            $query = $this->db->get();
            return $query->result();
        }

        function product_update($data){
            $this->db->update('table_medicine', $data, array('medicine_id' => $data['medicine_id']));
        }

        function product_insert($data){
            $this->db->insert('table_medicine', $data);
        }

        function product_delete($id){
            $this->db->delete('table_medicine', array('medicine_id' => $id));
        }
    }   