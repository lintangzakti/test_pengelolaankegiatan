<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-globe-asia"></i> Tahun Masuk Semester
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/c_thnmsk/tambah_tahun','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sk"></i> Tambah Tahun Masuk</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Tahun Masuk</th>
            <th>Semester</th>
            <th>Status</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
            $no = 1; 
            foreach($tahun_masuk as $thn) : 
            ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $thn->tahun_msk ?></td>
                <td><?php echo $thn->semester ?></td>
                <td><?php echo $thn->status ?></td>
                <td width="20px"><?php echo anchor('administrator/c_thnmsk/update/'.$thn->id_thnmsk,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('administrator/c_thnmsk/delete/'.$thn->id_thnmsk,'<div class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
    </table>

</div>