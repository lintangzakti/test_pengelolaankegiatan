<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-book"></i> Tipe Gedung Sekolah
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_gedung/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Gedung</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Kode Gedung</th>
            <th>Nama Gedung</th>
            <th>Jumlah Lantai</th>
            <th>Keterangan</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1; 
        foreach($gedung as $gedu) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $gedu->kode_gedung ?></td>
            <td><?php echo $gedu->nama_gedung ?></td>
            <td><?php echo $gedu->jum_lantai ?></td>
            <td><?php echo $gedu->keterangan ?></td>
            <td width="20px"><?php echo anchor('administrator/c_gedung/update/'.$gedu->id_gedung,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_gedung/delete/'.$gedu->id_gedung,'<div class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>