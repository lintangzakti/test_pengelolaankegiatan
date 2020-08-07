<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Kelas Sekolah
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_kelas/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Kelas</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Wali Kelas</th>
            <th>Ruangan</th>
            <th>Gedung</th>
            <th>Jumlah Siswa</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1; 
        foreach($kelas as $kel) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $kel->kode_kelas ?></td>
            <td><?php echo $kel->nama_kelas ?></td>
            <td><?php echo $kel->wali_kelas ?></td>
            <td><?php echo $kel->ruangan ?></td>
            <td><?php echo $kel->gedung ?></td>
            <td><?php echo $kel->jumlah_siswa ?></td>
            <td width="20px"><?php echo anchor('administrator/c_kelas/update/'.$kel->id_kelas,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_kelas/delete/'.$kel->id_kelas,'<div class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>