<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-child"></i> Hubungi Kami
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
   
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th width="20px">NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>ISI INFORMASI</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php
        $no = 1; 
        foreach($hubungi as $hub) : 
        ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $hub->nama ?></td>
            <td><?php echo $hub->email ?></td>
            <td><?php echo $hub->pesan ?></td>
            <td width="20px"><?php echo anchor('administrator/c_hubungi/kirim_email/'.$hub->id_hubungi,'<div class="btn btn-sm btn-primary"><i class="fas fa-comment-dots"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/c_hubungi/delete/'.$hub->id_hubungi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>