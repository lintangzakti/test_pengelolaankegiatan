<nav class="navbar navbar-light bg-warning text-dark">
  <?php foreach($identitas as $id) : ?>
    <a class="navbar-brand"><strong><?php echo $id->judul_website ?></strong></a>
    <span class="medium">
	<?php echo $id->alamat ?> | <?php echo $id->email ?> | <?php echo $id->telp ?></span>
  <?php endforeach; ?>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto p-2">
      <a class="nav-item nav-link ml-3" href="<?php echo base_url('landing_page') ?>">Beranda</a>
      <a class="nav-item nav-link active ml-3" href="<?php echo base_url('informasi_sekolah_page') ?>">Informasi <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link ml-3" href="<?php echo base_url('fasilitas_sekolah_page') ?>">Fasilitas</a>
      <a class="nav-item nav-link ml-3" href="<?php echo base_url('galeri_page') ?>">Galeri</a>
      <a class="nav-item nav-link ml-3" href="<?php echo base_url('hubungi_kami_page') ?>">Hubungi Kami</a>
    </div>
	<form class="form-inline">
		<input class="form-control mr-sm-2" type="search" placeholder="Pencarian..." aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0 ml-2" type="submit">Pencarian</button>
		<button class="btn btn-outline-primary my-2 my-sm-0 ml-2" type="submit">Login</button>
	</form>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/slider/tampilan_frontend_1.jpg') ?>" class="d-block w-100" alt="gambar-1">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/slider/tampilan_frontend_2.jpg') ?>" class="d-block w-100" alt="gambar-2">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/slider/tampilan_frontend_3.jpg') ?>" class="d-block w-100" alt="gambar-3">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/slider/tampilan_frontend_4.jpg') ?>" class="d-block w-100" alt="gambar-4">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>