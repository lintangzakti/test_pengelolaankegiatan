<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-child"></i> Informasi Sekolah Al-Bahri
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_informasi/tambah_informasi','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Informasi</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Icon</th>
            <th>Judul Informasi</th>
            <th>Isi Informasi</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1; 
        foreach($informasi as $info) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $info->icon ?></td>
            <td><?php echo $info->judul_informasi ?></td>
            <td><?php echo $info->isi_informasi ?></td>
            <td width="20px"><?php echo anchor('administrator/c_informasi/update/'.$info->id_informasi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_informasi/delete/'.$info->id_informasi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>