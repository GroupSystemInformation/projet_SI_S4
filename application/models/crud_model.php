<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud_model extends CI_Model {

        public function __construct(){
            parent::__construct();
        }

        public function check_admin($user_id) {
            $this->db->where('idUtilisateur', $user_id);
            $this->db->where('estAdmin', 1);
            $query = $this->db->get('utilisateur');
            return $query->num_rows() > 0;
        }
        
        public function insert($table,$data)
        {
            return $this->db->insert($table,$data);
        }

        public function getById($table,$id,$identifiant)
        {
            $this->db->where($identifiant, $id);
            $query = $this->db->get($table);
            
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return array();
            }
        }

        public function get_rows_by_conditions($table, $select_columns, $condition_columns, $condition_values){
            $conditions = array();
            for($i = 0; $i < count($condition_columns); $i++){
                $conditions[$condition_columns[$i]] = $condition_values[$i];
            }
            $this->db->select($select_columns);
            $this->db->from($table);
            $this->db->where($conditions);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();
            }
            return null;
        }
        

        public function delete_general($table,$id,$identifiant)
        {
            return($this->db->delete($table, array($identifiant => $id)));
        }

        public function getByParamWithResultUnique($table,$nomchamp,$value,$identifiant)
        {
            $this->db->select($nomchamp);
            $this->db->from($table);
            $this->db->where($identifiant,$value);
            $this->db->limit(1);
            $query = $this->db->get();
            
            if ($query->num_rows() === 1) {
                return $query->row()->$nomchamp;
            } else {
                return 0;
            }
        }

        public function edit_entry($table,$id,$identifiant){
            $this->db->select("*");
            $this->db->from($table);
            $this->db->where($identifiant,$id);
            $query = $this->db->get();

            if(count($query -> result()) >0){
                return $query->row();
            }
        }

        public function update($table, $id, $identifiant, $data) {
            $this->db->where($identifiant, $id);
            return $this->db->update($table, $data);
        }


        public function get_all_data($table)
        {
            $query = $this->db->get($table);
            if(count($query->result()) > 0){
                return $query->result();
            }
        }
        

        public function getSum($table, $column, $identifiant, $id) {
            $this->db->select_sum($column);
            $this->db->where($identifiant, $id);
            $query = $this->db->get($table);
            
            if ($query->num_rows() > 0) {
                $row = $query->row();
                return $row->$column;
            } else {
                return 0;
            }
        }

        
}