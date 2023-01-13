<?= $this->extend('layout/templateinner')?>
<?= $this->section('content')?>
<section>
    <div class='container'
        style='border-radius:1rem; color:black; padding:5px; background-color:whitesmoke; text-align:center;'>
        <?php
                
                foreach ($detailArtikel as $row) : ;
                ?>
        <form action="/editActArtikel" method='POST' enctype='multipart/form-data'>
            <?=csrf_field()?>
            <input type="hidden" name='idArtikel' value='<?= $row->idArtikel?>'>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ikon Artikel</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name='gambar'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name='judul'
                    value='<?php echo $row->judul; ?>'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Subtansi Artikel</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    name='isi'><?php echo $row->isi; ?></textarea>
            </div>
            <div class="mb-3">
                <button type='submit' class='btn btn-primary' name='submit'><i class="fa fa-paper-plane"
                        aria-hidden="true"></i></button>
            </div>
        </form>
        <?php
        endforeach;
        ?>
    </div>
</section>
<?=$this->endSection()?>