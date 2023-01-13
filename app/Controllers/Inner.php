<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\artikel;
use App\Models\addArtikel;
use App\Models\editActArtikel;
class Inner extends BaseController
{
    public function artikelanda()
    {
        $artikel = new artikel();
        $data = ['data'=> $artikel -> data()->getResult()];
        return view('inner/artikelanda', $data);
    }
    public function dashboard(){
        return view("inner/dashboard");
    }
    public function addArtikel(){
      $val = $this->validate([
        'judul'=>'required',
        'isi'=>'required'
      ]);
      $gambar = $this->validate([
        'gambar' => [
            'uploaded[gambar]'
        ]
    ]);
      $artikel = new artikel();
      if(!$val){
        echo '<script>alert("Kolom tidak boleh kosong")</script>';
        echo '<script>window.location.href = "'.base_url("/dashboard").'";</script>';
      }else{
            $filegambar= $this->request->getFile('gambar');
            $filegambar->move('images');
            $namagambar= $filegambar->getName();
            $judul= $this->request->getPost('judul');
            $isi= $this->request->getPost('isi');
            $addArtikel = ['addArtikel'=> $artikel -> addArtikel($judul,$isi,$namagambar)];
              echo '<script>alert("Data berhasil di kirim")</script>';
              echo '<script>window.location.href = "'.base_url("/dashboard").'";</script>';
            
          }
    }
    public function detailArtikel($idArtikel){
      $artikel = new artikel();
          $detailArtikel = ['detailArtikel'=> $artikel -> detailArtikel($idArtikel)];
          return view ('inner/detailArtikel',$detailArtikel);
  }
  public function editArtikel($idArtikel){
    $artikel = new artikel();
    $detailArtikel = ['detailArtikel'=> $artikel -> detailArtikel($idArtikel)];

    return view ('inner/editArtikel',$detailArtikel);
  }
  public function editActArtikel(){
    $val = $this->validate([
      'judul'=>'required',
      'isi'=>'required'
    ]);
    $artikel = new artikel();
    if(!$val){
      echo '<script>alert("Kolom tidak boleh kosong")</script>';
      echo '<script>window.location.href = "'.base_url("/artikelanda").'";</script>';
    }else{
    $idArtikel=$this->request->getPost('idArtikel');
    $judul=$this->request->getPost('judul');
    $isi=$this->request->getPost('isi');
     $editActArtikel = ['editActArtikel'=> $artikel -> editActArtikel($idArtikel,$judul,$isi)];
     echo '<script>alert("Perubahan Berhasil Di Simpan")</script>';
     echo '<script>window.location.href = "'.base_url("/artikelanda").'";</script>';
    }
      
    }
  
    public function deleteArtikel($idArtikel){
      $artikel = new artikel();
            $detailArtikel = ['deleteArtikel'=> $artikel -> deleteArtikel($idArtikel)];
      return redirect()->to('/artikelanda');
    }
}