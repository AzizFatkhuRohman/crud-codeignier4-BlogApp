<?= $this->extend('layout/templateinner')?>
<?= $this->section('content')?>
<section>
    <div class='container'
        style='margin-top:1rem; background-color:whitesmoke; margin-left:3px; margin-right:3px; text-align:center;'>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 0;
                foreach ($data as $row) : $nomor++;
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor?></th>
                    <td><?php echo $row->judul; ?></td>
                    <td>tanggal</td>
                    <td><a class='btn btn-outline-info' href="<?=base_url('detailinnerArtikel/'.$row->idArtikel)?>">
                            <i class='fa fa-eye'></i>
                        </a> | <a href='<?=base_url('editArtikel/'.$row->idArtikel)?>'
                            class=' btn btn-outline-primary'><i class="fa fa-file" aria-hidden="true"></i></a> |
                        <a href="<?=base_url('deleteArtikel/'.$row->idArtikel)?>" class='btn btn-outline-danger'
                            onClick="alert('Yakin Mau diHapus')"><i class='fa fa-trash'></i></a>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</section>
<?=$this->endSection()?>