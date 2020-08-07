<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Guru Al-Bahri
    </div>

    <table class="table table-bordered table-striped table-hover">
        <?php foreach($detail as $dt) :?>
        <img class="mb-5" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width:20%; display: block; margin-left: auto; margin-right: auto; ">
        
        <tr>
            <td style="width: 30%;">Nama</td>
            <td><?php echo $dt->nama_guru; ?></td>
        </tr>
        <tr>
            <td style="width: 30%;">NIP</td>
            <td><?php echo $dt->no_nip; ?></td>
        </tr>
        <tr>
            <td style="width: 30%;">Alamat</td>
            <td><?php echo $dt->alamat; ?></td>
        </tr>
        <tr>
            <td style="width: 30%;">Telepon</td>
            <td><?php echo $dt->nohp; ?></td>
        </tr>
        <tr>
            <td style="width: 30%;">Tempat Lahir</td>
            <td><?php echo $dt->tempat_lahir; ?></td>
        </tr>
        <tr>
            <td style="width: 30%;">Tanggal Lahir</td>
            <td><?php echo $dt->tgl_lahir; ?></td>
        </tr>
        <tr>
            <td style="width: 30%;">Jenis Kelamin</td>
            <td><?php echo $dt->jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td style="width: 30%;">Tahun Masuk</td>
            <td><?php echo $dt->tahun_masuk; ?></td>
        </tr>
        <?php endforeach ?>
        </tr>
    </table>

    <?php echo anchor('administrator/c_guru','<div class="btn btn-sm btn-primary mb-5">Kembali</div>') ?>
</div>