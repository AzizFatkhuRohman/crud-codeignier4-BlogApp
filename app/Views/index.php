<?= $this->extend('layout/template')?>
<?= $this->section('content')?>
<!-- slider section -->
<section>
    <div class='container mt-5'>
        <form action="" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="search">
            </div>
        </form>
    </div>
</section>
<!-- end slider section -->
</div>


<!-- food section -->

<section class="food_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Artikel
            </h2>
        </div>



        <div class="filters-content">
            <div class="row grid">
                <?php
                $nomor = 0;
                foreach ($data as $row) : $nomor++;
                ?>
                <div class="col-sm-6 col-lg-4 all pizza">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="images/<?php echo $row->gambar;?>" alt="">
                            </div>
                            <div class="detail-box">
                                <h5 style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                    <?php echo $row->judul; ?>
                                </h5>
                                <p style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                    <?php echo $row->isi; ?>
                                </p>
                                <div>
                                    <a class='btn btn-outline-warning'
                                        href="<?=base_url('detailArtikel/'.$row->idArtikel)?>">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="btn-box">
            <a href="">
                View More
            </a>
        </div>
    </div>
</section>
<?=$this->endSection()?>