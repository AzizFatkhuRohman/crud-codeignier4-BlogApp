<?php
namespace App\models;
use CodeIgniter\Model;
class artikel extends Model{
    function _construct(){
        $this->db = db_connect();
    }
    function addArtikel($judul,$isi,$namagambar){
        $sql = "INSERT INTO artikel (judul,isi,gambar) VALUES
        ('$judul','$isi','$namagambar')";
        $query = $this->db->query($sql);
        return $query;
       }
    function data(){
    $sql = "SELECT * FROM artikel ORDER BY idArtikel DESC";
    $query = $this->db->query($sql);
    return $query;
    }
    function detailArtikel($idArtikel){
        $sql = "SELECT * FROM artikel WHERE idArtikel='$idArtikel'";
        $query = $this->db->query($sql);
        $data = $query->getResult();
        return $data;
       }
       function artikel(){
        return $this->db->table('artikel')->get();
    }
       function editActArtikel($idArtikel,$judul,$isi){
        $sql = "UPDATE artikel SET judul='$judul', isi='$isi' WHERE idArtikel='$idArtikel'";
        $query = $this->db->query($sql);
        return $query;
       }
       
    function deleteArtikel($idArtikel){
    $sql = "DELETE FROM artikel WHERE idArtikel='$idArtikel'";
    $query = $this->db->query($sql);
    return $query;
       }
}