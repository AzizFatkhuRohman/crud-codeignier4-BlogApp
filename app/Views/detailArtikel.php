<?=$this->extend('layout/template')?>
<?=$this->section('content')?>
<section>
    <?php
        $nomor = 0;
        foreach ($detailArtikel as $row) : ;
        ?>
    <div class="container mt-3" style='box-shadow: 10px 10px 5px grey; background-color:whitesmoke;'>
        <div class="img-box" style='text-align:center;justify-content:center;'>
            <img src="<?= base_url();?>/images/f1.png" alt="">
        </div>
        <div>
            <div>
                <h5>
                    <?php echo $row->judul; ?>
                </h5>
            </div>
            <div>
                <p>
                    <?php echo $row->isi; ?>
                </p>
            </div>
        </div>
    </div>
    <?php
        endforeach;
        ?>
</section>
<?=$this->endSection()?>