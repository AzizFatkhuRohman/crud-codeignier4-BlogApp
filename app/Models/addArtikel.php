<?php
namespace App\models;
use CodeIgniter\Model;
class addArtikel extends Model{
    function _construct(){
        $this->db = db_connect();
    }
    function artikel(){
        return $this->db->table('artikel')->get();
    }
    function add($artikel){
        return $this->db->table('artikel')->insert($artikel);
    }
}