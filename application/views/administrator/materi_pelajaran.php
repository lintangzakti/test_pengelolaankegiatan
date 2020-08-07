<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Materi Pelajaran Siswa
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_pelajaran/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Pelajaran</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Kode Pelajaran</th>
            <th>Nama Pelajaran</th>
            <th>Kategori Pelajaran</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1; 
        foreach($pelajaran as $pel) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $pel->kode_jadwal ?></td>
            <td><?php echo $pel->nama_jadwal ?></td>
            <td><?php echo $pel->kategori_jadwal ?></td>
            <td width="20px"><?php echo anchor('administrator/c_pelajaran/update/'.$pel->id_pelajaran,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_pelajaran/delete/'.$pel->id_pelajaran,'<div class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>