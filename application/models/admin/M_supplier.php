<?php
    class M_supplier extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('*')
                      ->from('table_suppliers');
            $query = $this->db->get();
            return $query->result();
        }

        function supplier_update($data){
            $this->db->update('table_suppliers', $data, array('supplier_id' => $data['supplier_id']));
        }

        function supplier_insert($data){
            $this->db->insert('table_suppliers', $data);
        }

        function supplier_delete($id){
            $this->db->delete('table_suppliers', array('supplier_id' => $id));
        }
    }