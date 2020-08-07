<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Guru Sekolah Al-Bahri
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_guru/tambah_guru','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Guru Pengajar</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Jenis Kelamin</th>
            <th>Tahun Masuk</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no = 1; 
        foreach($guru as $gr) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $gr->nama_guru ?></td>
            <td><?php echo $gr->no_nip ?></td>
            <td><?php echo $gr->jenis_kelamin ?></td>
            <td><?php echo $gr->tahun_masuk ?></td>
            <td width="20px"><?php echo anchor('administrator/c_guru/detail/'.$gr->id_guru,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_guru/update/'.$gr->id_guru,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_guru/delete/'.$gr->id_guru,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>