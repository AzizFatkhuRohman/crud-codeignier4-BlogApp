<?php
namespace App\models;
use CodeIgniter\Model;
class pengaduan extends Model{
    function _construct(){
        $this->db = db_connect();
    }
    function pengaduan(){
        return $this->db->table('pengaduan')->get();
    }
    function add($pengaduan){
        return $this->db->table('pengaduan')->insert($pengaduan);
    }
}