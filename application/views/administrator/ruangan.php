<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Tipe Ruangan Sekolah
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_ruangan/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Ruangan</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Kode Ruangan</th>
            <th>Nama Gedung</th>
            <th>Nama Ruangan</th>
            <th>Kapasitas</th>
            <th>Keterangan</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1; 
        foreach($ruangan as $ruang) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $ruang->kode_ruangan ?></td>
            <td><?php echo $ruang->nama_gedung ?></td>
            <td><?php echo $ruang->nama_ruangan ?></td>
            <td><?php echo $ruang->kapasitas ?></td>
            <td><?php echo $ruang->keterangan ?></td>
            <td width="20px"><?php echo anchor('administrator/c_ruangan/update/'.$ruang->id_ruangan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_ruangan/delete/'.$ruang->id_ruangan,'<div class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>