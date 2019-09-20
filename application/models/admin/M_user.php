<?php
    class M_user extends CI_Model{
            
        function displayrecords(){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('*')
                      ->from('table_users tu')
                      ->join('table_groups tg','tu.group_id = tg.group_id');
            $query = $this->db->get();
            return $query->result();
        }    
        function display_user($id){
            // $query=$this->db->query("select * from table_stock");
            $this->db->select('*')
                     ->from('table_users tu')
                     ->join('table_groups tg','tu.group_id = tg.group_id')
                     ->where('tu.user_id', $id);
            $query = $this->db->get();
            return $query->result();
        }

        function user_update($data){
            $this->db->update('table_users', $data, array('user_id' => $data['user_id']));
        }

        function user_insert($data){
            $this->db->insert('table_users', $data);
        }
    }