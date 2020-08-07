<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Kegiatan Ekstrakulikuler Murid
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_ekskul/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Kegiatan Ekstrakulikuler</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Ekskul</th>
            <th>Hari</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
            <th>Keterangan</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1; 
        foreach($c_ekskul as $kul) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $kul->nama_eks ?></td>
            <td><?php echo $kul->hari ?></td>
            <td><?php echo $kul->jam_masuk ?></td>
            <td><?php echo $kul->jam_keluar ?></td>
            <td><?php echo $kul->keterangan ?></td>
            <td width="20px"><?php echo anchor('administrator/c_ekskul/update/'.$kul->id_eks,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_ekskul/delete/'.$kul->id_eks,'<div class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>