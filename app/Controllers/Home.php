<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\artikel;
use App\Models\pengaduan;
use App\Models\addKomentar;
use App\Models\komentar;
class Home extends BaseController
{
    public function index()
    {
        $artikel = new artikel();
        $data = ['data'=> $artikel -> data()->getResult()];
        return view('index', $data);
    }
    public function detailArtikel($idArtikel){
        $artikel = new artikel();
            $detailArtikel = ['detailArtikel'=> $artikel -> detailArtikel($idArtikel)];
            return view ('detailArtikel',$detailArtikel);
    }
    
    public function addPengaduan()
    {
        $val= $this->validate([
            'pelapor'=>'required',
            'jenis'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'notlp'=>'required',
            'alamat'=>'required',
            'usia'=>'required',
            'kronologi'=>'required',
            
        ]);
        $pengaduan = new pengaduan();
        if(!$val){
            echo '<script>alert("Kolom tidak boleh kosong")</script>';
              echo '<script>window.location.href = "'.base_url("/pengaduan").'";</script>';
        }else{
            
        
        $pengaduan->add([
            'pelapor'=> $this->request->getPost('pelapor'),
            'jenis'=> $this->request->getPost('jenis'),
            'nama'=> $this->request->getPost('nama'),
            'email'=> $this->request->getPost('email'),
            'notlp'=> $this->request->getPost('notlp'),
            'alamat'=> $this->request->getPost('alamat'),
            'usia'=> $this->request->getPost('usia'),
            'kronologi'=> $this->request->getPost('kronologi'),
            
      
           ]);
              echo '<script>alert("Data berhasil di kirim")</script>';
              echo '<script>window.location.href = "'.base_url("/pengaduan").'";</script>';
            
        }
    }
    public function pengaduan(){
        return view('pengaduan');
    }
}