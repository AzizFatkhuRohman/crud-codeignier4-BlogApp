<?= $this->extend('layout/template')?>
<?= $this->section('content')?>
<section>
    <div class="container mt-5" style='text-align:center; box-shadow: 10px 10px 5px grey; background-color:whitesmoke;'>
        <form action="<?=site_url('/pengaduan')?>" method='POST' enctype='multipart/form-data' style='padding:5px'>
            <?=csrf_field()?>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Pelapor</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name='pelapor'>
                    <option value="korban">Korban</option>
                    <option value="bukan">Bukan</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Jenis Layanan</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name='jenis'>
                    <option value="Pemulihan Mental">Pemulihan Mental</option>
                    <option value="Pemulihan Fisik">Pemulihan Fisik</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" name='nama'
                    placeholder='Nama Lengkap'>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" name='email' placeholder='Email'>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" name='notlp'
                    placeholder='No Telepon'>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" name='alamat'
                    placeholder='Alamat Lengkap'>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" name='usia' placeholder='Usia'>
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='kronologi'
                    placeholder='Kronologi Kejadian'></textarea>
            </div>
            <div class="mb-3">
                <label for="">Unggah Bukti Pendukung <i>Format Pdf</i></label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name='bukti'>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-warning" style='color:white;' id="exampleFormControlInput1">
            </div>
        </form>
    </div>
</section>
<?=$this->endSection()?>