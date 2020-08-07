<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </div>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang!</h4>
        <p>Selamat Datang <strong><?php echo $username; ?></strong> di Sistem Informasi Pengelolaan Kegiatan Pada Sekolah Islam Al-Bahri, Anda telah login sebagai <strong><?php echo $level; ?></strong></p>
		<hr>
        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-cogs"></i> Control Panel</button>
    </div>
    
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url('administrator/c_siswa')?>"><p class="nav-link small text-info">Siswa</p></a>
                            <i class="fas fa-3x fa-chalkboard"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Guru</p></a>
                            <i class="fas fa-3x fa-chalkboard-teacher"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Tahun Ajaran</p></a>
                            <i class="fas fa-3x fa-calendar-alt"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Nilai Rapor</p></a>
                            <i class="fas fa-3x fa-file"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Info Sekolah</p></a>
                            <i class="fas fa-3x fa-bullhorn"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Fasilitas</p></a>
                            <i class="fas fa-3x fa-laptop"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Galeri</p></a>
                            <i class="fas fa-3x fa-image"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Tentang Kami</p></a>
                            <i class="fas fa-3x fa-info-circle"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>